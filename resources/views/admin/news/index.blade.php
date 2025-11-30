@extends('layouts.admin')

@section('content')
<div class="max-w-6xl mx-auto bg-white rounded-2xl border border-gray-300 p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-secondary font-lato">Daftar Berita</h2>
        <a href="{{ route('admin.news.create') }}" class="bg-primary px-4 py-2 text-white rounded hover:bg-green-700">Tambah Berita</a>
    </div>
    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-4 mb-4 rounded">{{ session('success') }}</div>
    @endif
    <table class="w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="border border-gray-300 p-2">Judul</th>
                <th class="border border-gray-300 p-2">Tag</th>
                <th class="border border-gray-300 p-2">Tanggal</th>
                <th class="border border-gray-300 p-2">Unggulan</th>
                <th class="border border-gray-300 p-2">Gambar</th>
                <th class="border border-gray-300 p-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($news as $newsItem)
            <tr>
                <td class="border border-gray-300 p-2">{{ $newsItem->title }}</td>
                <td class="border border-gray-300 p-2">{{ $newsItem->tag }}</td>
                <td class="border border-gray-300 p-2">{{ $newsItem->date }}</td>
                <td class="border border-gray-300 p-2">{{ $newsItem->is_featured ? 'Ya' : 'Tidak' }}</td>
                <td class="border border-gray-300 p-2">
                    @if($newsItem->image)
                        <img src="{{ asset('storage/' . $newsItem->image) }}" alt="Gambar" class="w-16 h-16 object-cover">
                    @else
                        Tidak ada gambar
                    @endif
                </td>
                <td class="border border-gray-300 p-2">
                    <a href="{{ route('admin.news.edit', $newsItem) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 mr-2 inline-block">Edit</a>
                    <form action="{{ route('admin.news.destroy', $newsItem) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600" onclick="return confirm('Yakin hapus berita ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
                <tr>
                    <td colspan="6" class="border border-gray-300 p-2 text-center text-secondary">Belum ada berita.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection