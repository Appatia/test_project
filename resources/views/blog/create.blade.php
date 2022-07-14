@extends('layouts.main')
@section('content')
  <div>
      <form action="{{ route('blog.store') }}" method="post">
          @csrf
          <div class="mb-4">
              <label for="title" class="form-label"></label>
              <input
                  value="{{ old('title') }}"
                  type="text" name="title" class="form-control" id="title"placeholder="Title">
              @error('title')
              <p class="text-danger">{{ $message }}</p>
              @enderror()
          </div>
          <div class="mb-4">
              <label for="blog" class="form-label"></label>
              <textarea
                  value="{{ old('content') }}"
                  name="blog" name="blog"  class="form-control" id="blog" placeholder="Blog"></textarea>
              @error('content')
              <p class="text-danger">{{ $message }}</p>
              @enderror()
          </div>
          <div class="mb-4">
              <label for="followers" class="form-label"></label>
              <input
                  value="{{ old('image') }}"
                  type="text" name="followers" class="form-control" id="followers" placeholder="Followers">
              @error('image')
              <p class="text-danger">{{ $message }}</p>
              @enderror()
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
          <select class="form-select" aria-label="category" name="category_id">
              @foreach($categories as $category)
                  {{--               <option selected>Category</option>--}}
                  <option
                      {{ old('category_id') == $category->id ? 'selected' : ''    }}
                      value="{{$category->id}}">{{$category->title}}</option>
              @endforeach
          </select>
          <label for="tags">#tags</label>
          <select class="form-select" multiple aria-label="multiple select example" id="tags" name="tags[]">
              @foreach($tags as $tag)
                  <option value="{{ $tag->id }}">{{ $tag->title }}</option>
              @endforeach
          </select>
          <button type="submit" class="btn btn-primary">Craate</button>
    </form>
  </div>
@endsection
