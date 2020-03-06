<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Mail\ContactForm;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
    }

    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|size:10',
            //'g-recaptcha-response' => [
            //    'required' => 'Please verify that you are not a robot.',
            //    'captcha' => 'Captcha error! try again later or contact site admin.',
            //],
        ]);

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->sq_footage = $request->sq_footage;
        $contact->notes = $request->notes;
        $contact->save();

        Mail::send(new ContactForm($contact));

        return back()->with('success', 'Thanks for contacting us! We will contact you in 1-2 business days with more information.');
    }
}
