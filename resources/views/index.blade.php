@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Contacts</h1>
        <div class="row">
            <div class="col-md-10">
                <form method="GET" action="{{ route('contacts') }}" class="mb-3">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search by name or email" value="{{ request('search') }}">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>
            </div>
            <div class="col-md-2">
                <a href="{{ route('create') }}" class="btn btn-success mb-3">Create New Contact</a>
            </div>
        </div>

        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>
                    <span class="float-start">Name</span>
                    <a class="float-end" href="{{ route('contacts', ['sort_by' => 'name', 'sort_direction' => request('sort_direction') === 'asc' ? 'desc' : 'asc']) }}">
                       @if(request('sort_by') == 'name' && request('sort_direction') == 'asc')
                          &#9650;
                       @else
                          &#9660;
                       @endif
                    </a>
                </th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>
                    <span class="float-start">Created At</span>
                    <a class="float-end" href="{{ route('contacts', ['sort_by' => 'created_at', 'sort_direction' => request('sort_direction') === 'asc' ? 'desc' : 'asc']) }}">
                       @if(request('sort_by') == 'created_at' && request('sort_direction') == 'asc')
                          &#9650;
                       @else
                          &#9660;
                       @endif
                    </a>
                </th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->address }}</td>
                    <td>{{ $contact->created_at }}</td>
                    <td>
                        <a href="{{ route('show', $contact->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('edit', $contact->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('destroy', $contact->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this contact?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
