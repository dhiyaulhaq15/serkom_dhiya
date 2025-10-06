<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="flex bg-gray-100 p-2 min-h-screen">
    <aside class="w-64 bg-white shadow-md rounded-2xl m-4 flex flex-col">
        <div class="flex items-center p-6">
            <img src="{{ asset('images/LOGO-SMA-TARUNA-NUSANTARA-1.png') }}" alt="LOGO SMA TN" class="w-10 h-10 mr-3">
            <div class="flex flex-col">
                <h6 class="text-xs font-bold text-gray-800">SMA Taruna Nusantara</h6>
                <span class="text-xs text-gray-500">Jawa Tengah - Magelang</span>
            </div>
        </div>
        <hr class="border-t border-gray-300 mx-6">
        <nav class="mt-4">
            <a href="{{ route('admin.dashboard') }}" class="block py-2.5 px-6 mx-3 rounded-xl hover:bg-blue-500 hover:text-white transition"><i class="ri-dashboard-line mr-3"></i>Dashboard</a>
            <a href="{{ route('admin.users.index') }}" class="block py-2.5 px-6 mx-3 rounded-xl hover:bg-blue-500 hover:text-white transition"><i class="ri-user-line mr-3"></i>Users</a>
            <a href="#" class="block py-2.5 px-6 mx-3 rounded-xl hover:bg-blue-500 hover:text-white transition"><i class="ri-presentation-line mr-3"></i>Guru</a>
            <a href="#" class="block py-2.5 px-6 mx-3 rounded-xl hover:bg-blue-500 hover:text-white transition"><i class="ri-graduation-cap-line mr-3"></i>Siswa</a>
            <a href="{{ route('admin.eventnews.index') }}" class="block py-2.5 px-6 mx-3 rounded-xl hover:bg-blue-500 hover:text-white transition"><i class="ri-news-line mr-3"></i>News</a>
            <a href="{{ route('admin.videogallery.index') }}" class="block py-2.5 px-6 mx-3 rounded-xl hover:bg-blue-500 hover:text-white transition"><i class="ri-video-line mr-3"></i>Video Gallery</a>
            <a href="{{ route('admin.ekstrakurikuler.index') }}" class="block py-2.5 px-6 mx-3 rounded-xl hover:bg-blue-500 hover:text-white transition"><i class="ri-team-line mr-3"></i>Ekstrakurikuler</a>
        </nav>
        <div class="relative flex flex-col mt-auto mb-4 mx-3">
            <button id="profileBtn" class="flex items-center justify-between bg-white p-4 rounded-xl shadow-md border w-full">
                <img src="{{ asset('images/Prabowo_Subianto_2024_official_portrait.jpg.webp') }}" alt="Avatar" class="w-10 h-10 rounded-full mr-3 object-cover flex-shrink-0">
                <div class="flex-1 text-left">
                    <h6 class="text-gray-800 font-bold text-md">Prabowo</h6>
                    <p class="text-gray-500 text-xs">prabowo@gmail.com</p>
                </div>
                <i class="ri-arrow-down-s-line ml-2"></i>
            </button>

            <div id="profileDropdown" class="hidden absolute bottom-full mb-2 left-0 w-full bg-white rounded-xl shadow-md border z-10">
                <a href="#" class="block py-2.5 px-6 rounded-t-xl hover:bg-red-500 hover:text-white transition"><i class="ri-refresh-line mr-2"></i>Clear Cache</a>
                <a href="{{ route('logout') }}" class="block py-2.5 px-6 rounded-b-xl hover:bg-gray-800 hover:text-white transition"><i class="ri-logout-circle-r-line mr-2"></i>Logout</a>
            </div>
        </div>

        <script>
            const profileBtn = document.getElementById('profileBtn');
            const profileDropdown = document.getElementById('profileDropdown');

            profileBtn.addEventListener('click', () => {
                profileDropdown.classList.toggle('hidden');
            });

            document.addEventListener('click', (e) => {
                if (!profileBtn.contains(e.target) && !profileDropdown.contains(e.target)) {
                    profileDropdown.classList.add('hidden');
                }
            });
        </script>

    </aside>
    @yield('content')
    {{-- <main class="flex-1 p-6 overflow-auto">
        <h2 class="text-2xl font-semibold mb-4">@yield('title')</h2>
        <div class="bg-white rounded shadow p-4">
        </div>
    </main> --}}
</body>
</html>
