@extends('layouts.admin')

@section('content')
<div class="max-w-4xl mx-auto bg-white rounded-2xl border border-gray-300 p-6">
    <h2 class="text-2xl font-bold text-secondary font-lato mb-6">Tambah Testimonial Baru</h2>
    <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label class="block text-secondary font-lato">Nama Orang</label>
            <input type="text" name="name" class="w-full p-2 border border-gray-300 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block text-secondary font-lato">Lokasi (Opsional)</label>
            <input type="text" name="location" class="w-full p-2 border border-gray-300 rounded" placeholder="Misalnya: Pelanggan di Semarang">
        </div>
        <div class="mb-4">
            <label class="block text-secondary font-lato">Pesan Testimonial</label>
            <textarea name="message" rows="4" class="w-full p-2 border border-gray-300 rounded" required></textarea>
        </div>
        <div class="mb-4">
            <label class="block text-secondary font-lato">Rating (Bintang)</label>
            <select name="rating" class="w-full p-2 border border-gray-300 rounded" required>
                <option value="1">1 Bintang</option>
                <option value="2">2 Bintang</option>
                <option value="3">3 Bintang</option>
                <option value="4">4 Bintang</option>
                <option value="5" selected>5 Bintang</option>
            </select>
        </div>
        <div class="mb-4">
            <label class="block text-secondary font-lato">Gambar Avatar</label>
            <input type="file" name="image" class="w-full p-2 border border-gray-300 rounded">
        </div>
        <button type="submit" class="bg-primary px-4 py-2 text-white rounded hover:bg-green-700">Simpan</button>
        <a href="{{ route('admin.testimonials.index') }}" class="ml-4 text-secondary">Batal</a>
    </form>
</div>
@endsection