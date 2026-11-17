@extends('layouts.app')
@section('title', 'Edit Laptop')

@section('content')
    <div class="header"><h1>Edit Laptop</h1></div>

    <form action="{{ route('update-laptop', $laptop) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" id="brand" name="brand" value="{{ $laptop->brand }}" required>
        </div>
        <div class="form-group">
            <label for="model">Model</label>
            <input type="text" id="model" name="model" value="{{ $laptop->model }}" required>
        </div>
        <div class="form-group">
            <label for="processor">Processor</label>
            <input type="text" id="processor" name="processor" value="{{ $laptop->processor }}" required>
        </div>
        <div class="form-group">
            <label for="ram">RAM (GB)</label>
            <input type="number" id="ram" name="ram" value="{{ $laptop->ram }}" required>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-warning">Update Laptop</button>
            <a href="{{ route('laptops') }}" class="btn btn-light">Batal</a>
        </div>
    </form>
@endsection
