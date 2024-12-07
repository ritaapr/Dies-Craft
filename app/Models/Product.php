<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak sesuai dengan konvensi Laravel
    protected $table = 'ms_produk';

    // Tentukan primary key jika tidak sesuai dengan konvensi Laravel (id)
    protected $primaryKey = 'id_produk';
    public $timestamps = false; // Disable timestamps
    // Tentukan kolom-kolom yang dapat diisi (fillable)
    protected $fillable = [
        'id_kategori', 
        'id_user', 
        'nama_produk', 
        'deskripsi_produk', 
        'harga_produk', 
        'foto_produk', 
        'status_produk',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_kategori', 'id_kategori');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user'); // Sesuaikan kolom jika berbeda
    }

    

}