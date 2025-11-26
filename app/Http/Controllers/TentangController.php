<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangController extends Controller
{
    /**
     * Tampilkan halaman Tentang Kami.
     */
    public function index()
    {
        // Jika kamu ingin kirim data ke view, bisa pakai compact() atau array.
        $title = "Tentang Kami | AGROTERA";
        $description = "Halaman ini menjelaskan tentang visi, misi, dan perjalanan AGROTERA sebagai gerakan pertanian berkelanjutan di Indonesia.";

        return view('tentangkami', compact('title', 'description'));
    }
}
