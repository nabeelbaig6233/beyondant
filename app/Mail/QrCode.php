<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class QrCode extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $qrcode;
    protected $name;
    public function __construct(Request $qrcode, $name)
    {
        $this->qrcode = $qrcode->all();
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('notifications@Beyondant.com')->subject('From Beyondant Reseller Channel')
            ->markdown('emails.qrcode')->with([
                'qrcode' => $this->qrcode,
                'name' => $this->name
            ]);
    }
}
