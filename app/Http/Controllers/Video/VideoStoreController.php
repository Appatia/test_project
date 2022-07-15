<?php

namespace App\Http\Controllers\Video;

use App\Http\Controllers\Controller;
use App\Models\Video;

class VideoStoreController extends Controller
{
    public function __invoke()
    {
        $data = request()->validate([
            'title' => 'required|string',
            'format' => 'string',
            'width' => 'string',
            'height' => 'string',
            'quality' => 'string',
            'snap' => 'string',
            'category_id' => '',
            'tags' => '',
        ]);
        $tags = $data['tags'];
        unset($data['tags']);
        $video = Video::create($data);
        $video->tags()->attach($tags);
        return redirect()->route('video.index');
    }
}


