<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactStoreController extends Controller
{
    public function __invoke()
    {
        $data = request()->validate([
            'title' => 'required|string',
            'contact' => 'string',
            'city' => 'string',
            'country' => 'string',
            'street' => 'string',
            'category_id' => '',
            'tags' => '',
        ]);
        $tags = $data['tags'];
        unset($data['tags']);
        $contact = Contact::create($data);
        $contact->tags()->attach($tags);
        return redirect()->route('contact.index');
    }
}


