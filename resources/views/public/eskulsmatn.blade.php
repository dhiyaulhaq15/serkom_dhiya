@extends('public.layout')
@section('content')
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 text-center">
            {{-- <h2 class="text-3xl md:text-4xl font-bold text-blue-800">Ekstrakurikuler</h2> --}}
            <div class="text-center mb-6">
                <h1 class="text-3xl md:text-5xl font-extrabold text-gray-800">Prestasi</h1>
            </div>
            {{-- <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mt-12">
                @foreach (range(1, 3) as $i)
                    <div class="bg-gray-50 rounded-xl shadow hover:shadow-xl transition overflow-hidden">
                        <img src="{{ asset('images/belanegara.jpg') }}" class="h-44 w-full object-cover">
                        <div class="p-5 text-left">
                            <h3 class="text-lg font-semibold text-gray-800">Bela Negara</h3>
                            <p class="text-sm text-gray-600 mt-2">Semangat nasionalisme, disiplin, dan tanggung jawab
                                melalui pelatihan kepemimpinan.</p>
                        </div>
                    </div>
                @endforeach
            </div> --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mt-12">
                @foreach ($eskuls as $eskul)
                    <div class="bg-gray-50 rounded-xl shadow hover:shadow-xl transition overflow-hidden">
                        <img src="{{ asset('storage/' . $eskul->gambar) }}" class="h-44 w-full object-cover">
                        <div class="p-5 text-left">
                            <h3 class="text-lg font-semibold text-gray-800">{{ $eskul->nama }}</h3>
                            <p class="text-sm text-gray-600 mt-2">{{ $eskul->deskripsi }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
