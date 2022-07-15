@extends('layouts.main')
@section('content')
  <div>
      <form action="{{ route('contact.update', $contact->id) }}" method="post">
          @csrf
          @method('patch')
        <div class="mb-4">
            <label for="title" class="form-label"></label>
            <input type="text" name="title" class="form-control" id="title"placeholder="Title" value="{{ $contact->title }}">
                   </div>
        <div class="mb-4">
            <label for="contact" class="form-label"></label>
            <textarea name="contact" name="contact"  class="form-control" id="contact" placeholder="contact" >{{ $contact->contact }}</textarea>
        </div>
          <div class="mb-4">
              <label for="city" class="form-label"></label>
              <input type="text" name="city" class="form-control" id="city" placeholder="City" value="{{ $contact->city }}">
          </div>
          <div class="mb-4">
              <label for="country" class="form-label"></label>
              <input type="text" name="city"  class="form-control" id="country" placeholder="country" value="{{ $contact->country }}">
          </div>
          <div class="mb-4">
              <label for="street" class="form-label"></label>
              <input type="street" name="street" class="form-control" id="street"placeholder="street" value="{{ $contact->street }}">
          </div>
          <select class="form-select" aria-label="category" name="category_id">
              @foreach($categories as $category)
                  <option
                      {{ $category->id === $contact->category->id ? 'selected' : '' }}
                      value="{{$category->id}}">{{$category->title}}</option>
              @endforeach
          </select>
          <label for="tags">#tags</label>
          <select class="form-select" multiple aria-label="multiple select example" id="tags" name="tags[]">
              @foreach($tags as $tag)
                  <option
                      @foreach($contact->tags as $ContactTag)
                          {{ $tag->id === $postTag->id ? 'selected' : '' }}
                      @endforeach
                      value="{{ $tag->id }}">{{ $tag->title }}</option>
              @endforeach
          </select>
          <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
@endsection
