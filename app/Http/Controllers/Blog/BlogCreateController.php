<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;

class BlogCreateController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
       $tags = Tag::all();
        return view('blog.create', compact('categories', 'tags'));

    }
}
