<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <div class="container" style="max-width: 600px;">
        <h2 class="mb-4">Edit Data Buku</h2>

        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label class="form-label">Judul Buku</label>
                <input type="text" name="title" value="{{ $book->title }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Penulis</label>
                <input type="text" name="author" value="{{ $book->author }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Tahun Terbit</label>
                <input type="number" name="publication_year" value="{{ $book->publication_year }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Stok</label>
                <input type="number" name="stock" value="{{ $book->stock }}" class="form-control" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>