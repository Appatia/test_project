<?php

namespace App\Http\Controllers\Video;

use App\Http\Controllers\Controller;
use App\Models\Video;

class VideoShowController extends Controller
{
    public function __invoke(Video $video)
    {
        return view('video.show', compact('video'));

    }
}


