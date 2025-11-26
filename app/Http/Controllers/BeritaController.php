<?php
namespace App\Http\Controllers;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    // Tampilkan halaman daftar berita
    public function index()
    {
        return view('berita');
    }

}
