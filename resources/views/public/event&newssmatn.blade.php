@extends('public.layout')
@section('content')
    <section class="bg-gray-50 py-16 mt-6">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <h1 class="text-3xl md:text-5xl font-extrabold text-gray-800">Event & News</h1>
                <p class="mt-4 text-gray-600 text-lg max-w-2xl mx-auto">
                    Temukan informasi terbaru seputar kegiatan, pengumuman, dan berita resmi dari SMA Taruna Nusantara.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- @for ($i = 0; $i < 6; $i++) --}}
                @foreach ($eventsnews as $eventnews)
                    <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 overflow-hidden">
                        <img src="{{ asset('storage/' . $eventnews->gambar) }}" alt="Event Image" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-800 mb-2 truncate">{{ $eventnews->title }}</h3>
                            <p class="text-sm text-gray-500 mb-4">{{ $eventnews->created_at->format('d M Y') }}</p>
                            <p class="text-gray-600 text-sm leading-relaxed line-clamp-3">
                                {{ Str::limit($eventnews->content, 100, '...') }}
                            </p>
                            <a href="https://share.google/iGiUAGdWCeqQxcZO3"
                                class="inline-block mt-4 text-blue-600 hover:underline text-sm font-medium">Baca
                                Selengkapnya →</a>
                        </div>
                    </div>
                @endforeach
                    {{-- <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 overflow-hidden">
                        <img src="{{ asset('images/padus.jpg') }}" alt="Event Image" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-800 mb-2 truncate">Upacara Hari Kesaktian Pancasila
                            </h3>
                            <p class="text-sm text-gray-500 mb-4">01 Oktober 2025 • TN Magelang</p>
                            <p class="text-gray-600 text-sm leading-relaxed line-clamp-3">
                                SMA Taruna Nusantara menggelar upacara peringatan Hari Kesaktian Pancasila dengan penuh
                                khidmat. Kegiatan ini diikuti oleh seluruh siswa dan pamong...
                            </p>
                            <a href="#"
                                class="inline-block mt-4 text-blue-600 hover:underline text-sm font-medium">Baca
                                Selengkapnya →</a>
                        </div>
                    </div>
                @endfor --}}
            </div>
        </div>
    </section>
