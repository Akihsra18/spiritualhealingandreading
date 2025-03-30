<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        if($request->input('message') == ""){
            $message = "No message";
        }
        else{
            $message = $request->input('message');
        }

        $mailData = [
            'fName' => $request->input('fName'),
            'lName' => $request->input('lName'),
            'email' => $request->input('email'),
            'service' => $request->input('service'),
            'message' => $message,
        ];

        Mail::to('hannah.angelicconnection@gmail.com')->send(new ContactMail($mailData));

        return redirect()->back()->with('success', 'Thank you for your message!');
    }
}
