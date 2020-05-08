<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CreateEmployeeMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($company,$email,$password)
    {

        $this->email=$email;
        $this->password=$password;
        $this->company=$company;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.employee')
            ->with("company",$this->company)
            ->with("password",$this->password)
            ->with("email",$this->email)
            ->from("Notifications@Beyondant.com");
    }
}
