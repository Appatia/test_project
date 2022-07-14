<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogShowController extends Controller
{
    public function __invoke(Blog $blog)
    {
        return view('blog.show', compact('blog'));

    }
}


