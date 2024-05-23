<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageFromUser;
use App\Http\Requests\ContactsRequest;
use App\Message;

class ContactsController extends Controller
{
    public function index()
    {
        
        return view('contacts');
    }

    

    public function store(ContactsRequest $request)
    {  

            $username = $request->firstname;
            $email = $request->email;
            $phone = $request->phone;
            $subject = $request->subject;
            $mess = $request->message;
           
            $message = $this->addToMessagesTables($request);
            Mail::send(new MessageFromUser($message));
            session()->flash('success_message', 'Спасибо! Ваше письмо отправлено!');
            return back()->with('success_message', 'Спасибо! Ваше письмо отправлено!');
      
    }

    

    protected function addToMessagesTables($request)
    {

        // Insert into messages table
        $message = Message::create([
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        return $message;
    }


}
