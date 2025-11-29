<?php

namespace App\Http\Controllers;

use App\Models\News; // Ganti dengan App\Models\Berita jika nama model Anda Berita
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    // Method yang sudah ada
    public function index()
    {
        // Ambil berita unggulan
        $featuredNews = News::where('is_featured', true)->latest()->first();
        
        // Ambil berita terbaru, tapi skip yang featured agar tidak duplikat
        $latestNews = News::when($featuredNews, function ($query) use ($featuredNews) {
            return $query->where('id', '!=', $featuredNews->id); // Skip featured
        })->latest()->take(6)->get(); // Ambil 6 berita terbaru lainnya
        
        return view('berita', compact('featuredNews', 'latestNews'));
    }

    // Tambahkan method baru untuk admin CRUD
    public function adminIndex()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'tag' => 'required|string',
            'date' => 'required|date',
            'link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('news', 'public');
        }

        News::create([
            'title' => $request->title,
            'content' => $request->content,
            'tag' => $request->tag,
            'date' => $request->date,
            'link' => $imagePath,
            'image' => $imagePath,
            'is_featured' => $request->has('is_featured') ? 1 : 0,
        ]);

        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil ditambahkan!');
    }

    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'tag' => 'required|string',
            'date' => 'required|date',
            'link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = $news->image;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('news', 'public');
        }

        $news->update([
            'title' => $request->title,
            'content' => $request->content,
            'tag' => $request->tag,
            'date' => $request->date,
            'link' => $request->link,
            'image' => $imagePath,
            'is_featured' => $request->has('is_featured') ? 1 : 0,
        ]);

        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil diupdate!');
    }

    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil dihapus!');
    }
}