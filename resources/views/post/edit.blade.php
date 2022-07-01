@extends('layouts.main')
@section('content')
  <div>
      <form action="{{ route('post.update', $post->id) }}" method="post">
          @csrf
          @method('patch')
        <div class="mb-4">
            <label for="title" class="form-label"></label>
            <input type="text" name="title" class="form-control" id="title"placeholder="Title" value="{{ $post->title }}">
                   </div>
        <div class="mb-4">
            <label for="content" class="form-label"></label>
            <textarea name="content" class="form-control" id="content" placeholder="Content" >{{ $post->content }}</textarea>
        </div>
          <div class="mb-4">
              <label for="image" class="form-label"></label>
              <input name="image" type="text" class="form-control" id="image" placeholder="Image" value="{{ $post->image }}">
              <select class="form-select" aria-label="category" name="category_id">
                  @foreach($categories as $category)
                      {{--                <option selected>Category</option>--}}
                      <option
                          {{ $category->id === $post->category->id ? 'selected' : '' }}
                          value="{{$category->id}}">{{$category->title}}</option>
                  @endforeach
              </select>
               <button type="submit" class="btn btn-primary">Update</button>
          </div>
    </form>
  </div>
@endsection
