@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Produk</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text"><strong>Harga:</strong> Rp {{ number_format($product->price, 0, ',', '.') }}</p>
            </div>
        </div>

        <a href="{{ route('products.index') }}" class="btn btn-primary mt-3">Kembali ke Daftar</a>
    </div>
@endsection
