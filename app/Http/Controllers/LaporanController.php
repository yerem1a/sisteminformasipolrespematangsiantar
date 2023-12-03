<?php

namespace App\Http\Controllers;

use App\Models\LaporanData;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function showForm()
    {
        return view('laporan.form');
    }

    public function submitForm(Request $request)
    {
        // Validasi data formulir
        $request->validate([
            'serviceOption' => 'required',
            'imageInput' => 'nullable|image|mimes:jpeg,png|max:2048',
            'comments' => 'nullable',
        ]);

        // Simpan data ke database
        $laporanOption = $request->input('serviceOption');
        $fileBaru = null;

        // Jika gambar diunggah, simpan dan dapatkan path-nya
        if ($request->hasFile('imageInput')) {
            $file = $request->file('imageInput');
            $uploadPath = public_path('image');
            $fileBaru = date('Ymd', strtotime($request->input('date'))) . "T" . date('His') .  "." . $file->extension();
            $file->move($uploadPath, $fileBaru);
        }

        LaporanData::create([
            'option' => $laporanOption,
            'image_path' => $fileBaru,
            'comments' => $request->input('comments'),
        ]);

        return redirect('/');
    }

    public function showDashboard()
    {
        // Ambil data laporan dari database
        $laporanData = LaporanData::all();

        // Kirim data laporan ke view 'admin.dashboard'
        return view('admin.dashboard', compact('laporanData'));
    }
}
