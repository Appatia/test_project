<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogIndexController extends Controller
{
    public function __invoke()
    {
        $blogs = Blog::all();
        return view('blog.index', compact('blogs'));

    }
}


