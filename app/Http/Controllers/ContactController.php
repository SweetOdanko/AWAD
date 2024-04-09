<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        $contact = new Contact();
        $contact->name = $validatedData['name'];
        $contact->email = $validatedData['email'];
        $contact->phnum = $validatedData['number'];
        $contact->message = $validatedData['message'];
        $contact->save();

        Session::flash('success', 'Your message has been sent!');

        return redirect()->back();
    }
}
