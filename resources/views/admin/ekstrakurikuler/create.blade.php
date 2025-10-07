@extends('admin.layout')
@section('title', 'Tambah Pengguna')

@section('content')
<div class="h-20 w-full">
    <header class="flex items-center justify-between bg-white p-5 shadow-md rounded-2xl p-4 mt-4">
        <h1 class="text-xl font-bold">Daftar Ekstrakurikuler</h1>
        <div class="flex items-center bg-gray-100 rounded-xl px-4 py-2">
            <input type="text" placeholder="Search" class="bg-transparent ml-2 focus:outline-none">
            <i class="ri-search-line"></i>
        </div>
    </header>
    <form action="{{ route('admin.ekstrakurikuler.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Nama</label>
            <input type="text" name="nama" class="border p-2 w-full">
        </div>
        <div>
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="border p-2 w-full"></textarea>
        </div>
        <div>
            <label>Gambar</label>
            <input type="file" name="gambar" class="border p-2 w-full">
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 mt-4">Simpan</button>
    </form>
</div>
@endsection
