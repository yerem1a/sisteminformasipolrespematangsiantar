<?php

namespace App\Http\Controllers;

use App\Models\LaporanData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'isCheck' => 0,
            'user_id' => Auth::user()->id,
        ]);

        return redirect('/user/status-laporan');
    }
    public function updateisCheck(Request $request)
    {
        $laporan = LaporanData::find($request->id);
        if ($laporan) {
            $laporan->isCheck = 1;
            $laporan->save();

            // Dapatkan nomor WhatsApp yang sesuai dengan opsi laporan
            $whatsappNumbers = [
                1 => '6281111111111', // Nomor WhatsApp untuk opsi 1
                2 => '6282222222222', // Nomor WhatsApp untuk opsi 2
                3 => '6283333333333', // Nomor WhatsApp untuk opsi 3
                4 => '6284444444444', // Nomor WhatsApp untuk opsi 4
                5 => '6285555555555', // Nomor WhatsApp untuk opsi 5
            ];
            $whatsappNumber = $whatsappNumbers[$laporan->option] ?? ''; // Dapatkan nomor WhatsApp sesuai dengan opsi laporan

            $whatsappUrl = "https://wa.me/$whatsappNumber?text=Ada%20laporan%20baru%20di%20sistem%20admin";

            return redirect()->away($whatsappUrl);
        }
    }

    public function showDashboard()
    {
        $laporanData = LaporanData::whereHas('user', function ($query) {
            $query->where('role', 'user');
        })->get();

        // Kirim data laporan ke view 'admin.dashboard'
        return view('admin.dashboard', compact('laporanData'));
    }
}
