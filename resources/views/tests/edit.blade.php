
@extends('layouts.app')

@section('content')

<h1>Products Update</h1>
<hr/>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('tests.update', $test->id) }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="name" class="form-control mb-3" placeholder="Product Name" value="{{ $test->name }}"/>
    
    <input type="number" name="price" class="form-control mb-3" placeholder="Price $$" value="{{ $test->price }}"/>
    
    <textarea class="form-control mb-3" name="description" rows="4" placeholder="Description">{{ $test->description }}</textarea>
    
    <button class="btn btn-primary float-end px-5" type="submit">Submit</button>
</form>

@endsection