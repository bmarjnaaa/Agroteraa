@extends('layouts.admin')

@section('content')
<div class="max-w-6xl mx-auto bg-white rounded-2xl border border-gray-300 p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-secondary font-lato">Daftar Akun Admin</h2>
        <a href="{{ route('admin.users.create') }}" class="bg-primary px-4 py-2 text-white rounded hover:bg-green-700">Tambah Akun</a>
    </div>
    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-4 mb-4 rounded">{{ session('success') }}</div>
    @endif
    <table class="w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="border border-gray-300 p-2">Nama</th>
                <th class="border border-gray-300 p-2">Email</th>
                <th class="border border-gray-300 p-2">Password</th>
                <th class="border border-gray-300 p-2">Dibuat</th>
                <th class="border border-gray-300 p-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td class="border border-gray-300 p-2">{{ $user->name }}</td>
                <td class="border border-gray-300 p-2">{{ $user->email }}</td>
                <td class="border border-gray-300 p-2">{{ $user->plain_password ?: 'Tidak ada' }}</td>
                <td class="border border-gray-300 p-2">{{ $user->created_at->format('d M Y') }}</td>
                <td class="border border-gray-300 p-2">
                    <a href="{{ route('admin.users.edit', $user) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 mr-2 inline-block">Edit</a>
                    <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600" onclick="return confirm('Yakin hapus user ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
