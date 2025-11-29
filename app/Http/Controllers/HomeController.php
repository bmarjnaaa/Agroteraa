<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial; // Pastikan import model Testimonial

class HomeController extends Controller
{
    public function index()
    {
        // Ambil semua testimonial dari database, urutkan berdasarkan terbaru
        $testimonials = Testimonial::orderBy('created_at', 'desc')->get();
        
        // Kirim data ke view index
        return view('index', compact('testimonials'));
    }
}