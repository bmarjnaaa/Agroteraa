@extends('layouts.admin')

@section('content')
<div class="max-w-4xl mx-auto bg-white rounded-2xl border border-gray-300 p-6">
    <h2 class="text-2xl font-bold text-secondary font-lato mb-6">Edit Testimonial</h2>
    <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-4">
            <label class="block text-secondary font-lato">Nama Orang</label>
            <input type="text" name="name" value="{{ $testimonial->name }}" class="w-full p-2 border border-gray-300 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block text-secondary font-lato">Lokasi (Opsional)</label>
            <input type="text" name="location" value="{{ $testimonial->location }}" class="w-full p-2 border border-gray-300 rounded" placeholder="Misalnya: Pelanggan di Semarang">
        </div>
        <div class="mb-4">
            <label class="block text-secondary font-lato">Pesan Testimonial</label>
            <textarea name="message" rows="4" class="w-full p-2 border border-gray-300 rounded" required>{{ $testimonial->message }}</textarea>
        </div>
        <div class="mb-4">
            <label class="block text-secondary font-lato">Rating (Bintang)</label>
            <select name="rating" class="w-full p-2 border border-gray-300 rounded" required>
                <option value="1" {{ $testimonial->rating == 1 ? 'selected' : '' }}>1 Bintang</option>
                <option value="2" {{ $testimonial->rating == 2 ? 'selected' : '' }}>2 Bintang</option>
                <option value="3" {{ $testimonial->rating == 3 ? 'selected' : '' }}>3 Bintang</option>
                <option value="4" {{ $testimonial->rating == 4 ? 'selected' : '' }}>4 Bintang</option>
                <option value="5" {{ $testimonial->rating == 5 ? 'selected' : '' }}>5 Bintang</option>
            </select>
        </div>
        <div class="mb-4">
            <label class="block text-secondary font-lato">Gambar Avatar (Biarkan kosong jika tidak ubah)</label>
            <input type="file" name="image" class="w-full p-2 border border-gray-300 rounded">
            @if($testimonial->image)
                <img src="{{ asset('storage/' . $testimonial->image) }}" alt="Avatar Lama" class="w-16 h-16 object-cover rounded-full mt-2">
            @endif
        </div>
        <button type="submit" class="bg-primary px-4 py-2 text-white rounded hover:bg-green-700">Update</button>
        <a href="{{ route('admin.testimonials.index') }}" class="ml-4 text-secondary">Batal</a>
    </form>
</div>
@endsection