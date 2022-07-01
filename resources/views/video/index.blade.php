@extends('layouts.main')
@section('content')
    <div>
        <div>
            <a href="{{ route('video.create') }}"class="btn btn-outline-primary mb-3"style="margin-left: 25px">Add One</a>
                 </div>
       @foreach($videos as $video)
            <div><a href="{{ route('video.show', $video->id) }}">{{$video->id }}. {{ $video->title }}</a></div>
        @endforeach
    </div>
@endsection
