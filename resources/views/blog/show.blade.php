@extends('layouts.main')
@section('content')
    <div>
                 <div>{{ $blog->id }}. {{ $blog->title }}</div>
                 <div>{{ $blog->content }}</div>
     </div>
    <div>
        <a href="{{ route('blog.edit', $blog->id ) }}">Edit</a>
{{--        <input type="submit" value="Edit" class="btn btn-success">--}}
    </div>
    <div>
        <form action="{{ route('blog.delete', $blog->id ) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
       </div>
    <div>
        <a href="{{ route('blog.index') }}">Back</a>
{{--        <input type="submit" value="Back" class="btn btn-secondary">--}}
    </div>
@endsection
