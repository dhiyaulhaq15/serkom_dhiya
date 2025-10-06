@extends('admin.layout')
@section('title', 'Tambah Pengguna')

@section('content')
    <form action="{{ route('admin.eventnews.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Title</label>
            <input type="title" name="title" class="border p-2 w-full">
        </div>
        <div>
            <label>Content</label>
            <textarea name="content" class="border p-2 w-full"></textarea>
        </div>
        <div>
            <label>Gambar</label>
            <input type="file" name="gambar" class="border p-2 w-full">
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 mt-4">Simpan</button>
    </form>
@endsection
