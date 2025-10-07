<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use App\Models\EventsNews;
use App\Models\Prestasi;
use App\Models\VideoGallery;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function page()
    {
        // $eskul = Ekstrakurikuler::all();
        $video_galleries = VideoGallery::latest()->get();
        $eskuls = Ekstrakurikuler::latest()->get();
        $prestasis = Prestasi::latest()->get();
        return view('public.pagesmatn', compact( 'video_galleries', 'eskuls', 'prestasis'));
    }

    public function sejarah()
    {
        return view('public.profil.sejarahsmatn');
    }

    public function visimisi()
    {
        return view('public.profil.visimisismatn');
    }

    public function lambang()
    {
        return view('public.profil.lambangsmatn');
    }

    public function penguruspamong()
    {
        return view('public.profil.penguruspamongsmatn');
    }

    public function eventnews()
    {
        $eventsnews = EventsNews::latest()->get();
        return view('public.event&newssmatn', compact('eventsnews'));
    }

    public function galerivideo()
    {
        $video_galleries = VideoGallery::latest()->get();
        return view('public.galerivideosmatn', compact('video_galleries'));
    }

    public function prestasis()
    {
        $prestasis = Prestasi::latest()->get();
        return view('public.prestasismatn', compact('prestasis'));
    }

    public function eskul()
    {
        $eskuls = Ekstrakurikuler::latest()->get();
        return view('public.eskulsmatn', compact('eskuls'));
    }

    public function organisasi()
    {
        return view('public.organisasismatn');
    }
}
