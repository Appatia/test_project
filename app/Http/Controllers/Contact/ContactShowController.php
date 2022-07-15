<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactShowController extends Controller
{
    public function __invoke(Contact $contact)
    {
        return view('contact.show', compact('contact'));

    }
}


