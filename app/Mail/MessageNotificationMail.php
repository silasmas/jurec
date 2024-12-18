<?php

namespace App\Mail;

use App\Models\User;
use App\Models\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $message;
    public $action;

    /**
     * Create a new message instance.
     */
    public function __construct(User $user, Message $message, string $action)
    {
        $this->user = $user;
        $this->message = $message;
        $this->action = $action;
    }

    /**
     * Build the message.
     */
    public function build(): self
    {
        return $this->subject('Mise à jour des messages')
            ->view('emails.message_notification')
            ->with([
                'userName' => $this->user->name,
                'messageContent' => $this->message->content,
                'action' => $this->action,
            ]);
    }
}
