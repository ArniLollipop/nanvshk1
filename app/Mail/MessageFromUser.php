<?php

namespace App\Mail;

use App\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MessageFromUser extends Mailable
{
    use Queueable, SerializesModels;

    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
            return $this->to($this->message->email, $this->message->username)
                        ->bcc('alimzhanova_dinara90@mail.ru')
                        ->subject($this->message->subject)
                        ->markdown('emails.users.message');
       
    }
}
