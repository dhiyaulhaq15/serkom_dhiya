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
                <a href="{{ route('public.pagesmatn') }}" class="flex items-center space-x-3 hover:opacity-80 transition">
                    <img src="{{ asset('images/LOGO-SMA-TARUNA-NUSANTARA-1.png') }}" class="w-12 h-12"
                        alt="Logo SMA TN">
                    <div class="border-l-2 border-gray-300 pl-3">
                        <h1 class="text-lg font-bold text-gray-800">SMA Taruna Nusantara</h1>
                        <p class="text-xs text-gray-500">Satu Nusa, Satu Bangsa, Satu Bahasa</p>
                    </div>
                </a>

                <div class="hidden md:flex space-x-8 font-medium">
                    <a href="#" class="hover:text-blue-600">LPTTN</a>
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
                            <a href="{{ url('/kurikulum') }}"
                                class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600">Kurikulum</a>
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
                            <a href="{{ url('/profil') }}"
                                class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600">Informasi
                                Perdupsis</a>
                            <a href="{{ url('/kurikulum') }}"
                                class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600">Prestasi</a>
                            <a href="{{ url('/kurikulum') }}"
                                class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600">Organisasi</a>
                            <a href="{{ url('/kurikulum') }}"
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
        <footer class="bg-blue-900 text-gray-200 py-10 mt-20">
            <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-8">
                <div>
                    <h3 class="font-bold text-lg mb-3">SMA Taruna Nusantara</h3>
                    <p class="text-sm">Jl. Raya SMA TN No.1, Magelang, Jawa Tengah</p>
                    <p class="text-sm mt-2">Email: info@smatn.sch.id</p>
                    <p class="text-sm">Telepon: (0293) 123456</p>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-3">Navigasi</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white">Tentang</a></li>
                        <li><a href="#" class="hover:text-white">Pendaftaran</a></li>
                        <li><a href="#" class="hover:text-white">Kurikulum</a></li>
                        <li><a href="#" class="hover:text-white">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-3">Ikuti Kami</h3>
                    <div class="flex space-x-4 text-xl">
                        <a href="#" class="hover:text-white"><i class="ri-facebook-fill"></i></a>
                        <a href="#" class="hover:text-white"><i class="ri-instagram-line"></i></a>
                        <a href="#" class="hover:text-white"><i class="ri-youtube-line"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-center text-xs mt-8 text-gray-400">
                © 2025 SMA Taruna Nusantara. All rights reserved.
            </div>
        </footer>
        @yield('content')
    </body>

    </html>
