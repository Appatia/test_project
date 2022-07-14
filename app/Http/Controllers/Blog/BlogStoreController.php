<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogStoreController extends Controller
{
    public function __invoke()
    {
        $data = request()->validate([
            'title' => 'required|string',
            'blog' => 'string',
            'followers' => 'string',
            'likes' => 'string',
            'reply' => 'string',
            'comments' => 'string',
            'category_id' => '',
            'tags' => '',
        ]);
        $tags = $data['tags'];
        unset($data['tags']);
        $blog = Blog::create($data);
        $blog->tags()->attach($tags);
        return redirect()->route('blog.index');
    }
}


