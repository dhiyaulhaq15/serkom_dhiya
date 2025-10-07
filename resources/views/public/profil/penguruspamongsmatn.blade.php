@extends('public.layout')
@section('content')
    <div class="mt-20 bg-gray-100 shadow-sm border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-6">
            <div
                class="flex justify-center md:justify-start space-x-6 overflow-x-auto py-3 text-sm font-medium text-gray-700">
                <a href="{{ route('public.profil.sejarahsmatn') }}" class="hover:text-blue-600 whitespace-nowrap">Sejarah</a>
                <a href="{{ route('public.profil.visimisismatn') }}" class="hover:text-blue-600 whitespace-nowrap">Visi &
                    Misi</a>
                <a href="{{ route('public.profil.penguruspamongsmatn') }}"
                    class="hover:text-blue-600 whitespace-nowrap">Pengurus & Pamong</a>
            </div>
        </div>
    </div>

    <section class="py-10">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-xl md:text-4xl font-bold text-black-800">Pengurus</h2>
            <div class="flex items-center justify-center mt-6">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 w-72">
                    <img src="{{ asset('images/sugionomenlu.jpg') }}" alt="Foto Dummy" class="w-full h-64 object-cover">
                    <div class="p-5 text-center">
                        <p class="text-sm font-semibold text-gray-800 leading-snug">
                            Brigjen TNI Drs. Untung Susoro, M.Si. — <span class="text-gray-500">Kepala
                                Sekolah</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap justify-center gap-6 mt-6">
                @foreach (['Wakil Kepala Sekolah Bidang Administrasi', 'Wakil Kepala Sekolah Bidang Kesiswaan', 'Wakil Kepala Sekolah Bidang Kurikulum'] as $jabatan)
                    <div
                        class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 w-72">
                        <img src="{{ asset('images/sugionomenlu.jpg') }}" alt="Foto Dummy" class="w-full h-64 object-cover">
                        <div class="p-5 text-center">
                            <p class="text-sm font-semibold text-gray-800 leading-snug">
                                Brigjen TNI Drs. Untung Susoro, M.Si. — <span
                                    class="text-gray-500">{{ $jabatan }}</span>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <section class="">
        <<div class="max-w-7xl mx-auto px-6 mb-7 text-center" x-data="{ tab: 'pamong' }">
            <h2 class="text-xl md:text-4xl font-bold text-gray-800 mb-6">Pamong</h2>

            <!-- Tab Bar -->
            {{-- <div class="flex flex-wrap justify-center gap-4 mb-8">
                <button @click="tab = 'p3'"
                    :class="tab === 'p3' ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-800'"
                    class="px-4 py-2 rounded-full font-medium transition hover:bg-blue-500 hover:text-white">
                    Pamong, Pengajar, Pengasuh (P3)
                </button>
                <button @click="tab = 'admin'"
                    :class="tab === 'admin' ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-800'"
                    class="px-4 py-2 rounded-full font-medium transition hover:bg-blue-500 hover:text-white">
                    Pamong Administrasi (PA)
                </button>
                <button @click="tab = 'pengajar2'"
                    :class="tab === 'pengajar2' ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-800'"
                    class="px-4 py-2 rounded-full font-medium transition hover:bg-blue-500 hover:text-white">
                    Pamong, Pengajar (P2)
                </button>
            </div> --}}

            <!-- Tab Content -->
            <div class="flex flex-wrap justify-center gap-6">
                @for ($i = 0; $i < 8; $i++)
                    <div
                        class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 w-72">
                        <img src="{{ asset('images/sugionomenlu.jpg') }}" alt="Foto Dummy" class="w-full h-64 object-cover">
                        <div class="p-5 text-center">
                            <h3
                                class="text-lg font-bold text-gray-800 whitespace-nowrap overflow-hidden text-ellipsis truncate">
                                Brigjen TNI Drs. Untung Susoro, M.Si.
                            </h3>
                            <p class="text-gray-500 mt-1">2004 – 2006 / TN Magelang</p>
                        </div>
                    </div>
                @endfor
            </div>

            <!-- Placeholder for other tabs -->
            {{-- <div x-show="tab === 'admin'" class="text-gray-600 text-lg mt-6">Konten Pamong Administrasi (PA) akan
                ditampilkan di sini.</div>
            <div x-show="tab === 'pengajar2'" class="text-gray-600 text-lg mt-6">Konten Pamong Pengajar (P2) akan
                ditampilkan di sini.</div>
            </div> --}}

            </div>

    </section>
