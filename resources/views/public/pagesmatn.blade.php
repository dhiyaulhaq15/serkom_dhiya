@extends('public.layout')
@section('content')
    <section class="relative h-[550px] flex items-center justify-center bg-center bg-cover"
        style="background-image: url('/images/bc-smatn.jpeg')">
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/50"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center gap-10">
            <div class="flex-1 text-white">
                <p class="text-lg mb-4">Selamat Datang di Kampus Cimahi</p>
                <h1 class="text-4xl md:text-5xl font-extrabold text-yellow-400 leading-snug">
                    Pendidikan Terbaik,<br> Lanjutkan Cita-cita Para Proklamator
                </h1>
                <p class="mt-6 max-w-xl text-gray-200">Siswa tidak hanya belajar, tapi juga dilatih, diasuh, dan
                    dibentuk menjadi generasi pemimpin bangsa.</p>
            </div>
            <div class="flex-1 flex justify-center">
                <img src="{{ asset('images/1-8.png') }}" class="max-w-md w-full rounded-xl shadow-xl">
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-blue-800">Statistik & Prestasi</h2>
            <p class="text-gray-600 mt-2 mb-12">Data nyata yang mencerminkan kualitas dan dedikasi kami.</p>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-10">
                {{-- <div class="flex flex-col items-center" x-data="{ count: 0, target: {{ $jumlahSiswa }} }" x-init="let i = setInterval(() => { count++; if (count >= 450) clearInterval(i) }, 10)">
                    <i class="ri-user-star-line text-4xl text-blue-600 mb-3"></i>
                    <h3 class="text-4xl font-bold text-gray-800" x-text="count"></h3>
                    <p class="text-sm text-gray-500">Jumlah Siswa</p>
                </div> --}}
                {{-- <div class="flex flex-col items-center" x-data="{ count: 0 }" x-init="let i = setInterval(() => { count++; if (count >= 99) clearInterval(i) }, 20)">
                    <i class="ri-award-line text-4xl text-green-600 mb-3"></i>
                    <h3 class="text-4xl font-bold text-gray-800" x-text="count"></h3>
                    <p class="text-sm text-gray-500">Jumlah Guru</p>
                </div> --}}
                <div class="flex flex-col items-center"
                    x-data="{ count: 0, target: {{ $jumlahSiswa }} }"
                    x-init="let i = setInterval(() => { count++; if (count >= target) clearInterval(i) }, 20)">
                    <i class="ri-user-star-line text-4xl text-blue-600 mb-3"></i>
                    <h3 class="text-4xl font-bold text-gray-800" x-text="count"></h3>
                    <p class="text-sm text-gray-500">Jumlah Siswa</p>
                </div>
                <div class="flex flex-col items-center"
                    x-data="{ count: 0, target: {{ $jumlahGuru }} }"
                    x-init="let i = setInterval(() => { count++; if (count >= target) clearInterval(i) }, 20)">
                    <i class="ri-award-line text-4xl text-green-600 mb-3"></i>
                    <h3 class="text-4xl font-bold text-gray-800" x-text="count"></h3>
                    <p class="text-sm text-gray-500">Jumlah Guru</p>
                </div>

                <div class="flex flex-col items-center" x-data="{ count: 0 }" x-init="let i = setInterval(() => { count++; if (count >= 8) clearInterval(i) }, 200)">
                    <i class="ri-bar-chart-line text-4xl text-yellow-500 mb-3"></i>
                    <h3 class="text-4xl font-bold text-gray-800" x-text="'#' + count"></h3>
                    <p class="text-sm text-gray-500">Ranking Nasional</p>
                </div>
                <div class="flex flex-col items-center" x-data="{ label: '0' }" x-init="let s = ['0', 'B', 'B+', 'A', 'A+'];
                let i = 0;
                setInterval(() => {
                    if (i < s.length - 1) {
                        i++;
                        label = s[i]
                    }
                }, 300)">
                    <i class="ri-shield-star-line text-4xl text-purple-600 mb-3"></i>
                    <h3 class="text-4xl font-bold text-gray-800" x-text="label"></h3>
                    <p class="text-sm text-gray-500">Akreditasi BAN-S/M</p>
                </div>
            </div>
        </div>
    </section>

    <section class="relative bg-blue-800 text-white py-20 px-6 md:px-20">
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('https://www.transparenttextures.com/patterns/batthern.png');
              background-size: 300px;">
        </div>

        <div
            class="relative max-w-7xl mx-auto grid md:grid-cols-2 gap-10 items-center bg-white/10 backdrop-blur-lg rounded-3xl shadow-2xl p-8 md:p-12 border border-white/20">

            <div class="flex flex-col items-center">
                <div class="overflow-hidden rounded-2xl shadow-xl border-4 border-white">
                    <img src="{{ asset('images/sugionomenlu.jpg') }}" alt="Kepala Sekolah"
                        class="object-cover w-full h-[420px]">
                </div>
                <div class="bg-blue-700 text-white text-center px-4 py-2 mt-4 rounded-lg shadow">
                    <h3 class="font-semibold text-lg">Sugiono B.Sc, M.BA</h3>
                    <p class="text-sm opacity-90">Kepala SMA Taruna Singaparna Kampus Cimahi</p>
                </div>
            </div>

            <div class="text-left">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Sambutan Kepala Sekolah</h2>

                <p class="italic text-blue-100 mb-4">Assalamualaikum warahmatullahi wabarakatuh,</p>
                <p class="text-blue-50 leading-relaxed mb-4">
                    Salam sejahtera bagi kita semua. Puji syukur kita panjatkan ke hadirat Allah SWT,
                    atas limpahan rahmat-Nya kita dapat bersama-sama mengembangkan SMA Taruna Nusantara
                    Kampus Cimahi sebagai lembaga pendidikan unggulan yang berkomitmen mencetak generasi
                    bangsa yang cerdas, berkarakter, dan siap bersaing secara global.
                </p>
                <p class="text-blue-50 leading-relaxed mb-4">
                    Kami percaya bahwa setiap peserta didik memiliki potensi luar biasa yang perlu diarahkan
                    dan dikembangkan. Dengan dukungan tenaga pendidik profesional serta fasilitas modern,
                    SMA Taruna Nusantara berkomitmen mencetak calon pemimpin bangsa yang berintegritas
                    dan siap mengabdi untuk negeri.
                </p>
                <p class="italic text-blue-100 mb-6">Wassalamualaikum warahmatullahi wabarakatuh.</p>

                <a href="#"
                    class="inline-flex items-center px-6 py-3 bg-white text-blue-700 font-semibold rounded-full shadow hover:bg-gray-100 transition group">
                    Selengkapnya
                    <i class="ri-arrow-right-line ml-2 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="py-10 bg-white">
        <div class="max-w-7xl mx-auto px-6 text-center justify-center
        ">
            <h2 class="text-3xl md:text-4xl font-bold text-blue-800 mb-10">Prestasi</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-2 mb-12">
                @foreach ($prestasis as $prestasi)
                    <img class="rounded-2xl h-[300px] object-contain" src="{{ asset('storage/' . $prestasi->image) }}" alt="">
                @endforeach
            </div>
            <div class="text-center">
                <a href="{{ route('public.prestasismatn') }}" target="_blank"
                    class="inline-block px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition">
                    Lihat Selengkapnya
                </a>
            </div>
        </div>
    </section>


    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-blue-800">Kurikulum Khusus</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mt-12 mb-12">
                @foreach (range(1, 4) as $i)
                    <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">
                        <img src="{{ asset('images/belanegara.jpg') }}" class="h-44 w-full object-cover">
                        <div class="p-5 text-left">
                            <h3 class="text-lg font-semibold text-gray-800">Bela Negara</h3>
                            <p class="text-sm text-gray-600 mt-2">Semangat nasionalisme, disiplin, dan tanggung jawab
                                melalui pelatihan kepemimpinan.</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                <a href="{{ route('public.galerivideosmatn') }}" target="_blank"
                    class="inline-block px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition">
                    Lihat Selengkapnya
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-blue-800">Ekstrakurikuler</h2>
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
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mt-12 mb-12">
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
            <div class="text-center">
                <a href="{{ route('public.galerivideosmatn') }}" target="_blank"
                    class="inline-block px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition">
                    Lihat Selengkapnya
                </a>
            </div>
        </div>
    </section>


    <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-800">Galeri Video</h2>
            </div>

            {{-- <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mb-12">
                @for ($i = 0; $i < 6; $i++)
                    <div class="relative rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition">
                        <iframe class="w-full h-64 md:h-48"
                            src="https://www.youtube.com/embed/7tVc9PuQm98?rel=0&showinfo=0"
                            title="Galeri Video SMA TN" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                @endfor
            </div> --}}

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mb-12">
                @foreach ($video_galleries as $video)
                    @php
                        // Ambil ID video dari link YouTube
                        preg_match(
                            '/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/',
                            $video->youtube_link,
                            $matches,
                        );
                        $videoId = $matches[1] ?? null;
                    @endphp

                    @if ($videoId)
                        <div class="relative rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition">
                            <iframe class="w-full h-64 md:h-48"
                                src="https://www.youtube.com/embed/{{ $videoId }}?rel=0&showinfo=0"
                                title="Galeri Video" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    @endif
                @endforeach
            </div>


            <div class="text-center">
                <a href="{{ route('public.galerivideosmatn') }}" target="_blank"
                    class="inline-block px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition">
                    Lihat Selengkapnya
                </a>
            </div>
        </div>
    </section>
