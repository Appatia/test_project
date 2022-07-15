@extends('layouts.main')
@section('content')
  <div>
      <form action="{{ route('contact.store') }}" method="post">
          @csrf
          <div class="mb-4">
              <label for="title" class="form-label"></label>
              <input
                  value="{{ old('title') }}"
                  type="text" name="title" class="form-control" id="title" placeholder="Title">
              @error('title')
              <p class="text-danger">{{ $message }}</p>
              @enderror()
          </div>
          <div class="mb-4">
              <label for="contact" class="form-label"></label>
              <textarea
                  value="{{ old('content') }}"
                  name="contact" name="contact"  class="form-control" id="contact" placeholder="Contact"></textarea>
              @error('content')
              <p class="text-danger">{{ $message }}</p>
              @enderror()
          </div>
          <div class="mb-4">
              <label for="city" class="form-label"></label>
              <input
                  value="{{ old('image') }}"
                  type="text" name="city" class="form-control" id="city" placeholder="City">
              @error('image')
              <p class="text-danger">{{ $message }}</p>
              @enderror()
          </div>
          <div class="mb-4">
              <label for="country" class="form-label"></label>
              <textarea
                  value="{{ old('image') }}"
                  name="country" class="form-control" id="country" placeholder="Country" ></textarea>
              @error('image')
              <p class="text-danger">{{ $message }}</p>
              @enderror()
          </div>
          <div class="mb-4">
              <label for="street" class="form-label"></label>
              <input
                  value="{{ old('image') }}"
                  type="text" name="street" class="form-control" id="street"placeholder="Street">
              @error('image')
              <p class="text-danger">{{ $message }}</p>
              @enderror()
              <select class="form-select" aria-label="category" name="category_id">
                  @foreach($categories as $category)
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
          </div>
          <button type="submit" class="btn btn-primary">Create</button>
    </form>
  </div>
@endsection
