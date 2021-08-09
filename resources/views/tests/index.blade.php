@extends('layouts.app')

@section('content')
<h1>Product CRUD</h1>
<a class="btn btn-link float-end" href="{{ route('tests.create') }}">Create Product</a>

{{-- Display message --}}
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-striped table-hover">
    <thead>
        <tr></tr>
        <tr>
            <th scope="col">Product ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Price</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($tests as $test) {{-- Loop tests --}}
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $test->name }}</td>
            <td>$ {{ $test->price }}</td>
            <td> {{ $test->description }}</td>

                <div class="dropdown"> {{-- Dropdown --}}
                    <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="actionDropdown"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                        <li><a class="dropdown-item" href="{{ route('tests.show', $test->id) }}">View</a></li> {{-- View --}}
                        <li><a class="dropdown-item" href="{{ route('tests.edit', $test->id) }}">Edit</a></li> {{-- Edit --}}
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('tests.destroy', $test->id) }}" method="post"> {{-- Delete --}}
                                @csrf
                                @method('delete')
                                <button type="submit" class="dropdown-item">Delete</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>


@endsection