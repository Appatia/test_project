@extends('layouts.main')
@section('content')
  <div>
      <form action="{{ route('video.store') }}" method="post">
          @csrf
        <div class="mb-3">
            <label for="title" class="form-label"></label>
            <input type="text" name="title" class="form-control" id="title"placeholder="Title">
        </div>
        <div class="mb-3">
            <label for="format" class="form-label"></label>
            <textarea name="format" class="form-control" id="format" placeholder="Format"></textarea>
        </div>
        <div class="mb-3">
              <label for="width" class="form-label"></label>
              <input type="text" name="width" class="form-control" id="width" placeholder="Width">
        </div>
        <div class="mb-3">
              <label for="height" class="form-label"></label>
              <input type="text" name="height" class="form-control" id="height"placeholder="Height">
        </div>
        <div class="mb-3">
              <label for="quality" class="form-label"></label>
              <input type="text" name="quality" class="form-control" id="quality"placeholder="Quality">
        </div>
        <div class="mb-3">
              <label for="snap" class="form-label"></label>
              <input type="text" name="snap" class="form-control" id="snap"placeholder="Snap">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
      </form>
  </div>
@endsection
