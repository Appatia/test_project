<?php

namespace App\Http\Controllers\Video;

use App\Http\Controllers\Controller;
use App\Models\Video;

class VideoUpdateController extends Controller
{
    public function __invoke(Video $video)
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
        $video->update($data);
        $video->tags()->sync($tags);
        return redirect()->route('video.show', $video->id);

    }
}


