@extends('layouts.admin')

@section('content')
<div class="max-w-4xl mx-auto bg-white rounded-2xl border border-gray-300 p-6">
    <h2 class="text-2xl font-bold text-secondary font-lato mb-6">Tambah Produk Baru</h2>
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label class="block text-secondary font-lato">Nama Produk</label>
            <input type="text" name="name" class="w-full p-2 border border-gray-300 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block text-secondary font-lato">Deskripsi</label>
            <input type="text" name="description" class="w-full p-2 border border-gray-300 rounded">
        </div>
        <div class="mb-4">
            <label class="block text-secondary font-lato">Kategori</label>
            <select name="category" class="w-full p-2 border border-gray-300 rounded" required>
                <option value="Sayur">Sayur</option>
                <option value="Buah">Buah</option>
                <option value="Bumbu">Bumbu</option>
                <option value="Umbi">Umbi</option>
                <option value="Rempah">Rempah</option>
            </select>
        </div>
        <div class="mb-4">
            <label class="block text-secondary font-lato">Gambar</label>
            <input type="file" name="image" class="w-full p-2 border border-gray-300 rounded">
        </div>
        <button type="submit" class="bg-primary px-4 py-2 text-white rounded hover:bg-green-700">Simpan</button>
        <a href="{{ route('admin.products.index') }}" class="ml-4 text-secondary">Batal</a>
    </form>
</div>
@endsection