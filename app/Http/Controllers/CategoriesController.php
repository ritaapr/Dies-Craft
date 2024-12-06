<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index(){
        $categories = Category::all(); // Mengambil semua data kategori dari database
        return view('backendtoo.categories', compact('categories')); // Mengirim data ke view
    }

    public function getCategories()
    {
        // Ambil semua kategori
        $categories = Category::all();
        
        // Kirim data kategori ke view
        return view('frontend.index', compact('categories'));
    }

    public function create(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
            'status' => 'required|in:active,inactive',
        ]);
    
        // Simpan data ke database
        Category::create([
            'nama_kategori' => $request->nama_kategori,
            'status' => $request->status,
        ]);
    
        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $category = Category::find($id); // Cari data kategori berdasarkan ID
        return view('backend.edit-category', compact('category')); // Kirim data ke view edit
    }

    public function destroy($id_kategori)
    {
        // Cari kategori berdasarkan ID
        $category = Category::findOrFail($id_kategori);
        
        // Hapus kategori
        $category->delete();

        // Redirect kembali ke daftar kategori dengan pesan sukses
        return redirect()->route('admin.categories')->with('success', 'Category deleted successfully');
    }

    public function update(Request $request, $id_kategori)
{
    // Validasi input
    $request->validate([
        'nama_kategori' => 'required|string|max:255',
        'status' => 'required|in:active,inactive',
    ]);

    // Cari kategori berdasarkan ID
    $category = Category::findOrFail($id_kategori);

    // Update data kategori
    $category->update([
        'nama_kategori' => $request->nama_kategori,
        'status' => $request->status,
    ]);

    // Redirect dengan pesan sukses
    return redirect()->route('admin.categories')->with('success', 'Kategori berhasil diupdate.');
}



    public function show($category)
    {
        // Mencari kategori berdasarkan nama
        $category = Category::where('nama_kategori', $category)->firstOrFail();
        
        // Ambil semua kategori untuk dropdown (jika dibutuhkan)
        $categories = Category::all();
        
        // Cek apakah data kategori sudah benar
        dd($category);  // Menampilkan data kategori yang ditemukan
        
        // Mengirim data kategori yang dipilih ke view
        return view('frontend.category', compact('category', 'categories'));
    }


    


}
