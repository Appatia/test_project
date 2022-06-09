<?php

namespace App\Http\Controllers;

use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
        $video = Video::find(1);
        dump($video->title);
        dump($video->format);
        dump($video->width);
        dump($video->quality);
        dd($video->snap);
    }
}
