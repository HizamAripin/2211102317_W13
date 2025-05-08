<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // UNTUK MENAMPILKAN HALAMAN UTAMA PRODUCTS
    public function index() 
    { 
        $products = Product::all(); 
        return view('products.index', ['products' => $products]); 
    } 
 
    // UNTUK MENAMPILKAN FORMULIR MEMBUAT DATA BARU
    public function create() 
    { 
        return view('products.form', [ 
            'title' => 'Tambah', 
            'product' => new Product(), 
            'route' => route('products.store'), 
            'method' => 'POST', 
        ]); 
    } 
 
    // UNTUK MENYIMPAN DATA BARU
    public function store(Request $request) 
    { 
        $validated = $request->validate([ 
            'name' => 'required|min:4', 
            'price' => 'required|integer|min:1000000', 
        ]); 
 
        Product::create($validated); 
        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan'); 
    } 
 
    // UNTUK MENAMPILKAN DETAIL SUATU DATA PRODUK
    public function show(Product $product) 
    { 
        return view('products.show', compact('product')); 
    } 
 
    // UNTUK MENAMPILKAN FORMULIR EDIT
    public function edit(Product $product) 
    { 
        return view('products.form', [ 
            'title' => 'Edit', 
            'product' => $product, 
            'route' => route('products.update', $product), 
            'method' => 'PUT', 
        ]); 
    } 
 
    // UNTUK MENYIMPAN PERUBAHAN SUATU DATA PRODUK YANG BARU DIEDIT
    public function update(Request $request, Product $product) 
    { 
        $validated = $request->validate([ 
            'name' => 'required|min:4', 
            'price' => 'required|integer|min:1000000', 
        ]); 
 
        $product->update($validated); 
        return redirect()->route('products.index')->with('success', 'Produk berhasil 
diperbarui'); 
    } 
 
    // UNTUK MENGHAPUS DATA PRODUK
    public function destroy(Product $product) 
    { 
        $product->delete(); 
        return redirect()->route('products.index')->with('success', 'Produk berhasil 
dihapus'); 
    } 
}
