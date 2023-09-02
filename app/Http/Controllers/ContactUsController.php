<?php

namespace App\Http\Controllers;

use App\Models\contactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function addContact(Request $request)
    {
        $contacts = new contactUs();
        $contacts->name = $request->name;
        $contacts->email = $request->email;
        $contacts->telephone = $request->telephone;
        $contacts->message = $request->message;
        $contacts->status = 1;

        $contacts->save();
        return redirect()->back()->with('success', 'Your Message Submitted !!!');
    }

    public function viewContact()
    {
        $contacts = contactUs::get();
        return view('backend/contact/index',[
            'contacts' => $contacts
        ]);



    }

    public function deleteContact($id)
    {
        $contacts = contactUs::find($id)->delete();
        return redirect()->back()->with('Success', 'Contact Deleted Successfully !!!');
    }


    public function editContact($id)
    {
        $contacts = contactUs::find($id);
        return view('backend/contact/edit-contact',[
            'contacts' => $contacts
        ]);
    }

    public function updateContact($id)
    {
        $contact = contactUs::find($id);
        $contact->status = 0;
        $contact->update();

        return redirect()->back()->with('success', 'Contact Read successfully !!!');


    }

}
