<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
       $contact = Contact::find(1);
       dump($contact->title);
       dump($contact->contact);
       dump($contact->city);
       dump($contact->country);
       dd($contact->street);
    }
}
