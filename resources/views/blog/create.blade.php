@extends('layouts.main')
@section('content')
  <div>
      <form action="{{ route('blog.store') }}" method="post">
          @csrf
          <div class="mb-3">
              <label for="title" class="form-label"></label>
              <input type="text" name="title" class="form-control" id="title"placeholder="Title">
          </div>
          <div class="mb-3">
              <label for="bloggers" class="form-label"></label>
              <textarea name="bloggers" name="bloggers"  class="form-control" id="bloggers" placeholder="Bloggers"></textarea>
          </div>
          <div class="mb-3">
              <label for="followers" class="form-label"></label>
              <input type="text" name="followers" class="form-control" id="followers" placeholder="Followers">
          </div>
          <div class="mb-3">
              <label for="likes" class="form-label"></label>
              <textarea name="likes" class="form-control" id="likes" placeholder="likes" ></textarea>
          </div>
          <div class="mb-3">
              <label for="reply" class="form-label"></label>
              <input type="text" name="reply" class="form-control" id="reply"placeholder="reply">
          </div>
          <div class="mb-3">
              <label for="comments" class="form-label"></label>
              <input type="text" name="comments" class="form-control" id="comments"placeholder="Comments">
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
@endsection
