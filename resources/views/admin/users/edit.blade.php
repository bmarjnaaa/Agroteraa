@extends('layouts.admin')

@section('content')
<div class="max-w-4xl mx-auto bg-white rounded-2xl border border-gray-300 p-6">
    <h2 class="text-2xl font-bold text-secondary font-lato mb-6">Edit Akun Admin</h2>
    <form action="{{ route('admin.users.update', $user) }}" method="POST">
        @csrf @method('PUT')
        @if ($errors->any())
            <div class="bg-red-100 text-red-800 p-4 mb-4 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="mb-4">
            <label class="block text-secondary font-lato">Nama</label>
            <input type="text" name="name" value="{{ $user->name }}" class="w-full p-2 border border-gray-300 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block text-secondary font-lato">Email</label>
            <input type="email" name="email" value="{{ $user->email }}" class="w-full p-2 border border-gray-300 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block text-secondary font-lato">Password Baru (Kosongkan jika tidak ubah)</label>
            <input type="password" name="password" class="w-full p-2 border border-gray-300 rounded">
        </div>
        <div class="mb-4">
            <label class="block text-secondary font-lato">Konfirmasi Password Baru</label>
            <input type="password" name="password_confirmation" class="w-full p-2 border border-gray-300 rounded">
        </div>
        <button type="submit" class="bg-primary px-4 py-2 text-white rounded hover:bg-green-700">Update</button>
        <a href="{{ route('admin.users.index') }}" class="ml-4 text-secondary">Batal</a>
    </form>
</div>
@endsection