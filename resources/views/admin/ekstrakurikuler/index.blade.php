@extends('admin.layout')
@section('title', 'Dashboard')
@section('content')
    <div class="h-20 w-screen">
        <header class="flex items-center justify-between bg-white p-5 shadow-md rounded-2xl p-4 mt-4">
            <h1 class="text-xl font-bold">Daftar Ekstrakurikuler</h1>
            <div class="flex items-center bg-gray-100 rounded-xl px-4 py-2">
                <input type="text" placeholder="Search" class="bg-transparent ml-2 focus:outline-none">
                <i class="ri-search-line"></i>
            </div>
        </header>
        {{-- <div class="max-w-screen mx-auto mt-4 px-4 py-6"> --}}
        <div class="flex justify-between items-center mb-4 mt-4">
            <a href="{{ route('admin.ekstrakurikuler.create') }}"
                class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg shadow text-sm font-semibold">
                + Tambah
            </a>
        </div>
        <div class="overflow-x-auto bg-white rounded-2xl shadow-md mt-6">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-white-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">#</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Gambar</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Deskripsi</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($eskuls as $eskul)
                        <tr>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">
                                <img src="{{ asset('storage/' . $eskul->gambar) }}" alt="Gambar Eskul"
                                    class="w-20 h-14 object-cover rounded-md">
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $eskul->nama }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $eskul->deskripsi }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">
                                <div class="flex items-center space-x-2">
                                    <a href="{{ route('admin.ekstrakurikuler.edit', $eskul->id) }}"
                                        class="inline-block px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">
                                        Edit
                                    </a>

                                    <form action="{{ route('admin.ekstrakurikuler.destroy', $eskul->id) }}" method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- </div> --}}
    </div>
@endsection
