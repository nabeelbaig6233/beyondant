<?php

namespace App\Mail;

use http\Env\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EntrepreneursMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $entrepreneursMail;
    public function __construct($request)
    {
        $this->entrepreneursMail=$request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.entrepreneurs')->with("entrepreneursMail",$this->entrepreneursMail)->from("Notifications@Beyondant.com");
    }
}
