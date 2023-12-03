<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanData extends Model
{
    use HasFactory;

    protected $fillable = ['option', 'image_path', 'comments',];
}
