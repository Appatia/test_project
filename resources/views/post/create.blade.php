@extends('layouts.main')
@section('content')
  <div>
      <form action="{{ route('post.store') }}" method="post">
          @csrf
        <div class="mb-3">
            <label for="title" class="form-label"></label>
            <input type="text" name="title" class="form-control" id="title"placeholder="Title">
                   </div>
        <div class="mb-3">
            <label for="content" class="form-label"></label>
            <textarea name="content" class="form-control" id="content" placeholder="Content"></textarea>
        </div>
          <div class="mb-3">
              <label for="image" class="form-label"></label>
              <input name="image" type="text" class="form-control" id="image" placeholder="Image">
               <button type="submit" class="btn btn-primary">Create</button>
    </form>
  </div>
@endsection
