<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $post = post::find(1);
        dump($post->title);
        dump($post->content);
        dump($post->image);
        dump($post->Likes);
        dd($post->is_published);
    }
}
