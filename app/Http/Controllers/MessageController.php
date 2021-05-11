<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Mail;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $message = request()->validate(
            [
                'name'=>'required',
                'email'=>'required|email',
                'subject'=>'required',
                'comments'=>'required|min:3'
            ],
            [
                'name.required'=>'field name is required',
                'email.required'=>'field email is required ',
                'subject.required'=>'field subject is required ',
                'comments.required'=>'field comments is required ',
            ]
        );
        //Sent Mail
        Mail::to(request('email'))->queue(new MessageReceived($message));
        return redirect()->route('contact')->with('info', 'Message was sent succesfully ');
        //End send Mail
    }

}
