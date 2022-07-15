<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;

class ContactCreateController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('contact.create', compact('categories', 'tags'));

    }
}
