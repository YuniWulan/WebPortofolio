<!DOCTYPE html>
<html>
<head>
    <title>Edit Portofolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Edit Portofolio</h1>

    <form action="{{ route('portfolios.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" class="form-control" value="{{ $portfolio->title }}" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control" rows="3" required>{{ $portfolio->description }}</textarea>
        </div>
        <div class="mb-3">
            <label>Foto</label>
            <input type="file" name="image" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('portfolios.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>
