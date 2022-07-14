@extends('layouts.main')
@section('content')
    <div>
                 <div>{{ $contact->id }}. {{ $contact->title }}</div>
                 <div>{{ $contact->content }}</div>
     </div>
    <div>
        <a href="{{ route('contact.edit', $contact->id ) }}">Edit</a>
{{--        <input type="submit" value="Edit" class="btn btn-success">--}}
    </div>
    <div>
        <form action="{{ route('contact.delete', $contact->id ) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
       </div>
    <div>
        <a href="{{ route('contact.index') }}">Back</a>
{{--        <input type="submit" value="Back" class="btn btn-secondary">--}}
    </div>
@endsection
