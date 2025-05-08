<!DOCTYPE html>
<html>
<head>
    <title>Hizam</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        h1 {
            color: #0d6efd;
            font-size: 2.5rem;
        }
        .table th {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="text-center mb-4">
        <h1>Hizam Aripin</h1>
        <p class="fs-5">2211102317</p>
    </div>

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('products.create') }}" class="btn btn-primary">
            ➕ Tambah Produk
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered shadow-sm">
        <thead class="table-light">
            <tr class="text-center">
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>Rp{{ number_format($product->price, 0, ',', '.') }}</td>
                    <td class="text-center">
                        <a href="{{ route('products.show', $product) }}" class="btn btn-info btn-sm">👁 Detail</a>
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-warning btn-sm">✏ Edit</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">🗑 Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center text-muted">Belum ada produk.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
</body>
</html>
