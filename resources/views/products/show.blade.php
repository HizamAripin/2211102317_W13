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

    <h3 class="text-center mb-4">Detail Produk</h3>

    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">Harga: <strong>Rp{{ number_format($product->price, 0, ',', '.') }}</strong></p>
        </div>
    </div>

    <div class="text-end mt-3">
        <a href="{{ route('products.index') }}" class="btn btn-primary">← Kembali ke Daftar</a>
    </div>
</div>
</body>
</html>
