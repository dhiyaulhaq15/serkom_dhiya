@extends('admin.layout')
@section('title', 'Edit Ekstrakurikuler')

@section('content')
    <form action="{{ route('admin.ekstrakurikuler.update', $eskul->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <label>Nama</label>
            <input type="text" name="nama" value="{{ old('nama', $eskul->nama) }}" class="border p-2 w-full">
        </div>

        <div>
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="border p-2 w-full">{{ old('deskripsi', $eskul->deskripsi) }}</textarea>
        </div>

        <div>
            <label>Gambar Lama</label><br>
            @if ($eskul->gambar)
                <img src="{{ asset('storage/' . $eskul->gambar) }}" alt="Gambar Eskul" class="w-32 h-20 object-cover rounded-md mb-2">
            @else
                <p class="text-sm text-gray-500">Belum ada gambar</p>
            @endif
        </div>

        <div>
            <label>Ganti Gambar</label>
            <input type="file" name="gambar" class="border p-2 w-full">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 mt-4">Update</button>
    </form>
@endsection
