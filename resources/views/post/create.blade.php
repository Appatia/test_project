@extends('layouts.main')
@section('content')
  <div>
      <form action="{{ route('post.store') }}" method="post">
          @csrf
        <div class="mb-4">
            <label for="title" class="form-label"></label>
            <input type="text" name="title" class="form-control" id="title"placeholder="Title">
        </div>
        <div class="mb-4">
            <label for="content" class="form-label"></label>
            <textarea name="content" class="form-control" id="content" placeholder="Content"></textarea>
        </div>
        <div class="mb-4">
              <label for="image" class="form-label"></label>
              <input name="image" type="text" class="form-control" id="image" placeholder="Image">
            <select class="form-select" aria-label="category" name="category_id">
                @foreach($categories as $category)
{{--                <option selected>Category</option>--}}
                <option value="{{$category->id}}">{{$category->title}}</option>
                          @endforeach
            </select>
               <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
  </div>
@endsection
