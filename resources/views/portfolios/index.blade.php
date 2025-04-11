<!DOCTYPE html>
<html>
<head>
    <title>Daftar Portofolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 80px;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 2rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 999;
        }
    </style>
</head>
<body class="bg-blue-50 text-gray-800">
    <nav class="navbar">
        <h1 class="text-xl font-bold text-blue-600">
            Pixel by Wulan
        </h1>
        <ul class="flex space-x-6">
            <li>
                <a class="text-gray-600 hover:text-blue-600" href="{{ url('/') }}">
                    Home
                </a>
            </li>
            <li>
                <a class="text-gray-600 hover:text-blue-600" href="#about">
                    About
                </a>
            </li>
            <li>
                <a class="text-gray-600 hover:text-blue-600" href="{{ route('portfolios.index') }}">
                    Portofolio
                </a>
            </li>
            <li>
                <a class="text-gray-600 hover:text-blue-600" href="#contact">
                    Contact
                </a>
            </li>
        </ul>
    </nav>

    {{-- Tambahkan margin-top agar tidak tertutup navbar --}}
    <div class="container mt-5 pt-5">
        <h1 class="mb-4">Daftar Portofolio</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('portfolios.create') }}" class="btn btn-primary mb-3">+ Tambah Portofolio</a>

        <h2 class="mt-5 mb-3">Tabel Daftar Portofolio</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped bg-white">
                <thead class="table-primary">
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($portfolios as $index => $portfolio)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $portfolio->title }}</td>
                            <td>{{ $portfolio->description }}</td>
                            <td>
                                @if ($portfolio->image)
                                    <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}" width="80">
                                @else
                                    -
                                @endif
                            </td>
                            <td class="d-flex gap-2">
                                <a href="{{ route('portfolios.edit', $portfolio->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('portfolios.destroy', $portfolio->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Belum ada portofolio.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
