@extends('public.layout')
@section('content')
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 text-center justify-center">
            {{-- <h2 class="text-3xl md:text-4xl font-bold text-blue-800 mb-10">Prestasi</h2> --}}
            <div class="text-center mb-6">
                <h1 class="text-3xl md:text-5xl font-extrabold text-gray-800">Prestasi</h1>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-2">
                @foreach ($prestasis as $prestasi)
                    <img class="rounded-2xl h-[300px] object-contain"
                        src="{{ asset('storage/' . $prestasi->image) }}" alt="">
                @endforeach
            </div>
        </div>
    </section>
        {{-- <div class="max-w-7xl mx-auto px-6 text-center justify-center
        ">
            <h2 class="text-3xl md:text-4xl font-bold text-blue-800 mb-10">Prestasi</h2>
            <div class="flex gap-4 items-start mb-12">
                @foreach ($prestasis as $prestasi)
                    <img class="rounded-2xl h-[300px] object-contain" src="{{ asset('storage/' . $prestasi->image) }}" alt="">
                @endforeach
            </div>
            <div class="text-center">
                <a href="{{ route('public.galerivideosmatn') }}" target="_blank"
                    class="inline-block px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition">
                    Lihat Selengkapnya
                </a>
            </div>
        </div> --}}
