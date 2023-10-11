<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Sell extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $phone;
    public $comments;
    public $products;
    public $prods;

    /**
     * Create a new message instance.
     */
    public function __construct($name, $phone, $products, $comments)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->comments = $comments;
        $this->products = $products;
        $this->prods = implode(", ", $this->products);

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Venta de insumos',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.sell-contact',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
