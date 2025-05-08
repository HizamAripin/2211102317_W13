<!DOCTYPE html>
<html>
<head>
    <title>Hizam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        h1 {
            text-align: center;
            color: #0d6efd;
        }
        p.nim {
            text-align: center;
            margin-top: -10px;
            margin-bottom: 30px;
            color: #6c757d;
            font-size: 1.1rem;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1>Hizam Aripin</h1>
    <p class="nim">2211102317</p>

    <h3 class="mb-4 text-center">{{ isset($product) && $product->exists ? 'Edit Produk' : 'Tambah Produk' }}</h3>

    <form action="{{ $product->exists ? route('products.update', $product->id) : route('products.store') }}" method="POST" class="shadow p-4 rounded bg-light">
        @csrf
        @if($product->exists)
            @method('PUT')
        @endif    

        <div class="mb-3">
            <label for="name" class="form-label">Nama Produk</label>
            <input type="text" name="name" id="name" class="form-control" 
                   value="{{ old('name', $product->name ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Harga Produk</label>
            <input type="number" name="price" id="price" class="form-control" 
                   value="{{ old('price', $product->price ?? '') }}" required>
        </div>

        <div class="d-flex justify-content-between">
            <a href="{{ route('products.index') }}" class="btn btn-secondary">← Kembali</a>
            <button type="submit" class="btn btn-success">💾 Simpan</button>
        </div>
    </form>
</div>
</body>
</html>
