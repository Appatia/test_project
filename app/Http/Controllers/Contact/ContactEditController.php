<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Tag;

class ContactEditController extends Controller
{
    public function __invoke(Contact $contact)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('contact.edit', compact('contact', 'categories', 'tags'));

    }
}


