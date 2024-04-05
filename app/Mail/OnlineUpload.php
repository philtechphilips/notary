<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Attachment;
use Illuminate\Queue\SerializesModels;

class OnlineUpload extends Mailable
{
    use Queueable, SerializesModels;
    
    public $updatedFileName;

    /**
     * Create a new message instance.
     */
    public function __construct($updatedFileName)
    {
        $this->updatedFileName = $updatedFileName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Online Upload from Notary')
                    ->view('mails.upload')
                    ->attach($this->updatedFileName);
    }
}
