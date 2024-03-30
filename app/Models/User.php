<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;

    protected $fillable = [
        'name', 'email', 'password', 'role', // Sesuaikan dengan kolom-kolom pada tabel Anda
    ];

    // Metode untuk menentukan apakah pengguna adalah admin
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
