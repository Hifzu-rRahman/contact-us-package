<?php

namespace Hifzu\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Hifzu\Contact\Mail\ContactMailable;
use Hifzu\Contact\Models\Contact as ModelsContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class Contact extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        $validator = validator::make(
            $request->all(),
            [
                'name'  => ['required'],
                'email' => ['required', 'email:rfc,dns'],
            ]
        );
        if ($validator->fails()) {
            session()->flash('error', 'Invalid request');
        }else{
            
            ModelsContact::create($request->all());
            Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name,$request->email));
            session()->flash('success', 'Request Submitted Successfully');
        }
       
        return redirect()->to(route('contact')); 
    }
}
