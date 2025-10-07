@extends('admin.layout')
@section('content')
    <div class="h-20 w-full">
        <header class="flex items-center justify-between bg-white p-5 shadow-md rounded-2xl p-4 mt-4">
            <h1 class="text-xl font-bold">Daftar Event & News</h1>
            <div class="flex items-center bg-gray-100 rounded-xl px-4 py-2">
                <input type="text" placeholder="Search" class="bg-transparent ml-2 focus:outline-none">
                <i class="ri-search-line"></i>
            </div>
        </header>
        <div class="max-w-2xl mx-auto py-10 px-6">
            <div class="bg-white shadow-lg rounded-2xl p-8 border border-gray-100">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">
                    <i class="fa-solid fa-trophy text-yellow-500 mr-2"></i>Upload Prestasi Baru
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

                {{-- Form Upload --}}
                <form action="{{ route('admin.prestasi.store') }}" method="POST" enctype="multipart/form-data"
                    class="space-y-6">
                    @csrf

                    {{-- File Upload --}}
                    <div>
                        <label for="image" class="block text-sm font-semibold text-gray-700 mb-2">
                            Upload Gambar Prestasi
                        </label>

                        <div class="flex items-center justify-center w-full">
                            <label for="image"
                                class="flex flex-col items-center justify-center w-full h-40 border-2 border-dashed rounded-xl cursor-pointer bg-gray-50 hover:bg-gray-100 transition">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6 text-gray-600">
                                    <i class="fa-solid fa-cloud-arrow-up text-4xl mb-3 text-blue-600"></i>
                                    <p class="mb-2 text-sm"><span class="font-semibold">Klik untuk memilih file</span> atau
                                        seret ke sini</p>
                                    <p class="text-xs text-gray-500">PNG, JPG, JPEG (max 2MB)</p>
                                </div>
                                <input id="image" type="file" name="image" class="hidden" required>
                            </label>
                        </div>

                        @error('image')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Tombol Aksi --}}
                    <div class="flex justify-between items-center pt-4">
                        <a href="{{ route('admin.prestasi.index') }}"
                            class="inline-flex items-center text-gray-600 hover:text-gray-800 transition font-medium">
                            <i class="fa-solid fa-arrow-left mr-2"></i>Kembali
                        </a>

                        <button type="submit"
                            class="inline-flex items-center bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2.5 rounded-lg shadow transition duration-200 ease-in-out">
                            <i class="fa-solid fa-upload mr-2"></i>Upload
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
