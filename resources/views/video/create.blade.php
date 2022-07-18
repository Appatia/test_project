@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('video.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label"></label>
                <input
                    value="{{ old('title') }}"
                    type="text" name="title" class="form-control" id="title" placeholder="Title">
                @error('title')
                <p class="text-danger">{{ $message }}</p>
                @enderror()
            </div>
            <div class="mb-3">
                <label for="format" class="form-label"></label>
                <textarea
                    value="{{ old('format') }}"
                    name="format" class="form-control" id="format" placeholder="Format"></textarea>
                @error('format')
                <p class="text-danger">{{ $message }}</p>
                @enderror()
            </div>
            <div class="mb-3">
                <label for="width" class="form-label"></label>
                <input
                    value="{{ old('width') }}"
                    type="text" name="width" class="form-control" id="width" placeholder="Width">
                @error('width')
                <p class="text-danger">{{ $message }}</p>
                @enderror()
            </div>
            <div class="mb-3">
                <label for="height" class="form-label"></label>
                <input
                    value="{{ old('height') }}"
                    type="text" name="height" class="form-control" id="height" placeholder="Height">
                @error('height')
                <p class="text-danger">{{ $message }}</p>
                @enderror()
            </div>
            <div class="mb-3">
                <label for="quality" class="form-label"></label>
                <input
                    value="{{ old('quality') }}"
                    type="text" name="quality" class="form-control" id="quality" placeholder="Quality">
                @error('quality')
                <p class="text-danger">{{ $message }}</p>
                @enderror()
            </div>
            <div class="mb-3">
                <label for="snap" class="form-label"></label>
                <input
                    value="{{ old('snap') }}"
                    type="text" name="snap" class="form-control" id="snap" placeholder="Snap">
                @error('snap')
                <p class="text-danger">{{ $message }}</p>
                @enderror()
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
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
