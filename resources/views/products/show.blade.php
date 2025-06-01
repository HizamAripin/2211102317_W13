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

    <h3>Detail Produk</h3>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">Harga: Rp{{ number_format($product->price, 0, ',', '.') }}</p>
        </div>
    </div>

    <a href="{{ route('products.index') }}" class="btn btn-primary mt-3">Kembali ke Daftar</a>
</div>
</body>
</html>
