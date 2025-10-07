@extends('admin.layout')
@section('title', 'Edit EventNews')

@section('content')
    <div class="h-20 w-full">
        <header class="flex items-center justify-between bg-white p-5 shadow-md rounded-2xl p-4 mt-4">
            <h1 class="text-xl font-bold">Daftar Event & News</h1>
            <div class="flex items-center bg-gray-100 rounded-xl px-4 py-2">
                <input type="text" placeholder="Search" class="bg-transparent ml-2 focus:outline-none">
                <i class="ri-search-line"></i>
            </div>
        </header>
        <div class="max-w-2xl mx-auto mt-16 bg-white p-8 rounded-xl shadow-lg">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Edit Event / Berita</h2>

            <form action="{{ route('admin.eventnews.update', $eventnews->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- Input Judul --}}
                <div class="mb-5">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Judul</label>
                    <input type="text" name="title" value="{{ old('title', $eventnews->title) }}"
                        class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2">
                    @error('title')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Input Konten --}}
                <div class="mb-5">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Konten</label>
                    <textarea name="content" rows="5"
                        class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2">{{ old('content', $eventnews->content) }}</textarea>
                    @error('content')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Gambar Lama --}}
                <div class="mb-5">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Gambar Saat Ini</label>
                    @if ($eventnews->gambar)
                        <img src="{{ asset('storage/' . $eventnews->gambar) }}" alt="Gambar"
                            class="w-48 rounded-lg shadow-md mb-2">
                    @else
                        <p class="text-gray-500 text-sm">Belum ada gambar</p>
                    @endif
                </div>

                {{-- Upload Gambar Baru --}}
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Ganti Gambar (opsional)</label>
                    <input type="file" name="gambar"
                        class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2">
                    @error('gambar')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Tombol Submit --}}
                <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-200">
                    Update Data
                </button>
            </form>
        </div>

    </div>
@endsection
