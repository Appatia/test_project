@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('post.store') }}" method="post">
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
                <label for="content" class="form-label"></label>
                <input
                    value="{{ old('content') }}"
                    type="text" name="content" class="form-control" id="content" placeholder="Content">
                @error('content')
                <p class="text-danger">{{ $message }}</p>
                @enderror()
            </div>
            <div class="mb-4">
                <label for="image" class="form-label"></label>
                <input
                    value="{{ old('image') }}"
                    name="image" type="text" class="form-control" id="image" placeholder="Image">
                @error('image')
                <p class="text-danger">{{ $message }}</p>
                @enderror()
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
            </div>
        </form>
    </div>
@endsection
