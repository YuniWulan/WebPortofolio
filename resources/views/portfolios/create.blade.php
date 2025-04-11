<!DOCTYPE html>
<html>
<head>
    <title>Tambah Portofolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Tambah Portofolio</h1>

    <form form action="{{ route('portfolios.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label>Foto</label>
            <input type="file" name="image" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('portfolios.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>
