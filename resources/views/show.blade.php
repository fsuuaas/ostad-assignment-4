@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Contact Details</h1>
        <div class="card mt-4">
            <div class="card-body">
                <p><strong>Name:</strong> {{ $contact->name }}</p>
                <p><strong>Email:</strong> {{ $contact->email }}</p>
                <p><strong>Phone:</strong> {{ $contact->phone }}</p>
                <p><strong>Address:</strong> {{ $contact->address }}</p>
                <p><strong>Created At:</strong> {{ $contact->created_at }}</p>
                <a href="{{ route('index') }}" class="btn btn-primary">Back to Contacts</a>
            </div>
        </div>
    </div>
@endsection
