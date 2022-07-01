@extends('layouts.main')
@section('content')
    <div>
        <div>
            <a href="{{ route('blog.create') }}"class="btn btn-outline-primary mb-4"style="margin-left: 25px">Add one</a>
        </div>
       @foreach($blogs as $blog)
            <div><a href="{{ route('blog.show', $blog->id) }}">{{$blog->id }}. {{ $blog->title }}</a></div>
        @endforeach
    </div>
@endsection
