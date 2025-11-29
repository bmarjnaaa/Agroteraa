<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class KontakController extends Controller
{
    public function kirimPesan(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'pesan' => 'required|string',
        ]);

        $data = [
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ];

        Mail::raw("Nama: {$data['nama']}\nEmail: {$data['email']}\nPesan: {$data['pesan']}", function ($message) use ($data) {
            $message->to('bagroteraindonesia@gmail.com')
                    ->subject('Pesan Baru dari Kontak AGROTERA')
                    ->from($data['email'], $data['nama']);
        });

        return back()->with('success', 'Pesan terkirim!');
    }
}