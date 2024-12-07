<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;


class ProductsController extends Controller
{

    public function index()
    {
        $products = Product::with(['category', 'user'])->get();
        $products = Product::all();
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

    public function edit($id)
{
    // Ambil data produk berdasarkan id
    $product = Product::findOrFail($id);
    
    // Ambil daftar kategori dan pengguna untuk dropdown
    $categories = Category::all();
    $users = User::all();

    return view('products.edit', compact('product', 'categories', 'users'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'id_kategori' => 'required',
        'id_user' => 'required',
        'nama_produk' => 'required|string|max:255',
        'deskripsi_produk' => 'required|string',
        'harga_produk' => 'required|numeric',
        'foto_produk' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'status_produk' => 'required|in:ada,tidak ada',
    ]);

    // Temukan produk berdasarkan ID
    $product = Product::findOrFail($id);

    // Update data produk
    $product->id_kategori = $request->id_kategori;
    $product->id_user = $request->id_user;
    $product->nama_produk = $request->nama_produk;
    $product->deskripsi_produk = $request->deskripsi_produk;
    $product->harga_produk = $request->harga_produk;

    // Periksa apakah ada file foto yang diupload
    if ($request->hasFile('foto_produk')) {
        // Hapus foto lama jika ada
        if ($product->foto_produk && file_exists(public_path('storage/products/' . $product->foto_produk))) {
            unlink(public_path('storage/products/' . $product->foto_produk));
        }

        // Simpan foto baru
        $path = $request->file('foto_produk')->store('products', 'public');
        $product->foto_produk = basename($path);
    }

    $product->status_produk = $request->status_produk;

    // Simpan perubahan
    $product->save();

    return redirect()->route('admin.products')->with('success', 'Produk berhasil diperbarui.');
}



    public function destroy($id_produk)
    {
        // Cari produk berdasarkan ID
        $product = Product::findOrFail($id_produk);

        // Hapus file foto jika ada
        if ($product->foto_produk && \Storage::exists('public/' . $product->foto_produk)) {
            \Storage::delete('public/' . $product->foto_produk);
        }

        // Hapus produk dari database
        $product->delete();

        // Redirect ke halaman produk dengan pesan sukses
        return redirect()->route('admin.products')->with('success', 'Produk berhasil dihapus.');
    }


}


