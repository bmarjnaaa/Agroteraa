@extends('layouts.admin')

@section('content')
<div class="max-w-4xl mx-auto bg-white rounded-2xl border border-gray-300 p-6">
    <h2 class="text-2xl font-bold text-secondary font-lato mb-6">Edit Berita</h2>
    <form action="{{ route('admin.news.update', $news) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-4">
            <label class="block text-secondary font-lato">Judul Berita</label>
            <input type="text" name="title" value="{{ old('title', $news->title) }}" class="w-full p-2 border border-gray-300 rounded" required>
            @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-secondary font-lato">Isi Berita</label>
            <textarea name="content" rows="5" class="w-full p-2 border border-gray-300 rounded" required>{{ old('content', $news->content) }}</textarea>
            @error('content') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-secondary font-lato">Tag</label>
            <select name="tag" class="w-full p-2 border border-gray-300 rounded" required>
                <option value="Artikel" {{ old('tag', $news->tag) == 'Artikel' ? 'selected' : '' }}>Artikel</option>
                <option value="Berita" {{ old('tag', $news->tag) == 'Berita' ? 'selected' : '' }}>Berita</option>
                <option value="Update" {{ old('tag', $news->tag) == 'Update' ? 'selected' : '' }}>Update</option>
            </select>
            @error('tag') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-secondary font-lato">Tanggal</label>
            <input type="date" name="date" value="{{ old('date', $news->date) }}" class="w-full p-2 border border-gray-300 rounded" required>
            @error('date') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-secondary font-lato">Link Eksternal (Opsional)</label>
            <input type="url" name="link" value="{{ old('link', $news->link) }}" class="w-full p-2 border border-gray-300 rounded" placeholder="https://example.com">
            @error('link') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-secondary font-lato">Gambar (Biarkan kosong jika tidak ubah)</label>
            <input type="file" name="image" class="w-full p-2 border border-gray-300 rounded">
            @if($news->image)
                <img src="{{ asset('storage/' . $news->image) }}" alt="Gambar Lama" class="w-16 h-16 object-cover mt-2">
            @endif
            @error('image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-secondary font-lato">
                <input type="checkbox" name="is_featured" value="1" {{ old('is_featured', $news->is_featured) ? 'checked' : '' }} class="mr-2">
                Tandai sebagai Berita Unggulan (akan tampil di bagian atas halaman berita publik)
            </label>
            @error('is_featured') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="bg-primary px-4 py-2 text-white rounded hover:bg-green-700">Update</button>
        <a href="{{ route('admin.news.index') }}" class="ml-4 text-secondary">Batal</a>
    </form>
</div>
@endsection