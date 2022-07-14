<?php
namespace App\Http\Controllers;

use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('video.index', compact('videos'));
    }
    public function create()
    {
        return view('video.create');
    }
    public function store()
    {
        $data = request()->validate([
            'title' =>'string',
            'format' =>'string',
            'width' =>'string',
            'height' =>'string',
            'quality' =>'string',
            'snap' =>'string',
        ]);

        Video::create($data);
        return redirect()->route('video.index');

    }
    public function show(Video $video)
    {
        return view('video.show', compact('video'));
    }
    public function edit(Video $video)
    {
        return view('video.edit', compact('video'));
    }
    public function update(Video $video)
    {
        $data = request()->validate([
            'title' =>'string',
            'format' =>'string',
            'width' =>'string',
            'height' =>'string',
            'quality' =>'string',
            'snap' =>'string',
        ]);
        $video->update($data);
        return redirect()->route('video.show', $video->id);
    }
    public function delete()
    {
        $video = Video::withTrashed()->find(2);
        $video->restore();
        dd('deleted');
    }
    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('video.index');
    }
}
