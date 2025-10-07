@extends('admin.layout')
@section('title', 'Tambah Video')
@section('content')
    <div class="h-20 w-full">
        <header class="flex items-center justify-between bg-white p-5 shadow-md rounded-2xl p-4 mt-4">
            <h1 class="text-xl font-bold">Daftar Event & News</h1>
            <div class="flex items-center bg-gray-100 rounded-xl px-4 py-2">
                <input type="text" placeholder="Search" class="bg-transparent ml-2 focus:outline-none">
                <i class="ri-search-line"></i>
            </div>
        </header>
        <div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded-xl shadow">
            <h2 class="text-lg font-bold mb-4">Tambah Video</h2>
            <form action="{{ route('admin.videogallery.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="youtube_link" class="block text-sm font-medium text-gray-700">YouTube Link</label>
                    <input type="url" name="youtube_link" id="youtube_link"
                        class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200" required>
                </div>
                <button type="submit"
                    class="bg-blue-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg shadow text-sm font-semibold">
                    Simpan
                </button>
            </form>
        </div>
    </div>
@endsection
