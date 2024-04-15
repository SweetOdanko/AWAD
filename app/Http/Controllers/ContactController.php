<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function contact()
    {   $id=Auth::id();
        return view('contact',['id'=>$id]);
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
        $contact->user_id=$request->user_id;
        $contact->save();

        Session::flash('success', 'Your message has been sent!');

        return redirect()->back();
    }

    public function index(){
        $messages=Contact::all();
        $id=Auth::id();
        return view('viewMessage',['messages'=>$messages,'id'=>$id]);
    }

    public function delete($id){
        $contact=Contact::findOrFail($id);
        $contact->delete();
        return redirect('/vMessage');
    }

    public function updateContactForm($id){
        $contact=Contact::findOrFail($id);

        return view('contactUpdateForm',['contact'=>$contact,'id'=>$id]);
    }

    public function update(Request $req){
     
        $contact=Contact::findOrFail($req->id);
        $contact->name=$req->name;
        $contact->email=$req->email;
        $contact->phnum=$req->phnum;
        $contact->Message=$req->Message;
        $contact->save();
        return redirect('/vMessage');
    }
}