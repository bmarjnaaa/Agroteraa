@extends('layouts.admin') <!-- Pakai layout admin -->

@section('content') <!-- Isi konten utama -->
<div class="max-w-6xl mx-auto bg-white rounded-2xl border border-gray-300 p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-secondary font-lato">Daftar Produk</h2>
        <a href="{{ route('admin.products.create') }}" class="bg-primary px-4 py-2 text-white rounded hover:bg-green-700">Tambah Produk</a>
    </div>
    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-4 mb-4 rounded">{{ session('success') }}</div>
    @endif
    <table class="w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="border border-gray-300 p-2">Nama</th>
                <th class="border border-gray-300 p-2">Kategori</th>
                <th class="border border-gray-300 p-2">Gambar</th>
                <th class="border border-gray-300 p-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td class="border border-gray-300 p-2">{{ $product->name }}</td>
                <td class="border border-gray-300 p-2">{{ $product->category }}</td>
                <td class="border border-gray-300 p-2">
                    @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="Gambar" class="w-16 h-16 object-cover">
                    @else
                        Tidak ada gambar
                    @endif
                </td>
                <td class="border border-gray-300 p-2">
                    <a href="{{ route('admin.products.edit', $product) }}" class="text-blue-600 mr-2">Edit</a>
                    <form action="{{ route('admin.products.destroy', $product) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-600" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection