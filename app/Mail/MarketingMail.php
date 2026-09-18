<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MarketingMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $messageBody;
    public $name;
    public $tracker;
    public $campaignName;

    /**
     * Create a new message instance.
     */
    public function __construct($subject, $messageBody, $name = 'Customer', $tracker = null, $campaignName = null, $company = null)
    {
        $this->subject = $subject;
        $this->messageBody = $messageBody;
        $this->name = $name;
        $this->tracker = $tracker;
        $this->company = $company;
        $this->campaignName = $campaignName;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new \Illuminate\Mail\Mailables\Address('sales@klick2up.com', 'Klick2up Technology'),
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.marketing',
            with: [
                'messageBody' => $this->messageBody,
                'name' => $this->name,
                'tracker' => $this->tracker,
                'campaignName' => $this->campaignName,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
