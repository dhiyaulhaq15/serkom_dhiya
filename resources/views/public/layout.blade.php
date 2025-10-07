    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SMA Taruna Nusantara</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>

    <body class="relative">
        <div class="absolute inset-0 -z-10 ">
            <img src="{{ asset('images/logo-sma-tn.png') }}" alt="Background Dummy" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-white/95 backdrop-blur-sm"></div>
        </div>
        <nav x-data="{ scrolled: false }" x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 20)" :class="scrolled ? 'bg-white shadow-md' : 'bg-transparent'"
            class="fixed top-0 left-0 w-full z-50 transition duration-300">
            <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">
                <a href="{{ route('public.pagesmatn') }}"
                    class="flex items-center space-x-3 hover:opacity-80 transition">
                    <img src="{{ asset('images/LOGO-SMA-TARUNA-NUSANTARA-1.png') }}" class="w-12 h-12"
                        alt="Logo SMA TN">
                    <div class="border-l-2 border-gray-300 pl-3">
                        <h1 class="text-lg font-bold text-gray-800">SMA Taruna Nusantara</h1>
                        <p class="text-xs text-gray-500">Satu Nusa, Satu Bangsa, Satu Bahasa</p>
                    </div>
                </a>

                <div class="hidden md:flex space-x-8 font-medium">
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open"
                            class="flex items-center space-x-1 hover:text-blue-600 focus:outline-none">
                            <span>SMA TN</span>
                            <i class="ri-arrow-down-s-line text-lg"></i>
                        </button>
                        <div x-show="open" @click.away="open = false" x-transition
                            class="absolute left-0 mt-7 w-40 bg-white rounded-sm shadow-lg border border-gray-200 z-50">
                            <a href="{{ route('public.profil.sejarahsmatn') }}"
                                class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600">Profil</a>
                            <a href="{{ route('public.galerivideosmatn') }}"
                                class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600">Galeri Video</a>
                        </div>
                    </div>
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open"
                            class="flex items-center space-x-1 hover:text-blue-600 focus:outline-none">
                            <span>SISWA</span>
                            <i class="ri-arrow-down-s-line text-lg"></i>
                        </button>
                        <div x-show="open" @click.away="open = false" x-transition
                            class="absolute left-0 mt-7 w-60 bg-white rounded-sm shadow-lg border border-gray-200 z-50">
                            <a href="{{ route('public.dataSiswa') }}"
                                class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600">Data Siswa</a>
                            <a href="{{ route('public.prestasismatn') }}"
                                class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600">Prestasi</a>
                            <a href="{{ route('public.eskulsmatn') }}"
                                class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600">Ekstrakurikuler</a>
                        </div>
                    </div>
                    <a href="{{ route('public.eventnewssmatn') }}" class="hover:text-blue-600">EVENT & NEWS</a>
                </div>
            </div>
        </nav>

        {{-- <div class="mt-20 bg-gray-100 shadow-sm border-t border-gray-200">
            <div class="max-w-7xl mx-auto px-6">
                <div
                    class="flex justify-center md:justify-start space-x-6 overflow-x-auto py-3 text-sm font-medium text-gray-700">
                    <a href="#sejarah" class="hover:text-blue-600 whitespace-nowrap">Sejarah</a>
                    <a href="#visi-misi" class="hover:text-blue-600 whitespace-nowrap">Visi & Misi</a>
                    <a href="#lambang" class="hover:text-blue-600 whitespace-nowrap">Lambang</a>
                    <a href="#pengurus" class="hover:text-blue-600 whitespace-nowrap">Pengurus & Pamong</a>
                    <a href="#fasilitas" class="hover:text-blue-600 whitespace-nowrap">Fasilitas</a>
                    <a href="#prasasti" class="hover:text-blue-600 whitespace-nowrap">Prasasti</a>
                </div>
            </div>
        </div> --}}
        <footer class="bg-blue-900 text-gray-200 pt-12 pb-8 relative overflow-hidden">
            <!-- Wave Decoration -->
            <div class="absolute top-0 left-0 w-full overflow-hidden leading-none rotate-180">
                <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="relative block w-full h-12">
                    <path
                        d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.64-17.28-168.09-16.17-250.79,3.6C406.69,37.75,324.34,84.4,242.05,106.5,162.47,127.51,81.38,124.93,0,103.29V120H1200V0C1118.57,29.26,1044.65,113.6,985.66,92.83Z"
                        class="fill-blue-900"></path>
                </svg>
            </div>

            <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-10 relative z-10">
                <!-- Identitas Sekolah -->
                <div>
                    <h3 class="font-extrabold text-2xl mb-3 text-white">SMA Taruna Nusantara</h3>
                    <p class="text-sm leading-relaxed text-gray-300">
                        Lembaga pendidikan unggulan berasrama yang membentuk generasi muda berjiwa
                        nasionalis, disiplin, dan berwawasan global.
                    </p>
                    <div class="mt-4 space-y-1 text-sm">
                        <p><i class="ri-map-pin-2-line mr-1 text-blue-400"></i>Jl. Raya SMA TN No.1, Magelang, Jawa
                            Tengah</p>
                        <p><i class="ri-mail-line mr-1 text-blue-400"></i>info@smatn.sch.id</p>
                        <p><i class="ri-phone-line mr-1 text-blue-400"></i>(0293) 123456</p>
                    </div>
                </div>

                <!-- Navigasi -->
                <div>
                    <h3 class="font-semibold text-lg mb-4 text-white">Navigasi</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-blue-400 transition">Beranda</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Pendaftaran</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Kurikulum</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Galeri</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Kontak</a></li>
                    </ul>
                </div>

                <!-- Ekstrakurikuler -->
                <div>
                    <h3 class="font-semibold text-lg mb-4 text-white">Ekstrakurikuler</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-blue-400 transition">Paskibra</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Drumband</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Basket</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Karate</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Paduan Suara</a></li>
                    </ul>
                </div>

                <!-- Map Section -->
                <div>
                    <h3 class="font-semibold text-lg mb-4 text-white">Lokasi Kami</h3>
                    <div class="rounded-lg overflow-hidden shadow-lg border border-blue-700">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d31688.293142039252!2d107.52052201619234!3d-6.88621445299366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1ssma%20taruna%20nusantara%20cimahi!5e0!3m2!1sid!2sid!4v1759768415099!5m2!1sid!2sid">
                        </iframe>
                    </div>
                </div>
            </div>

            <div class="border-t border-blue-800 mt-10 pt-6 text-center text-sm text-gray-400">
                <div class="flex justify-center space-x-5 mb-3">
                    <a href="#" class="hover:text-blue-400 text-xl"><i class="ri-facebook-fill"></i></a>
                    <a href="#" class="hover:text-blue-400 text-xl"><i class="ri-instagram-line"></i></a>
                    <a href="#" class="hover:text-blue-400 text-xl"><i class="ri-youtube-line"></i></a>
                    <a href="#" class="hover:text-blue-400 text-xl"><i class="ri-twitter-x-line"></i></a>
                </div>
                <p>© 2025 SMA Taruna Nusantara. All rights reserved.</p>
            </div>
        </footer>

        @yield('content')
    </body>

    </html>
