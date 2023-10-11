<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $phone;
    public $comments;

    /**
     * Create a new message instance.
     */
    public function __construct($name, $phone, $comments)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->comments = $comments;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope {

        return new Envelope(
            subject: 'Contacto',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content {

        return new Content(
            view: 'mail.basic',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array {

        return [];
    }
}
