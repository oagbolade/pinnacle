<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        $validator = $this->validate($request,[
            'full_name' => 'required',
            'email' => 'required',
            'description' => 'required'
        ]);

        $contact = new Contact();
        $contact->full_name = $request->input('full_name'); 
        $contact->email = $request->input('email'); 
        $contact->description = $request->input('description'); 
        
        if ($contact->save()) {
            Mail::to('info@pinnacleriskng.com')->cc('derin@pinnacleriskng.com')->bcc('gtkbrain@gmail.com')->send(new ContactMail($contact));
            return redirect()->back()->with('success','Cheers! Here is to success ahead. We will get in touch within 48 hours');
        } else {
            return redirect()->back()->with('error','An unusual error has occurred. Please, try again in 30 seconds.');
        }
    }
}
