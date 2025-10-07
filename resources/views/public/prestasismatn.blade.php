@extends('public.layout')
@section('content')
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 text-center justify-center">
            {{-- <h2 class="text-3xl md:text-4xl font-bold text-blue-800 mb-10">Prestasi</h2> --}}
            <div class="text-center mb-6">
                <h1 class="text-3xl md:text-5xl font-extrabold text-gray-800">Prestasi</h1>
            </div>
            <div class="flex gap-5 items-center">
                @foreach ($prestasis as $prestasi)
                    <img class="rounded-2xl w-[300px] h-[400px] object-contain"
                        src="{{ asset('storage/' . $prestasi->image) }}" alt="">
                @endforeach
            </div>
        </div>
    </section>
