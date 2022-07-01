@extends('layouts.main')
@section('content')
  <div>
      <form action="{{ route('blog.store') }}" method="post">
          @csrf
          <div class="mb-4">
              <label for="title" class="form-label"></label>
              <input type="text" name="title" class="form-control" id="title"placeholder="Title">
          </div>
          <div class="mb-4">
              <label for="blog" class="form-label"></label>
              <textarea name="blog" name="blog"  class="form-control" id="blog" placeholder="Blog"></textarea>
          </div>
          <div class="mb-4">
              <label for="followers" class="form-label"></label>
              <input type="text" name="followers" class="form-control" id="followers" placeholder="Followers">
          </div>
          <div class="mb-4">
              <label for="likes" class="form-label"></label>
              <textarea name="likes" class="form-control" id="likes" placeholder="Likes" ></textarea>
          </div>
          <div class="mb-4">
              <label for="reply" class="form-label"></label>
              <input type="text" name="reply" class="form-control" id="reply"placeholder="Reply">
          </div>
          <div class="mb-4">
              <label for="comments" class="form-label"></label>
              <input type="text" name="comments" class="form-control" id="comments"placeholder="Comments">
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
@endsection
