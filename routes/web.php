<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Redirect root URL ke daftar produk
Route::get('/', function () {
    return redirect()->route('products.index');
});

// Resource controller
Route::resource('products', ProductController::class);
