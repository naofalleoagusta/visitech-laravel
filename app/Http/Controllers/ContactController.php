<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function index()
    {
        $bg_contact = config('visitech.bg_contact');
        return view('contact', [
            'bg_contact' => $bg_contact,
        ]);
    }

    public function store(Request $request)
    {
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->phone_number = $request->phone;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->desc = $request->desc;
        $contact->save();
        
        // $name = $request->name();
        // $phone_number = $request->phone();
        // $email = $request->email();
        // $subject = $request->subject();
        // $desc = $request->desc();
        // $data=$request->all();
        return response()->json([
            'success' => 'Data has been recorded successfully!',
            'code' => '200',
            // 'data' => $data
        ]);
    }
}
