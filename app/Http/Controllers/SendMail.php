<?php

namespace App\Http\Controllers;

use App\Mail\SendAMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendMail extends Controller
{
    public function SendMessage(Request $request){
        $validatedData = $request->validate([
            'name' => 'string|max:255',
            'contact' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'service' => 'required|string',
            'messages' => 'required|string'
        ]);

        Log::info($validatedData);

        $name = $request->name;
        $contact = $request->contact;
        $email = $request->email;
        $service = $request->service;
        $messages = $request->messages;

        Mail::to( getenv('MAIL_TO'))->send(new SendAMessage($name, $contact, $email, $service, $messages));
        return response()->json(["messages" => "message sent sucessfully"]);
    }
}
