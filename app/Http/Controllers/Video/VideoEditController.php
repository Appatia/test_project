<?php

namespace App\Http\Controllers\Video;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Video;

class VideoEditController extends Controller
{
    public function __invoke(Video $video)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('video.edit', compact('video', 'categories', 'tags'));

    }
}


