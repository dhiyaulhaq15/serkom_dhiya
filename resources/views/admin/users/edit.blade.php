@extends('admin.layout')
@section('content')
    <div class="h-20 w-screen">
        <header class="flex items-center justify-between bg-white p-5 shadow-md rounded-2xl p-4 mt-4">
            <h1 class="text-xl font-bold">Daftar Pengguna</h1>
            <div class="flex items-center bg-gray-100 rounded-xl px-4 py-2">
                <input type="text" placeholder="Search" class="bg-transparent ml-2 focus:outline-none">
                <i class="ri-search-line"></i>
            </div>
        </header>
        <div class="max-w-2xl mx-auto py-10 px-6">
            <div class="bg-white shadow-lg rounded-2xl p-8 border border-gray-100">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">
                    <i class="fa-solid fa-user-pen text-blue-600 mr-2"></i>Edit Pengguna
                </h2>

                {{-- Notifikasi sukses --}}
                @if (session('success'))
                    <div class="mb-6 bg-green-50 border-l-4 border-green-500 text-green-700 p-4 rounded-md">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Form Edit --}}
                <form method="POST" action="{{ route('user.update', $user->id) }}" class="space-y-6">
                    @csrf
                    @method('PUT')

                    {{-- Role ID --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Role ID</label>
                        <input type="number" name="role_id" value="{{ old('role_id', $user->role_id) }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 ease-in-out"
                            placeholder="Masukkan ID Role">
                        @error('role_id')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Nama --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap</label>
                        <input type="text" name="name" value="{{ old('name', $user->name) }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 ease-in-out"
                            placeholder="Masukkan nama pengguna">
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Email</label>
                        <input type="email" name="email" value="{{ old('email', $user->email) }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 ease-in-out"
                            placeholder="contoh: user@email.com">
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Tombol Aksi --}}
                    <div class="flex justify-between items-center pt-4">
                        <a href="{{ route('admin.users.index') }}"
                            class="inline-flex items-center text-gray-600 hover:text-gray-800 transition font-medium">
                            <i class="fa-solid fa-arrow-left mr-2"></i>Kembali
                        </a>

                        <button type="submit"
                            class="inline-flex items-center bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2.5 rounded-lg shadow transition duration-200 ease-in-out">
                            <i class="fa-solid fa-floppy-disk mr-2"></i>Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
