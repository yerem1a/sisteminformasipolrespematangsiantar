<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporanData;

class UserController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }

    public function statusLaporan()
    {
        $laporanData = LaporanData::where('user_id', auth()->id())->get();
        return view('user.statuslaporan', compact('laporanData'));
    }
}
