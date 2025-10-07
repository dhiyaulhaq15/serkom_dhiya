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

    <section class="py-16 bg-gray-50">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-extrabold text-gray-800 mb-4">Visi</h2>
            <p class="text-lg text-gray-700 leading-relaxed">
                Sekolah yang membentuk kader pemimpin bangsa berkualitas dan berkarakter yang berwawasan kebangsaan,
                kejuangan, kebudayaan, dengan bercirikan kenusantaraan serta memiliki daya saing nasional maupun
                internasional.
            </p>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-5xl mx-auto px-6">
            <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-8">Misi</h2>
            <ul class="space-y-6 text-gray-700 text-lg leading-relaxed list-decimal list-inside">
                <li>Menyiapkan kader pemimpin bangsa yang beriman dan bertakwa kepada Tuhan YME.</li>
                <li>Menyiapkan kader pemimpin bangsa yang berkualitas, berkarakter, dan berbudaya.</li>
                <li>Menyiapkan lulusan yang memiliki kesetiaan terhadap bangsa dan Negara Kesatuan Republik
                    Indonesia yang berdasarkan Pancasila dan UUD 1945.</li>
                <li>Menyiapkan lulusan yang memiliki potensi kepemimpinan yang berwawasan kebangsaan, kejuangan,
                    kebudayaan, dan bercirikan kenusantaraan.</li>
                <li>Menyiapkan lulusan yang memiliki keunggulan komparatif, kompetitif, dan distingtif dalam aspek
                    akademik, kepribadian, kesamaptaan jasmani, serta kemampuan IPTEK sehingga mempunyai daya saing
                    tinggi di tingkat nasional dan internasional.</li>
            </ul>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-extrabold text-gray-800 mb-4">Jargon</h2>
            <p class="text-xl text-blue-700 font-semibold tracking-wide">
                “Achievement OK, Character YES, Prestasiku Untuk Bangsaku”
            </p>
        </div>
    </section>
