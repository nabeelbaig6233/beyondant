<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UpgradeNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $first_name,$account_type;
    public function __construct($first_name,$account_type)
    {
        $this->first_name=$first_name;
        $this->account_type=$account_type;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.upgrade_account',["first_name"=>$this->first_name,'account_type'=>$this->account_type])->from("Notifications@Beyondant.com");
    }
}
