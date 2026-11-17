@extends('layouts.app')
@section('title', 'Tambah Laptop')

@section('content')
    <div class="header"><h1>Tambah Laptop</h1></div>

    <form action="{{ route('save-laptop') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" id="brand" name="brand" required>
        </div>
        <div class="form-group">
            <label for="model">Model</label>
            <input type="text" id="model" name="model" required>
        </div>
        <div class="form-group">
            <label for="processor">Processor</label>
            <input type="text" id="processor" name="processor" required>
        </div>
        <div class="form-group">
            <label for="ram">RAM (GB)</label>
            <input type="number" id="ram" name="ram" required>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('laptops') }}" class="btn btn-light">Batal</a>
        </div>
    </form>
@endsection
