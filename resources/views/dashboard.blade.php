@extends('layouts.admin')

@php
use Illuminate\Support\Str;
@endphp

@section('content')
<div class="max-w-6xl mx-auto bg-white rounded-2xl border border-gray-300 p-6">
    <h2 class="text-2xl font-bold text-secondary font-lato mb-6">Selamat Datang di Dashboard Admin Agrotera</h2>
    <p class="mb-8 text-gray-600">Kelola konten website dengan mudah. Berikut ringkasan data terbaru.</p>

    <!-- Kartu Statistik -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-green-100 p-4 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold text-green-800">Total Berita</h3>
            <p class="text-2xl font-bold text-green-600">{{ $totalNews ?? 0 }}</p>
        </div>
        <div class="bg-yellow-100 p-4 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold text-yellow-800">Total Produk</h3>
            <p class="text-2xl font-bold text-yellow-600">{{ $totalProducts ?? 0 }}</p>
        </div>
        <div class="bg-purple-100 p-4 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold text-purple-800">Total Testimonial</h3>
            <p class="text-2xl font-bold text-purple-600">{{ $totalTestimonials ?? 0 }}</p>
        </div>
        <div class="bg-blue-100 p-4 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold text-blue-800">Total User</h3>
            <p class="text-2xl font-bold text-blue-600">{{ $totalUsers ?? 0 }}</p>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="mb-8">
        <h3 class="text-xl font-semibold mb-4 text-gray-800">Aksi Cepat</h3>
        <div class="flex flex-wrap gap-4">
            <a href="{{ route('admin.news.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">Tambah Berita</a>
            <a href="{{ route('admin.products.create') }}" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600">Tambah Produk</a>
            <a href="{{ route('admin.testimonials.create') }}" class="bg-purple-500 text-white px-4 py-2 rounded-lg hover:bg-purple-600">Tambah Testimonial</a>
            <a href="{{ route('admin.users.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Tambah User</a>
        </div>
    </div>

    <!-- Preview Data Terbaru -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Berita Terbaru -->
        <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-md">
            <h3 class="text-xl font-semibold mb-4 text-gray-800">Berita Terbaru</h3>
            <ul class="space-y-2">
                @forelse($latestNews as $news)
                    <li class="text-sm text-gray-600">
                        <a href="{{ route('admin.news.edit', $news) }}" class="hover:text-blue-500">{{ Str::limit($news->title, 30) }}</a> - {{ \Carbon\Carbon::parse($news->created_at)->format('d M Y') }}
                    </li>
                @empty
                    <li class="text-gray-500">Belum ada berita.</li>
                @endforelse
            </ul>
            <a href="{{ route('admin.news.index') }}" class="text-blue-500 mt-4 inline-block">Lihat Semua</a>
        </div>

        <!-- Produk Terbaru -->
        <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-md">
            <h3 class="text-xl font-semibold mb-4 text-gray-800">Produk Terbaru</h3>
            <ul class="space-y-2">
                @forelse($latestProducts as $product)
                    <li class="text-sm text-gray-600">
                        <a href="{{ route('admin.products.edit', $product) }}" class="hover:text-green-500">{{ Str::limit($product->name, 30) }}</a> - {{ \Carbon\Carbon::parse($product->created_at)->format('d M Y') }}
                    </li>
                @empty
                    <li class="text-gray-500">Belum ada produk.</li>
                @endforelse
            </ul>
            <a href="{{ route('admin.products.index') }}" class="text-green-500 mt-4 inline-block">Lihat Semua</a>
        </div>

        <!-- Testimonial Terbaru -->
        <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-md">
            <h3 class="text-xl font-semibold mb-4 text-gray-800">Testimonial Terbaru</h3>
            <ul class="space-y-2">
                @forelse($latestTestimonials as $testimonial)
                    <li class="text-sm text-gray-600">
                        "{{ Str::limit($testimonial->message, 40) }}" - {{ $testimonial->name }}
                    </li>
                @empty
                    <li class="text-gray-500">Belum ada testimonial.</li>
                @endforelse
            </ul>
            <a href="{{ route('admin.testimonials.index') }}" class="text-purple-500 mt-4 inline-block">Lihat Semua</a>
        </div>
    </div>
</div>
@endsection