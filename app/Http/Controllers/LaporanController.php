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
            'laporanOption' => 'required',
            'imageInput' => 'nullable|image|mimes:jpeg,png|max:2048', // Optional: Batasan jenis dan ukuran gambar
            'comments' => 'nullable',
        ]);

        // Simpan data ke database
        $laporanOption = $request->input('laporanOption');
        $imagePath = null;

        // Jika gambar diunggah, simpan dan dapatkan path-nya
        if ($request->hasFile('imageInput')) {
            $imagePath = $request->file('imageInput')->store('images');
        }

        LaporanData::create([
            'option' => $laporanOption,
            'image_path' => $imagePath,
            'comments' => $request->input('comments'),
        ]);

        return redirect()->route('laporan.form')->with('success', 'Formulir berhasil disubmit!');
    }

}
