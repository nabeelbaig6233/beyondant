<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Http\Request;

class ResellerMail extends Mailable
{
    public $resellerMail;

    public function __construct(Request $resellerForm)
    {
        $this->resellerMail = $resellerForm->all();
    }

    public function build()
    {
        return $this->markdown('emails.reseller')->from("Notifications@Beyondant.com");
    }
}
