<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendAMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $contact;
    public $email;
    public $service;
    public $messages;

    public function __construct($name, $contact, $email, $service, $messages)
    {
        $this->name = $name;
        $this->contact = $contact;
        $this->email = $email;
        $this->service = $service;
        $this->messages = $messages;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    { 
        return $this->from(getenv('MAIL_FROM_ADDRESS'), getenv('APP_NAME'))
                    ->subject('Notary message from ' . $this->name)
                    ->view('mails.send-a-message');
    }
}
