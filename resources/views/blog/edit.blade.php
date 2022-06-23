@extends('layouts.main')
@section('content')
  <div>
      <form action="{{ route('blog.update', $blog->id) }}" method="post">
          @csrf
          @method('patch')
        <div class="mb-3">
            <label for="title" class="form-label"></label>
            <input type="text" name="title" class="form-control" id="title"placeholder="Title" value="{{ $blog->title }}">
                   </div>
        <div class="mb-3">
            <label for="bloggers" class="form-label"></label>
            <textarea name="bloggers" class="form-control" id="content" placeholder="Bloggers" >{{ $blog->bloggers }}</textarea>
        </div>
          <div class="mb-3">
              <label for="followers" class="form-label"></label>
              <input type="text" name="followers" class="form-control" id="followers" placeholder="Followers" value="{{ $blog->followers }}">
          </div>
          <div class="mb-3">
              <label for="likes" class="form-label"></label>
              <textarea name="likes" class="form-control" id="likes" placeholder="Likes" >{{ $blog->likes }}</textarea>
          </div>
          <div class="mb-3">
              <label for="reply" class="form-label"></label>
              <input type="text" name="reply" class="form-control" id="reply"placeholder="Reply" value="{{ $blog->reply }}">
          </div>
          <div class="mb-3">
              <label for="comments" class="form-label"></label>
              <textarea name="comments" class="form-control" id="comments" placeholder="comments" >{{ $blog->comments }}</textarea>
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
@endsection
