<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::find(1);
        dump($blog->title);
        dump($blog->blog);
        dump($blog->followers);
        dump($blog->likes);
        dump($blog->reply);
        dd($blog->comments);
    }
}
