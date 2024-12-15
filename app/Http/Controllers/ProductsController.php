<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


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



    public function update(Request $request, $id)
    {
        // Validasi data
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'deskripsi_produk' => 'required|string',
            'harga_produk' => 'required|numeric',
            'id_kategori' => 'required|exists:ms_kategori,id_kategori',
            'status_produk' => 'required|string',
            'foto_produk' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Temukan produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Update data produk
        $product->nama_produk = $request->nama_produk;
        $product->deskripsi_produk = $request->deskripsi_produk;
        $product->harga_produk = $request->harga_produk;
        $product->id_kategori = $request->id_kategori;
        $product->status_produk = $request->status_produk;

        // Jika ada foto baru, simpan foto
        if ($request->hasFile('foto_produk')) {
            // Hapus foto lama jika ada
            if ($product->foto_produk) {
                Storage::delete('public/products/' . $product->foto_produk);
            }
            // Simpan foto baru
            $path = $request->file('foto_produk')->store('products', 'public');
            $product->foto_produk = $path;
        }

        // Simpan perubahan
        $product->save();

        return redirect()->route('admin.products')->with('success', 'Produk berhasil diperbarui.');
    }



    public function destroy($id_produk)
    {
        // Cari produk berdasarkan ID
        $product = Product::findOrFail($id_produk);

        // Hapus file foto jika ada
        if ($product->foto_produk && Storage::exists('storage/' . $product->foto_produk)) {
            Storage::delete('storage/' . $product->foto_produk);
        }

        // Hapus produk dari database
        $product->delete();

        // Redirect ke halaman produk dengan pesan sukses
        return redirect()->route('admin.products')->with('success', 'Produk berhasil dihapus.');
    }

    public function showCategory($categoryName)
{
    // Ambil kategori berdasarkan nama
    $category = Category::where('nama_kategori', $categoryName)->first();

    // Jika kategori tidak ditemukan, redirect atau tampilkan pesan
    if (!$category) {
        return redirect()->route('home')->with('error', 'Kategori tidak ditemukan.');
    }

    // Ambil semua kategori untuk dropdown
    $categories = Category::all();

    // Ambil produk berdasarkan kategori
    $products = Product::where('id_kategori', $category->id_kategori)->get();

    // Kirim data ke view
    return view('frontend.category', compact('category', 'products', 'categories'));
}


}

