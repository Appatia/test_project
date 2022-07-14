<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogDestroyController extends Controller
{
    public function __invoke(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index');
    }
}


