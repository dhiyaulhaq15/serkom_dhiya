@extends('public.layout')
@section('content')
    <section class="bg-gray-50 py-16 mt-6">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <h1 class="text-3xl md:text-5xl font-extrabold text-gray-800">Galeri Video</h1>
            </div>
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
                                src="https://www.youtube.com/embed/{{ $videoId }}?rel=0&showinfo=0" title="Galeri Video"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        </div>
    </section>
