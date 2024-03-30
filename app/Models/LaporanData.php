<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanData extends Model
{
    use HasFactory;

    protected $fillable = ['option', 'image_path', 'comments', 'user_id']; // Tambahkan 'id_user' ke fillable

    protected $table = 'laporan_data';
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
