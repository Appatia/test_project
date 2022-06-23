@extends('layouts.main')
@section('content')
    <div>
        <div>
            <a href="{{ route('contact.create') }}"class="btn btn-outline-primary mb-4">Add one</a>
        </div>
       @foreach($contacts as $contact)
            <div><a href="{{ route('contact.show', $contact->id) }}">{{$contact->id }}. {{ $contact->title }}</a></div>
        @endforeach
    </div>
@endsection
