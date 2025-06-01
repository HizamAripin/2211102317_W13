<!DOCTYPE html>
<html>
<head>
    <title>Hizam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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

    <h3>{{ isset($product) && $product->exists ? 'Edit Produk' : 'Tambah Produk' }}</h3>

    <form action="{{ isset($product) && $product->exists ? route('products.update', $product->id) : route('products.store') }}" method="POST">
        @csrf
        @if(isset($product) && $product->exists)
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

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>
