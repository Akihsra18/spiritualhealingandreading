<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class FormController extends Controller
{
    // public function processForm(Request $request)
    // {
    //     // Validate the form data on the server side
    //     $validatedData = $request->validate([
    //         'fName' => 'required',
    //         'email' => 'required|email',
    //     ]);

    //     //Once validated, process the mail
    //     if (!empty($validatedData)) {
    //         $formData = [
    //             'fName' => $request->input('fName'),
    //             'lName' => $request->input('lName'),
    //             'email' => $request->input('email'),
    //             'service' => $request->input('service'),
    //             'message' => $request->input('message'),
    //         ];
    //         $recipientEmail = env('APPLICATION_MAIL_RECIPIENT');
    //         Mail::to($recipientEmail)->send(new MailService($formData));
    //     }
    //     return redirect()->back()->with('success', 'Hi, we received your message. Thank you!');

    //     // $mailData = [
    //     //     'title' => 'Mail from ItSolutionStuff.com',
    //     //     'body' => 'This is for testing email using smtp.'
    //     // ];
           
    //     // Mail::to('your_email@gmail.com')->send(new MailService($mailData));
             
    //     // dd("Email is sent successfully.");
    // }

    public function submit(Request $request)
    {
        // Capture the data
        // $fName = $request->input('fName');
        // $lName = $request->input('lName');
        // $email = $request->input('email');
        // $service = $request->input('service');
        // $message = $request->input('message');

        $mailData = [
            'fName' => $request->input('fName'),
            'lName' => $request->input('lName'),
            'email' => $request->input('email'),
            'service' => $request->input('service'),
            'message' => $request->input('message'),
        ];

        Mail::to('destination@example.com')->send(new ContactMail($mailData));

        return back()->with('success', 'Thank you for your message!');
    }

}
