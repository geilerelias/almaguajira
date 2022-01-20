<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Mail;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function send(Request $request)
    {
        if ($request->ajax()) {
            $message = request()->validate([
                'name' => 'required',
                'email' => 'required|email',
                'subject' => '',
                'content' => 'required|min:3'
            ], [
                'name.required' => __('I need your name')
            ]);

            Mail::to('info@almaguajira.com')->queue(new MessageReceived($message));
            // return new MessageReceived($message);
            return 'Mensaje enviado';
        }


    }
}
