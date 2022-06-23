@extends('layouts.main')
@section('content')
    <div>
        <div>
            <a href="{{ route('video.create') }}"class="btn btn-outline-primary mb-4">Add one</a>
        </div>
       @foreach($videos as $video)
            <div><a href="{{ route('video.show', $video->id) }}">{{$video->id }}. {{ $video->title }}</a></div>
        @endforeach
    </div>
@endsection
