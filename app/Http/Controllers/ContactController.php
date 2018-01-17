<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{

    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:9',
        ]);

        $contact = Contact::create($request->all());

        Mail::send('emails.contact', $contact,
            function ($message) {
                $message->from('no-reply@prideacjax.com');
                $message->to(env('MAIL_USERNAME)'), 'Pride AC Jacksonville')->subject('Quote Request');
            });

        return back()->with('success', 'Thanks for contacting us!');
    }
}
