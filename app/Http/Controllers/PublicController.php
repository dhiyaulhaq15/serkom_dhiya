<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use App\Models\VideoGallery;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function page()
    {
        $eskul = Ekstrakurikuler::all();
        $video_galleries = VideoGallery::latest()->get();
        $ekstrakurikulers = Ekstrakurikuler::latest()->get();
        return view('public.pagesmatn', compact('eskul', 'video_galleries', 'ekstrakurikulers'));
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
        return view('public.event&newssmatn');
    }
}
