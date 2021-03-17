<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\CreateContactRequest;

class ContactController extends Controller
{

    public function index(){
        return view('contacts')->with('contacts', Contact::all());
    }

    public function show(Contact $contact){
    
        return view('showMessage')->with('contact', $contact);
        
    }

    public function store(CreateContactRequest $request){
        
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->save();

        // send to email

        // Mail::send('email', [
        //     'name' => $request->get('name'),
        //     'email' => $request->get('email'),
        //     'phone' => $request->get('phone'),
        //     'message' => $request->get('message')],
        //     function ($message){
        //         $message->from('sunnylenxz@gmail.com');
        //         $message->to('sunnylenxz@gmail.com','Sunny Lenz')->subject('Lenz Contact Form');
        //     }
        // );

        // return back()->with('success', 'Thanks for contacting me, I will get back to you soon');
        // $details = [
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'message' => $request->message,
        // ];
        // Mail::to('sunnylenxz@gmail.com')->send(new ContactMail($details));
        // return back()->with('message_sent', 'Your message has been sent succesfully!');


        // $data = [];
        // $data['name'] = $request->input('name');
        // $data['email'] = $request->input('email');
        // $data['phone'] = $request->input('phone');
        // $data['message'] = $request->input('message');

        // $contact->insert($data);

        session()->flash('success', 'Message sent successfully');
        return redirect('/');
    }

    public function destroy(Contact $contact){
        $contact->delete();
        session()->flash('success', 'Message deleted successfully...');
        return redirect('/contacts');
    }

    
}

