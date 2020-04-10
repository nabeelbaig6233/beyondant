<?php
namespace App;
use JeroenDesloovere\VCard\VCard;

class VcardExport
{

    public function contactVcardExportService($contactResult)
    {
        require_once '../vendor/Behat-Transliterator/Transliterator.php';
        require_once '../vendor/jeroendesloovere-vcard/VCard.php';
        // define vcard
        $vcardObj = new VCard();
        // add personal data
        $vcardObj->addName($contactResult->first_name.' '.$contactResult->last_name);
        $vcardObj->addEmail($contactResult->email);
        $vcardObj->addPhoneNumber($contactResult->mobile_number,'CELL');
        $vcardObj->addAddress($contactResult->address);
        $check=$contactResult->parent_id;
        if($check!=0) {
            $vcardObj->addCompany(User::find($check)->company_name);
        }else {
            $vcardObj->addCompany($contactResult->company_name);
        }
        $vcardObj->addJobtitle($contactResult->job_title);

        return $vcardObj->download();
    }
}
