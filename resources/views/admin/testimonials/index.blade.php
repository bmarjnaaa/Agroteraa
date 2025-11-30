@extends('layouts.admin') <!-- Pakai layout admin untuk sidebar dan header -->

@section('content') <!-- Isi konten utama yang masuk ke layout -->
<div class="max-w-6xl mx-auto bg-white rounded-2xl border border-gray-300 p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-secondary font-lato">Daftar Testimonial</h2>
        <a href="{{ route('admin.testimonials.create') }}" class="bg-primary px-4 py-2 text-white rounded hover:bg-green-700">Tambah Testimonial</a>
    </div>
    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-4 mb-4 rounded">{{ session('success') }}</div>
    @endif
    <table class="w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="border border-gray-300 p-2">Nama</th>
                <th class="border border-gray-300 p-2">Lokasi</th>
                <th class="border border-gray-300 p-2">Rating</th>
                <th class="border border-gray-300 p-2">Pesan</th>
                <th class="border border-gray-300 p-2">Gambar</th>
                <th class="border border-gray-300 p-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($testimonials as $testimonial) <!-- Loop data testimonial dari controller -->
            <tr>
                <td class="border border-gray-300 p-2">{{ $testimonial->name }}</td>
                <td class="border border-gray-300 p-2">{{ $testimonial->location ?? 'Tidak ada' }}</td>
                <td class="border border-gray-300 p-2">{{ $testimonial->rating }} bintang</td>
                <td class="border border-gray-300 p-2">{{ Str::limit($testimonial->message, 50) }}</td> <!-- Potong pesan panjang -->
                <td class="border border-gray-300 p-2">
                    @if($testimonial->image)
                        <img src="{{ asset('storage/' . $testimonial->image) }}" alt="Avatar" class="w-16 h-16 object-cover rounded-full">
                    @else
                        Tidak ada gambar
                    @endif
                </td>
                <td class="border border-gray-300 p-2">
                    <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 mr-2 inline-block">Edit</a>
                    <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600" onclick="return confirm('Yakin hapus testimonial ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection