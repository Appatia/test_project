@extends('layouts.main')
@section('content')
  <div>
      <form action="{{ route('blog.update', $blog->id) }}" method="post">
          @csrf
          @method('patch')
        <div class="mb-4">
            <label for="title" class="form-label"></label>
            <input type="text" name="title" class="form-control" id="title"placeholder="Title" value="{{ $blog->title }}">
                   </div>
        <div class="mb-4">
            <label for="blog" class="form-label"></label>
            <textarea name="blog" class="form-control" id="blog" placeholder="Blog" >{{ $blog->blog }}</textarea>
        </div>
          <div class="mb-4">
              <label for="followers" class="form-label"></label>
              <input type="text" name="followers" class="form-control" id="followers" placeholder="Followers" value="{{ $blog->followers }}">
          </div>
          <div class="mb-4">
              <label for="likes" class="form-label"></label>
              <textarea name="likes" class="form-control" id="likes" placeholder="Likes" >{{ $blog->likes }}</textarea>
          </div>
          <div class="mb-4">
              <label for="reply" class="form-label"></label>
              <input type="text" name="reply" class="form-control" id="reply"placeholder="Reply" value="{{ $blog->reply }}">
          </div>
          <div class="mb-4">
              <label for="comments" class="form-label"></label>
              <textarea name="comments" class="form-control" id="comments" placeholder="comments" >{{ $blog->comments }}</textarea>
          </div>
          <select class="form-select" aria-label="category" name="category_id">
              @foreach($categories as $category)
                                  <option
                      {{ $category->id === $blog->category->id ? 'selected' : '' }}
                      value="{{$category->id}}">{{$category->title}}</option>
              @endforeach
          </select>
          <label for="tags">#tags</label>
          <select class="form-select" multiple aria-label="multiple select example" id="tags" name="tags[]">
              @foreach($tags as $tag)
                  <option
                      @foreach($blog->tags as $blogTag)
                          {{ $tag->id === $blogTag->id ? 'selected' : '' }}
                      @endforeach
                      value="{{ $tag->id }}">{{ $tag->title }}</option>
              @endforeach
          </select>
          <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
@endsection
