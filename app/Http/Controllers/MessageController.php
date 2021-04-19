<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Mail;

class MessageController extends Controller
{
    public function store(Request $request)
    {

        $message = request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'comments'=>'required|min:3'],
            [
                'name.required'=>'put the name'
            ]
        );
                //enviar el email

        Mail::to(request('email'))->queue(new MessageReceived($message));

        return 'Mensaje Enviado';
        //redirect(route('Messages', 'Mensaje Enviado'))
    }

}
