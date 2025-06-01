<!DOCTYPE html>
<html>
<head>
    <title>Hizam</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        h1 {
            text-align: center;
            color: #0d6efd;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container mt-4">
    <h1>Hizam Aripin<br>2211102317</h1>

    @if(session('sukses'))
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div class="toast show bg-success text-white" role="alert">
                <div class="toast-body">
                    {{ session('sukses') }}
                </div>
            </div>
        </div>
    @endif

    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>Rp{{ number_format($product->price, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('products.show', $product) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
