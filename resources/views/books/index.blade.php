@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Daftar Buku</h2>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->publication_year }}</td>
                <td>{{ $book->stock }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection