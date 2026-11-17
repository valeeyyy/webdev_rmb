@extends('layouts.app')
@section('title', 'Daftar Laptop')

@section('content')
    <div class="header">
        <h1>Daftar Laptop</h1>
        <a href="{{ route('create-laptop') }}" class="btn btn-primary">+ Tambah Laptop</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Brand</th>
                <th>Model</th>
                <th>Processor</th>
                <th>RAM</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($laptops as $laptop)
                <tr>
                    <td data-label="Brand">{{ $laptop->brand }}</td>
                    <td data-label="Model">{{ $laptop->model }}</td>
                    <td data-label="Processor">{{ $laptop->processor }}</td>
                    <td data-label="RAM">{{ $laptop->ram }} GB</td>
                    <td data-label="Aksi">
                        <div class="actions">
                            <a href="{{ route('edit-laptop', $laptop) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('delete-laptop', $laptop) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5" class="empty">Belum ada data laptop.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection
