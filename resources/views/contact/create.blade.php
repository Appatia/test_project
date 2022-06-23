@extends('layouts.main')
@section('content')
  <div>
      <form action="{{ route('contact.store') }}" method="post">
          @csrf
          <div class="mb-3">
              <label for="title" class="form-label"></label>
              <input type="text" name="title" class="form-control" id="title" placeholder="Title">
          </div>
          <div class="mb-3">
              <label for="contact" class="form-label"></label>
              <textarea name="contact" name="contact"  class="form-control" id="contact" placeholder="Contact"></textarea>
          </div>
          <div class="mb-3">
              <label for="city" class="form-label"></label>
              <input type="text" name="city" class="form-control" id="city" placeholder="City">
          </div>
          <div class="mb-3">
              <label for="country" class="form-label"></label>
              <textarea name="country" class="form-control" id="country" placeholder="Country" ></textarea>
          </div>
          <div class="mb-3">
              <label for="street" class="form-label"></label>
              <input type="text" name="street" class="form-control" id="street"placeholder="Street">
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
@endsection
