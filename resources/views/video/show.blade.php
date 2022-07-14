@extends('layouts.main')
@section('content')
    <div>
                 <div>{{ $video->id }}. {{ $video->title }}</div>
                 <div>{{ $video->content }}</div>
     </div>
    <div>
        <a href="{{ route('video.edit', $video->id ) }}">Edit</a>
{{--        <input type="submit" value="Edit" class="btn btn-success">--}}
    </div>
    <div>
        <form action="{{ route('video.delete', $video->id ) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
       </div>
    <div>
        <a href="{{ route('video.index') }}">Back</a>
{{--        <input type="submit" value="Back" class="btn btn-secondary">--}}
    </div>
@endsection
