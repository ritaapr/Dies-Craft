<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;


    protected $table = 'msl_user'; // Nama tabel di database
    protected $primaryKey = 'id_user'; // Nama primary key
    public $timestamps = false; // Nonaktifkan timestamps jika tidak ada kolom created_at dan updated_at

    protected $fillable = [
        'nama_user',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'string',
        ];
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'id_user', 'id_user'); // Sesuaikan kolom jika berbeda
    }
}
