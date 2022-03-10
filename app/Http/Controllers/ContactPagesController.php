<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Models\contact;

class ContactPagesController extends Controller
{
   public function showPage()
   {
     return view('pages.contact.contact');
   }

   
   public function store(Request $request)
   {
    $contact_form_data = request()->all();
    Mail::to('mohammadalaminsiam@gmail.com')->send(new ContactFormMail($contact_form_data));
    
    $this->validate($request,[
        'name' => 'required|string',
        'message' => 'required|string', 
        'subject' => 'required|string',   
    ]);

    $contactList = new contact;
    $contactList->name    =    $request->name;
    $contactList->message =    $request->message;
    $contactList->subject =    $request->subject;

    $contactList->save();
    return redirect()->route('contact','/#contact_form')->with('success','Your Message has been successfully submitted');

   }
}
