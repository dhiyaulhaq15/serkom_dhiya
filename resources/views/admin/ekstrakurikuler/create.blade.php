@extends('admin.layout')
@section('title', 'Tambah Pengguna')

@section('content')
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
@endsection
