<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AccountMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $email,$password,$acc_type;
    public function __construct($email,$password,$acc_type)
    {
        $this->email=$email;
        $this->password=$password;
        $this->acc_type=$acc_type;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.personal_account',["email"=>$this->email,"password"=>$this->password,"type"=>$this->acc_type]);
    }
}
