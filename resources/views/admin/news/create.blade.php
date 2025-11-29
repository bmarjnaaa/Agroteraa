@extends('layouts.admin')

@section('content')
<div class="max-w-4xl mx-auto bg-white rounded-2xl border border-gray-300 p-6">
    <h2 class="text-2xl font-bold text-secondary font-lato mb-6">Tambah Berita Baru</h2>
    <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label class="block text-secondary font-lato">Judul Berita</label>
            <input type="text" name="title" value="{{ old('title') }}" class="w-full p-2 border border-gray-300 rounded" required>
            @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-secondary font-lato">Isi Berita</label>
            <textarea name="content" rows="5" class="w-full p-2 border border-gray-300 rounded" required>{{ old('content') }}</textarea>
            @error('content') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-secondary font-lato">Tag</label>
            <select name="tag" class="w-full p-2 border border-gray-300 rounded" required>
                <option value="Artikel" {{ old('tag') == 'Artikel' ? 'selected' : '' }}>Artikel</option>
                <option value="Berita" {{ old('tag') == 'Berita' ? 'selected' : '' }}>Berita</option>
                <option value="Update" {{ old('tag') == 'Update' ? 'selected' : '' }}>Update</option>
            </select>
            @error('tag') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-secondary font-lato">Tanggal</label>
            <input type="date" name="date" value="{{ old('date') }}" class="w-full p-2 border border-gray-300 rounded" required>
            @error('date') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-secondary font-lato">Link Eksternal (Opsional)</label>
            <input type="url" name="link" value="{{ old('link') }}" class="w-full p-2 border border-gray-300 rounded" placeholder="https://example.com">
            @error('link') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-secondary font-lato">Gambar</label>
            <input type="file" name="image" class="w-full p-2 border border-gray-300 rounded">
            @error('image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-secondary font-lato">
                <input type="checkbox" name="is_featured" value="1" {{ old('is_featured') ? 'checked' : '' }} class="mr-2">
                Tandai sebagai Berita Unggulan (akan tampil di bagian atas halaman berita publik)
            </label>
            @error('is_featured') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="bg-primary px-4 py-2 text-white rounded hover:bg-green-700">Simpan</button>
        <a href="{{ route('admin.news.index') }}" class="ml-4 text-secondary">Batal</a>
    </form>
</div>
@endsection