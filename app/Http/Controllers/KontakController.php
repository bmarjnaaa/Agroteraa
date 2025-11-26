<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function submit(Request $request)
    {
        // Validasi data form
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pesan' => 'required|string',
        ]);

        // Simpan atau kirim pesan ke email, atau lakukan hal lainnya
        // Misalnya, menggunakan Mail::send() untuk mengirim email

        // Kembali ke halaman kontak dengan pesan sukses
        return redirect()->route('kontak')->with('success', 'Pesan Anda telah terkirim!');
    }
}
