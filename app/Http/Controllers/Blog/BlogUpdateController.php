<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\blog;

class BlogUpdateController extends Controller
{
    public function __invoke(Blog $blog)
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
        $blog->update($data);
        $blog->tags()->sync($tags);
        return redirect()->route('blog.show', $blog->id);

    }
}


