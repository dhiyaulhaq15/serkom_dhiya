@extends('admin.layout')
@section('title', 'Dashboard')
@section('content')
    <div class="h-20 w-screen">
        <header class="flex items-center justify-between bg-white p-5 shadow-md rounded-2xl p-4 mt-4">
            <h1 class="text-xl font-bold">Admin Dashboard</h1>
            <div class="flex items-center bg-gray-100 rounded-xl px-4 py-2">
                <input type="text" placeholder="Search" class="bg-transparent ml-2 focus:outline-none">
                <i class="ri-search-line"></i>
            </div>
        </header>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mt-6 max-w-screen mx-auto">
            <div class="bg-white rounded-xl shadow p-6 text-center">
                <h2 class="text-lg font-semibold text-gray-700">Staf</h2>
                <p class="text-3xl font-bold text-blue-500 mt-2">{{ $jumlahOperator }}</p>
            </div>
            <div class="bg-white rounded-xl shadow p-6 text-center">
                <h2 class="text-lg font-semibold text-gray-700">Guru</h2>
                <p class="text-3xl font-bold text-green-500 mt-2">{{ $jumlahGuru }}</p>
            </div>

            <div class="bg-white rounded-xl shadow p-6 text-center">
                <h2 class="text-lg font-semibold text-gray-700">Siswa</h2>
                <p class="text-3xl font-bold text-purple-500 mt-2">{{ $jumlahSiswa }}</p>
            </div>
        </div>
        {{-- <div class="flex flex-col sm:flex-row gap-6 mt-6 max-w-screen mx-auto">
            <div class="flex-1 bg-white rounded-xl shadow p-6 text-center">
                <h2 class="text-lg font-semibold text-gray-700">Jumlah Kelas</h2>
                <p class="text-3xl font-bold text-orange-500 mt-2">{{ $jumlahKelas }}</p>
            </div>
            <div class="flex-1 bg-white rounded-xl shadow p-6 text-center">
                <h2 class="text-lg font-semibold text-gray-700">Mata Pelajaran</h2>
                <p class="text-3xl font-bold text-red-500 mt-2">9</p>
            </div>
        </div> --}}
    </div>
@endsection
