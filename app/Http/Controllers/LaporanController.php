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
        $imagePath = null;

        // Jika gambar diunggah, simpan dan dapatkan path-nya
        if ($request->hasFile('imageInput')) {
            $imagePath = $request->file('imageInput')->store('images');
        }

        $laporan = LaporanData::create([
            'option' => $laporanOption,
            'image_path' => $imagePath,
            'comments' => $request->input('comments'),
        ]);

        // Tampilkan informasi bahwa laporan sudah dibuat
        return redirect()->back()->with('success', 'Laporan sudah dibuat');
    }
}
