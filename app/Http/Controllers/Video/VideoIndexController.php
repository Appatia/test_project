<?php

namespace App\Http\Controllers\Video;

use App\Http\Controllers\Controller;
use App\Models\Video;

class VideoIndexController extends Controller
{
    public function __invoke()
    {
        $videos = Video::all();
        return view('video.index', compact('videos'));

    }
}


