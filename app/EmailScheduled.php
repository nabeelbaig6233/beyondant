<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\meeting;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewContactAlert;
use App\User;
use Illuminate\Support\Facades\DB;

class EmailScheduled extends Model
{
    public function init() {
        
        $all_data = DB::table('meetings as m')
        ->join("users as u","m.user_id",'=','u.id')
        ->select("u.id",'u.first_name','u.last_name','u.email as user_email','m.email as meeting_email','u.default_meeting_alert as meeting_alert')
        ->selectRaw('datediff(now(),m.created_at) as date_dif')
        ->groupBy('meeting_email')
        ->orderBy('user_email')
        ->get();        
        

        if(!empty($all_data) && count($all_data)>0) {
            foreach($all_data as $row) {
                $meeting_alert = $row->meeting_alert;
                $name = $row->first_name.''.$row->last_name;
                $userEmail = $row->user_email;
                
                if($meeting_alert) {
                    $data = explode("-",$meeting_alert);
                    $action = $data[1];
                    $date_diff = $row->date_dif;
                    if($action==="Days" && ($date_diff===$data[0]) ) {
                        Mail::to($userEmail)->send(new NewContactAlert($name));
                    } else if($action==="Weeks" && ($date_diff===($data[0]*7) )) {
                        Mail::to($userEmail)->send(new NewContactAlert($name));
                    } else {
                        continue;
                    }
                } else {
                    continue;
                }
                Mail::to("altaf.korejo@technado.co")->send(new NewContactAlert($name));
            }
        }        
        
        //if(!empty($all_data)){
            //Mail::to("altafkorejo.cs17@gmail.com")->send(new NewContactAlert("ok done"));
        //}
        
        //$data = meeting::all();
        
        // $data = meeting::select(\DB::raw('DATEDIFF(now(),created_at) as daysDiff'),'user_id')
        // ->whereIn(\DB::raw('DATEDIFF(now(),created_at)'),array(1,7))->having('daysDiff','>','0')->get()->toSql();
        
        // if($data){
            // $total = count($data);
            
        //     Mail::to("altafkorejo.cs17@gmail.com")->send(new NewContactAlert("altafkorejo"));
        // }
        
        // $data = meeting::where('id',2)->first();
        // if(!empty($data)) {
        //     Mail::to("altafkorejo.cs17@gmail.com")->send(new NewContactAlert("Altaf12"));
        // } else {
        //     Mail::to("altafkorejo.cs17@gmail.com")->send(new NewContactAlert("Altaf123"));
        // }
        
        // $data = meeting::select(\DB::raw('DATEDIFF(now(),created_at) as daysDiff'),'user_id')
        // ->whereIn(\DB::raw('DATEDIFF(now(),created_at)'),array(1,7))->having('daysDiff','>','0')->get();

        // if(!empty($data)) {
        //     Mail::to("altafkorejo.cs17@gmail.com")->send(new NewContactAlert("Altaf Korejo"));
        //     foreach($data as $row) {
        //         $obj = User::select("first_name","email")->find($row->user_id);
        //         $first_name = $obj->first_name;
        //         $email = $obj->email;
        //         Mail::to($email)->send(new NewContactAlert($first_name));
        //     }
        // }
        
        //else {
            
        // }
    }
}

//$myOb = new EmailScheduled();
//$myOb->init();