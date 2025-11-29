@extends('layouts.admin')

@section('content')
<div class="max-w-4xl mx-auto bg-white rounded-2xl border border-gray-300 p-6">
    <h2 class="text-2xl font-bold text-secondary font-lato mb-6">Edit Produk</h2>
    <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-4">
            <label class="block text-secondary font-lato">Nama Produk</label>
            <input type="text" name="name" value="{{ $product->name }}" class="w-full p-2 border border-gray-300 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block text-secondary font-lato">Deskripsi</label>
            <input type="text" name="description" value="{{ $product->description }}" class="w-full p-2 border border-gray-300 rounded">
        </div>
        <div class="mb-4">
            <label class="block text-secondary font-lato">Kategori</label>
            <select name="category" class="w-full p-2 border border-gray-300 rounded" required>
                <option value="Sayur" {{ $product->category == 'Sayur' ? 'selected' : '' }}>Sayur</option>
                <option value="Buah" {{ $product->category == 'Buah' ? 'selected' : '' }}>Buah</option>
                <option value="Bumbu" {{ $product->category == 'Bumbu' ? 'selected' : '' }}>Bumbu</option>
                <option value="Umbi" {{ $product->category == 'Umbi' ? 'selected' : '' }}>Umbi</option>
                <option value="Rempah" {{ $product->category == 'Rempah' ? 'selected' : '' }}>Rempah</option>
            </select>
        </div>
        <div class="mb-4">
            <label class="block text-secondary font-lato">Gambar (Biarkan kosong jika tidak ubah)</label>
            <input type="file" name="image" class="w-full p-2 border border-gray-300 rounded">
            @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="Gambar Lama" class="w-16 h-16 object-cover mt-2">
            @endif
        </div>
        <button type="submit" class="bg-primary px-4 py-2 text-white rounded hover:bg-green-700">Update</button>
        <a href="{{ route('admin.products.index') }}" class="ml-4 text-secondary">Batal</a>
    </form>
</div>
@endsection