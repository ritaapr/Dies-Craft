<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'ms_kategori'; // Nama tabel di database
    protected $primaryKey = 'id_kategori'; // Kolom primary key
    public $timestamps = false;
    protected $fillable = [
        'nama_kategori',
        'status',
    ];

    public function product()
    {
        return $this->hasMany(Product::class, 'id_kategori', 'id_kategori');
    }
}
