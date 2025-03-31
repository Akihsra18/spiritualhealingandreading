<?php

// namespace App\Mail;

// use Illuminate\Bus\Queueable;
// use Illuminate\Contracts\Queue\ShouldQueue;
// use Illuminate\Mail\Mailable;
// use Illuminate\Mail\Mailables\Content;
// use Illuminate\Mail\Mailables\Envelope;
// use Illuminate\Queue\SerializesModels;

// class MailService extends Mailable
// {
//     use Queueable, SerializesModels;

//     public $formData;

//     public $emailbody;

//     /**
//      * Create a new message instance.
//      *
//      * @param array $formData
//      */
//     public function __construct($formData)
//     {
//         $this->formData = $formData;
//     }

//     /**
//      * Build the message.
//      *
//      * @return $this
//      */
//     public function build()
//     {
//         return $this->subject('Mail from Laravel App')
//             ->view('emailbody', [
//                 'email_message' => $this->formData["message"],
//                 'customer_email' => $this->formData["email"]
//             ]);
//     }
// }