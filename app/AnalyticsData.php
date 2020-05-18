<?php


namespace App;


//
use App\models\views;
use function GuzzleHttp\Psr7\str;

class AnalyticsData
{
    public function initializeAnalytics($path='')
    {
        // Creates and returns the Analytics Reporting service object.

        // Use the developers console and download your service account
        // credentials in JSON format. Place them in this directory or
        // change the key file location if necessary.
        $KEY_FILE_LOCATION = $path!=''?$path:'../beyondant-37bd5df762b7.json';

        // Create and configure a new client object.
        $client = new \Google_Client();
        $client->setApplicationName("Hello Analytics Reporting");
        $client->setAuthConfig($KEY_FILE_LOCATION);
        $client->setScopes(['https://www.googleapis.com/auth/analytics.readonly']);
        $analytics = new \Google_Service_Analytics($client);

        return $analytics;
    }

    function getFirstProfileId($analytics) {
        // Get the user's first view (profile) ID.

        // Get the list of accounts for the authorized user.
        $accounts = $analytics->management_accounts->listManagementAccounts();

        if (count($accounts->getItems()) > 0) {
            $items = $accounts->getItems();
            $firstAccountId = $items[0]->getId();

            // Get the list of properties for the authorized user.
            $properties = $analytics->management_webproperties
                ->listManagementWebproperties($firstAccountId);

            if (count($properties->getItems()) > 0) {
                $items = $properties->getItems();
                $firstPropertyId = $items[0]->getId();

                // Get the list of views (profiles) for the authorized user.
                $profiles = $analytics->management_profiles
                    ->listManagementProfiles($firstAccountId, $firstPropertyId);

                if (count($profiles->getItems()) > 0) {
                    $items = $profiles->getItems();

                    // Return the first view (profile) ID.
                    return $items[0]->getId();

                } else {
                    throw new Exception('No views (profiles) found for this user.');
                }
            } else {
                throw new Exception('No properties found for this user.');
            }
        } else {
            throw new Exception('No accounts found for this user.');
        }
    }

    function getResults($analytics, $profileId,$user_id) {
        // Calls the Core Reporting API and queries for the number of sessions
        // for the last seven days.
        $pagePath='@public/profile/'.$user_id.'';
        $filters=$user_id!='1'?[
            "metrics"=>'ga:pageviews',
            "dimensions"=>'ga:date',
            'filters'=>'ga:pagePath='.$pagePath.''
        ]:[
            "metrics"=>'ga:pageviews',
            "dimensions"=>'ga:date'
        ];
        return $analytics->data_ga->get(
            'ga:' . $profileId,
            '30daysAgo',
            'today',
            'ga:pageviews',
            $filters);
    }

    function getViewsForEachEmployees($analytics,$profileId,$id){
        $pagePath='@public/profile/'.$id.'';
        return $analytics->data_ga->get(
            'ga:'.$profileId,
            '30daysAgo',
            'today',
            'ga:pageviews',
            [
                'filters'=>'ga:pagePath='.$pagePath
            ]
        );
    }

    function getViewsEachPage($analytics,$profileId){
        return $analytics->data_ga->get(
            'ga:'.$profileId,
            'yesterday',
            'yesterday',
            'ga:pageviews',
            [
                'dimensions'=>'ga:date,ga:pagePath',
                'filters'=>'ga:pagePath==/public/,ga:pagePath=~^/public/profile/'
            ]
        );
    }

    public function getGoogleData(){
        $analytics=$this->initializeAnalytics(base_path().'\beyondant-37bd5df762b7.json');
        $profile = $this->getFirstProfileId($analytics);
        $results = $this->getViewsEachPage($analytics, $profile);
        $data=$results->getRows();
        foreach ($data as $item){
            $date=$this->getDate($item[0]);
            $path=$item[1];
            $views=$item[2];
            views::create(
                [
                    'path'=>$path,
                    'views_count'=>$views,
                    'google_dated'=>$date
                ]
            );
        }
    }

    public function getDate($date){
        return substr($date, 0, 4) . "-" . substr($date, 4, 2) . "-" . substr($date, 6, 2);
    }


    function printResults($results) {
        // Parses the response from the Core Reporting API and prints
        // the profile name and total sessions.
        if (count($results->getRows()) > 0) {

            // Get the profile name.
            $profileName = $results->getProfileInfo()->getProfileName();

            // Get the entry for the first entry in the first row.
            $rows = $results->getRows();
            $data=[];
                foreach ($rows as $row){
                    $date = substr($row[0], 0, 4) . "-" . substr($row[0], 4, 2) . "-" . substr($row[0], 6, 2);
                    array_push($data,[$row[1],$date]);
                }

            return $data;
        } else {
            print "No results found.\n";
        }
    }

}
