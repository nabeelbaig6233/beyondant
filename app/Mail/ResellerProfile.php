<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResellerProfile extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $messages,$credentials,$profile_link;
    public function __construct($messages,$credentials,$profile_link)
    {
        $this->messages=$messages;
        $this->credentials=$credentials;
        $this->profile_link=$profile_link;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.reseller_profile')
            ->subject('Reseller Notification')
            ->with("messages",$this->messages)
            ->with("credentials",$this->credentials)
            ->with("profile_link",$this->profile_link);
    }
}
