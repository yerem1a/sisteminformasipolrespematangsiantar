<?php

namespace App\Http\Controllers;

use App\Models\LaporanData;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Ambil data laporan dari database
        $laporanData = LaporanData::all();

        // Kirim data laporan ke view 'admin.dashboard'
        return view('admin.dashboard', compact('laporanData'));
    }
}
