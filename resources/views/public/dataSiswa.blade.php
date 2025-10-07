@extends('public.layout')
@section('content')
<div class="py-20">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <div class="text-center mb-6">
            <h1 class="text-3xl md:text-5xl font-extrabold text-gray-800">Data Siswa</h1>
        </div>
        <div class="overflow-x-auto bg-white rounded-2xl shadow-md mt-6">
            <table id="tabelSiswa" class="min-w-full divide-y divide-gray-200">
                <thead class="bg-white-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">#</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">NISN</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Jenis Kelamin</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($siswa as $sis)
                        <tr>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $sis->nisn }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $sis->nama }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $sis->jk }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    </div>
