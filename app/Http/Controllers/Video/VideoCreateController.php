<?php

namespace App\Http\Controllers\Video;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;

class VideoCreateController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('video.create', compact('categories', 'tags'));

    }
}
