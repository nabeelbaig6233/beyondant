<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class IntroductionEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $user,$company_name,$first_name,$last_name,$meeting_location;
    public function __construct($user,$company_name,$first_name,$last_name,$meeting_location)
    {
        $this->user=$user;
        $this->company_name=$company_name;
        $this->first_name=$first_name;
        $this->last_name=$last_name;
        $this->meeting_location=$meeting_location;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.meet',["user"=>$this->user,"company_name"=>$this->company_name,"first_name"=>$this->first_name,"last_name"=>$this->last_name,"location"=>$this->meeting_location])->from("Notifications@Beyondant.com");
    }
}