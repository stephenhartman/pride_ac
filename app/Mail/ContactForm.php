<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Contact;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * ContactForm constructor.
     * @param Contact $contact
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->to(env('MAIL_USERNAME'))
            ->subject('Pride AC Quote Request')
            ->markdown('emails.contact');
    }
}
