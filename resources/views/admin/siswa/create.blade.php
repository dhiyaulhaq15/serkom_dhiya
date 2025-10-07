@extends('admin.layout')
@section('title', 'Tambah Siswa')

@section('content')
<div class="h-20 w-full">
    <header class="flex items-center justify-between bg-white p-5 shadow-md rounded-2xl p-4 mt-4">
        <h1 class="text-xl font-bold">Tambah Siswa</h1>
        <div class="flex items-center bg-gray-100 rounded-xl px-4 py-2">
            <input type="text" placeholder="Search" class="bg-transparent ml-2 focus:outline-none">
            <i class="ri-search-line"></i>
        </div>
    </header>
    <div class="max-w-2xl mx-auto py-10 px-6">
        <div class="bg-white shadow-lg rounded-2xl p-8 border border-gray-100">
            <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">
                <i class="fa-solid fa-user-graduate text-blue-600 mr-2"></i>Tambah Siswa
            </h2>

            {{-- Notifikasi sukses --}}
            @if (session('success'))
                <div class="mb-6 bg-green-50 border-l-4 border-green-500 text-green-700 p-4 rounded-md">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Notifikasi error --}}
            @if ($errors->any())
                <div class="mb-6 bg-red-50 border-l-4 border-red-500 text-red-700 p-4 rounded-md">
                    <ul class="list-disc pl-5 space-y-1 text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('siswa.store') }}" method="POST" class="space-y-6">
                @csrf

                {{-- NISN --}}
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">NISN</label>
                    <input type="text" name="nisn" value="{{ old('nisn') }}"
                        maxlength="8" pattern="\d{8}" title="NISN harus terdiri     dari 8 digit angka"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    {{-- <input type="text" name="nisn" value="{{ old('nisn') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"> --}}
                    @error('nisn')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Nama --}}
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap</label>
                    <input type="text" name="nama" value="{{ old('nama') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    @error('nama')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Jenis Kelamin --}}
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Jenis Kelamin</label>
                    <select name="jk"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                        <option value="">-- Pilih --</option>
                        <option value="L" {{ old('jk') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="P" {{ old('jk') == 'P' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                    @error('jk')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Alamat --}}
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Alamat</label>
                    <textarea name="alamat" rows="3"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">{{ old('alamat') }}</textarea>
                </div>

                {{-- Tanggal Lahir --}}
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                </div>

                {{-- Kelas --}}
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Kelas</label>
                    <select name="kelas_id"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                        <option value="">-- Pilih Kelas --</option>
                        @foreach ($kelas as $k)
                            <option value="{{ $k->id }}" {{ old('kelas_id') == $k->id ? 'selected' : '' }}>
                                {{ $k->nama }}
                            </option>
                        @endforeach
                    </select>
                    @error('kelas_id')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Tombol --}}
                <div class="flex justify-between items-center pt-4">
                    <a href="{{ route('siswa.index') }}"
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
