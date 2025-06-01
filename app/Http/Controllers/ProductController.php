<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Tampilkan halaman daftar produk
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Tampilkan form tambah produk
    public function create()
    {
        return view('products.form', [
            'product' => new Product()
        ]);
    }

    // Simpan data produk baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:4',
            'price' => 'required|integer|min:1000000',
        ]);

        Product::create($validated);

        return redirect()->route('products.index')
                         ->with('sukses', 'Selamat! Berhasil menambahkan data.');
    }

    // Tampilkan detail produk
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    // Tampilkan form edit produk
    public function edit(Product $product)
    {
        return view('products.form', compact('product'));
    }

    // Update data produk
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|min:4',
            'price' => 'required|integer|min:1000000',
        ]);

        $product->update($validated);

        return redirect()->route('products.index')
                         ->with('sukses', 'Produk berhasil diperbarui.');
    }

    // Hapus data produk
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
                         ->with('sukses', 'Produk berhasil dihapus.');
    }
}
