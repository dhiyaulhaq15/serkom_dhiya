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
                <a href="#fasilitas" class="hover:text-blue-600 whitespace-nowrap">Fasilitas</a>
                <a href="#prasasti" class="hover:text-blue-600 whitespace-nowrap">Prasasti</a>
            </div>
        </div>
    </div>

    <section class="py-10">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-xl md:text-4xl font-bold text-black-800">Sejarah</h2>
            <div class="mt-6">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">

                    <div class="lg:col-span-1 flex justify-center">
                        <img src="{{ asset('images/sugionomenlu.jpg') }}" alt="Foto Dummy"
                            class="rounded-2xl shadow-lg object-cover w-full max-w-sm">
                    </div>

                    <div class="lg:col-span-2 space-y-4 text-gray-700 leading-relaxed text-justify">
                        <p>
                            Ide pembuatan sekolah menengah atas berbasis semi-militer ini dicetuskan oleh Menteri
                            Pertahanan dan Keamanan saat itu,
                            <span class="text-blue-600 font-semibold">Jenderal LB Moerdani</span> pada tanggal
                            <span class="font-bold">20 Mei 1985</span> di Pendopo Agung <span
                                class="text-blue-600 font-semibold">Taman Siswa</span> Yogyakarta.
                            Ia memiliki visi luhur, yakni untuk membangun sekolah yang mendidik manusia – manusia
                            terbaik dari seluruh Indonesia
                            dan menghasilkan lulusan yang dapat melanjutkan cita-cita dari Proklamator.
                        </p>

                        <p>
                            SMA TN diresmikan oleh Pangab (Panglima Angkatan Bersenjata) saat itu,
                            <span class="text-blue-600 font-semibold">Jenderal Try Sutrisno</span> pada tahun
                            <span class="font-bold">1990</span>. Kampus yang menempati lahan seluas 18.5 hektar ini
                            terdiri dari komplek akademis,
                            asrama siswa, dan komplek perumahan pamong (guru), di atas tanah milik Akademi Militer.
                        </p>

                        <p>
                            Namun mulai tahun <span class="font-bold">1996</span>, LPTTN membuat kebijaksanaan baru
                            dengan menerima angkatan putri pertama
                            sebanyak 70 orang. Untuk mengakomodasi perubahan ini, area sekolah pun diperluas menjadi
                            23 hektar.
                            LPTTN menawarkan beasiswa penuh kepada pelajar yang diterima, didukung dana dari TNI
                            serta dukungan berbagai pihak.
                        </p>

                        <p>
                            Namun, setelah krisis ekonomi dan perubahan politik pada tahun <span
                                class="font-bold">1997</span>,
                            LPTTN mengalami kesulitan keuangan sehingga pada tahun <span class="font-bold">2001</span>
                            menghentikan kebijakan beasiswa penuh ini.
                            Sekarang, pelajar terpilih yang mempunyai kesulitan keuangan tetap mendapatkan beasiswa
                            dari berbagai sumber baik individu, perusahaan, maupun pemerintah daerah.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-xl md:text-4xl font-bold text-black-800">Kepala SMA Taruna Nusantara Dari Masa Ke Masa
            </h2>
            <div class="flex gap-6 mt-6 flex-wrap">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 w-72">
                    <img src="{{ asset('images/sugionomenlu.jpg') }}" alt="Foto Dummy" class="w-full h-64 object-cover">
                    <div class="p-5 text-center">
                        <h3 class="text-lg font-bold text-gray-800">Brigjen TNI Drs. Untung Susoro, M.Si.</h3>
                        <p class="text-gray-500 mt-1">2004 – 2006 / TN Magelang</p>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 w-72">
                    <img src="{{ asset('images/sugionomenlu.jpg') }}" alt="Foto Dummy" class="w-full h-64 object-cover">
                    <div class="p-5 text-center">
                        <h3 class="text-lg font-bold text-gray-800">Brigjen TNI Drs. Untung Susoro, M.Si.</h3>
                        <p class="text-gray-500 mt-1">2004 – 2006 / TN Magelang</p>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 w-72">
                    <img src="{{ asset('images/sugionomenlu.jpg') }}" alt="Foto Dummy" class="w-full h-64 object-cover">
                    <div class="p-5 text-center">
                        <h3 class="text-lg font-bold text-gray-800">Brigjen TNI Drs. Untung Susoro, M.Si.</h3>
                        <p class="text-gray-500 mt-1">2004 – 2006 / TN Magelang</p>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 w-72">
                    <img src="{{ asset('images/sugionomenlu.jpg') }}" alt="Foto Dummy" class="w-full h-64 object-cover">
                    <div class="p-5 text-center">
                        <h3 class="text-lg font-bold text-gray-800">Brigjen TNI Drs. Untung Susoro, M.Si.</h3>
                        <p class="text-gray-500 mt-1">2004 – 2006 / TN Magelang</p>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 w-72">
                    <img src="{{ asset('images/sugionomenlu.jpg') }}" alt="Foto Dummy" class="w-full h-64 object-cover">
                    <div class="p-5 text-center">
                        <h3 class="text-lg font-bold text-gray-800">Brigjen TNI Drs. Untung Susoro, M.Si.</h3>
                        <p class="text-gray-500 mt-1">2004 – 2006 / TN Magelang</p>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 w-72">
                    <img src="{{ asset('images/sugionomenlu.jpg') }}" alt="Foto Dummy" class="w-full h-64 object-cover">
                    <div class="p-5 text-center">
                        <h3 class="text-lg font-bold text-gray-800">Brigjen TNI Drs. Untung Susoro, M.Si.</h3>
                        <p class="text-gray-500 mt-1">2004 – 2006 / TN Magelang</p>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 w-72">
                    <img src="{{ asset('images/sugionomenlu.jpg') }}" alt="Foto Dummy" class="w-full h-64 object-cover">
                    <div class="p-5 text-center">
                        <h3 class="text-lg font-bold text-gray-800">Brigjen TNI Drs. Untung Susoro, M.Si.</h3>
                        <p class="text-gray-500 mt-1">2004 – 2006 / TN Magelang</p>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 w-72">
                    <img src="{{ asset('images/sugionomenlu.jpg') }}" alt="Foto Dummy" class="w-full h-64 object-cover">
                    <div class="p-5 text-center">
                        <h3 class="text-lg font-bold text-gray-800">Brigjen TNI Drs. Untung Susoro, M.Si.</h3>
                        <p class="text-gray-500 mt-1">2004 – 2006 / TN Magelang</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
