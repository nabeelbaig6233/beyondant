<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LogTableListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     //
    // }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        //return $event->data["name"]."-".$event->data['role_id']."-".$event->data["email"]."-".$event->data['company_name']."-".$event->data["mobile_number"]."-".$event->data["phone_number"]."-".$event->data["section"]."-".$event->data["action"].'-'.$event->data["deleted_by"];
        try {
            \App\UserLog::insert([
                "name"          =>$event->data['name'],
                "role_id"       =>$event->data['role_id'],
                "email"         =>$event->data['email'],
                "company_name"  =>$event->data['company_name'],
                "mobile_number" =>$event->data["mobile_number"],
                "phone_number"  =>$event->data["phone_number"],
                "section"       =>$event->data["section"],
                "action"        =>$event->data["action"],
                "deleted_by"    =>$event->data["deleted_by"],
            ]);
        } catch(\Exception $e) {
            //return $e->getMessage();
        }
    }
}
