@extends('layouts.main')
@section('content')
    <div>
                 <div>{{ $post->id }}. {{ $post->title }}</div>
                 <div>{{ $post->content }}</div>
     </div>
    <div>
{{--        <form action="{{ route('post.update', $post->id ) }}" method="post">--}}
{{--            @csrf--}}
{{--            @method('patch')--}}
{{--            <input type="submit" value="edit" class="btn btn-success">--}}
{{--        </form>--}}

       <a href="{{ route('post.edit', $post->id )}}">Edit</a>
{{--        <input type="submit" value="Edit" class="btn btn-success">--}}
    </div>
    <div>
        <form action="{{ route('post.delete', $post->id ) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
       </div>
    <div>
        <a href="{{ route('post.index') }}">Back</a>
{{--        <input type="submit" value="Back" class="btn btn-secondary">--}}
    </div>
@endsection
