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
        $vcardObj->addName($contactResult->name);
        $vcardObj->addEmail($contactResult->email);
        $vcardObj->addPhoneNumber($contactResult->mobile_number,'CELL');
        $vcardObj->addAddress($contactResult->address);
        $vcardObj->addCompany($contactResult->company_name);
        $vcardObj->addJobtitle($contactResult->title);

        return $vcardObj->download();
    }
}
