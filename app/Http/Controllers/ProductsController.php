<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;


class ProductsController extends Controller
{

    public function index()
    {
        $products = Product::with('Category')->get(); // Relasi kategori
        $products = Product::with('User')->get();
        $categories = Category::all(); // Data kategori untuk dropdown
        return view('backendtoo.products', compact('products', 'categories'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'deskripsi_produk' => 'required|string',
            'harga_produk' => 'required|numeric',
            'foto_produk' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'id_kategori' => 'required|exists:ms_kategori,id_kategori',
            'status_produk' => 'required|in:ada,tidak ada',
        ]);

        // Upload foto produk
        $filePath = $request->file('foto_produk')->store('products', 'public');

        // Simpan data ke database
        Product::create([
            'nama_produk' => $request->nama_produk,
            'deskripsi_produk' => $request->deskripsi_produk,
            'harga_produk' => $request->harga_produk,
            'foto_produk' => $filePath,
            'id_kategori' => $request->id_kategori,
            'status_produk' => $request->status_produk,
            'id_user' => auth()->id(), // Menyimpan ID pengguna login
        ]);

        return redirect()->route('admin.products')->with('success', 'Produk berhasil ditambahkan!');
    }
}


