<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EnquirySubmitted extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct(public array $enquiry)
    {
    }

    public function envelope(): Envelope
    {
        $subjectPrefix = $this->enquiry['source'] === 'contact' ? 'Contact Page' : 'Home Page';

        return new Envelope(
            subject: $subjectPrefix.' Enquiry: '.$this->enquiry['subject'],
            replyTo: [
                new Address($this->enquiry['email'], $this->enquiry['name']),
            ],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.enquiry-submitted',
        );
    }
}