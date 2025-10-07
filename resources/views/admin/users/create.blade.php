@extends('admin.layout')
@section('title', 'Tambah Pengguna')

@section('content')
<div class="h-20 w-screen">
    <header class="flex items-center justify-between bg-white p-5 shadow-md rounded-2xl p-4 mt-4">
        <h1 class="text-xl font-bold">Daftar Pengguna</h1>
        <div class="flex items-center bg-gray-100 rounded-xl px-4 py-2">
            <input type="text" placeholder="Search" class="bg-transparent ml-2 focus:outline-none">
            <i class="ri-search-line"></i>
        </div>
    </header>

    <div class="max-w-2xl mx-auto px-6 py-10">
        <div class="bg-white shadow-lg rounded-2xl p-8 border border-gray-100">
            <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">
                <i class="fa-solid fa-user-plus mr-2 text-blue-600"></i>Tambah Pengguna Baru
            </h1>

            @if ($errors->any())
                <div class="mb-6 bg-red-50 border-l-4 border-red-500 text-red-700 p-4 rounded-md">
                    <ul class="list-disc pl-5 space-y-1 text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('users.store') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 ease-in-out"
                        placeholder="Masukkan nama lengkap">
                </div>

                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 ease-in-out"
                        placeholder="contoh: user@email.com">
                </div>

                <div>
                    <label for="role_id" class="block text-sm font-semibold text-gray-700 mb-1">Role Pengguna</label>
                    <select name="role_id" id="role_id" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 ease-in-out">
                        <option value="">-- Pilih Role --</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}" {{ old('role_id') == $role->id ? 'selected' : '' }}>
                                {{ ucfirst($role->name) }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="password" class="block text-sm font-semibold text-gray-700 mb-1">Password</label>
                    <input type="password" name="password" id="password"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 ease-in-out"
                        placeholder="Minimal 8 karakter">
                </div>

                <div class="flex justify-between items-center pt-4">
                    <a href="{{ route('admin.users.index') }}"
                        class="inline-flex items-center text-gray-600 hover:text-gray-800 transition font-medium">
                        <i class="fa-solid fa-arrow-left mr-2"></i>Kembali
                    </a>
                    <button type="submit"
                        class="inline-flex items-center bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2.5 rounded-lg shadow transition duration-200 ease-in-out">
                        <i class="fa-solid fa-save mr-2"></i>Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
