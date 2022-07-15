<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactUpdateController extends Controller
{
    public function __invoke(Contact $contact)
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
        $contact->update($data);
        $contact->tags()->sync($tags);
        return redirect()->route('contact.show', $contact->id);

    }
}


