@extends('layouts.main')
@section('content')
  <div>
      <form action="{{ route('video.update', $video->id) }}" method="post">
          @csrf
          @method('patch')
          <div class="mb-3">
              <label for="title" class="form-label"></label>
              <input type="text" name="title" class="form-control" id="title"placeholder="Title" value="{{ $video->title }}">
          </div>
          <div class="mb-3">
              <label for="format" class="form-label"></label>
              <textarea name="format" class="form-control" id="format" placeholder="Format">{{ $video->format }}</textarea>
          </div>
          <div class="mb-3">
              <label for="width" class="form-label"></label>
              <input type="text" name="width" class="form-control" id="width" placeholder="Width" value="{{ $video->width }}">
          </div>
          <div class="mb-3">
              <label for="height" class="form-label"></label>
              <input type="text" name="height" class="form-control" id="height"placeholder="Height" value="{{ $video->height }}">
          </div>
          <div class="mb-3">
              <label for="quality" class="form-label"></label>
              <input type="text" name="quality" class="form-control" id="quality"placeholder="Quality" value="{{ $video->quality }}">
          </div>
          <div class="mb-3">
              <label for="snap" class="form-label"></label>
              <input type="text" name="snap" class="form-control" id="snap"placeholder="Snap" value="{{ $video->snap }}">
          </div>
          <select class="form-select" aria-label="category" name="category_id">
              @foreach($categories as $category)
                  {{--                <option selected>Category</option>--}}
                  <option
                      {{ $category->id === $video->category->id ? 'selected' : '' }}
                      value="{{$category->id}}">{{$category->title}}</option>
              @endforeach
          </select>
          <label for="tags">#tags</label>
          <select class="form-select" multiple aria-label="multiple select example" id="tags" name="tags[]">
              @foreach($tags as $tag)
                  <option
                      @foreach($video->tags as $videoTag)
                          {{ $tag->id === $videoTag->id ? 'selected' : '' }}
                      @endforeach
                      value="{{ $tag->id }}">{{ $tag->title }}</option>
              @endforeach
          </select>
          <button type="submit" class="btn btn-primary">Create</button>
      </form>
  </div>
@endsection
