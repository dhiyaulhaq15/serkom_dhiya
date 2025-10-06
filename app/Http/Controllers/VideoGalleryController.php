<?php

namespace App\Http\Controllers;

use App\Models\VideoGallery;
use Illuminate\Http\Request;

class VideoGalleryController extends Controller
{
    //
    public function index()
    {
        $videos = VideoGallery::orderBy('created_at', 'desc')->get();
        return view('admin.videogallery.index', compact('videos'));
    }

    // public function index()
    // {
    //     $videos = Video::latest()->get();
    //     return view('admin.videos.index', compact('videos'));
    // }

    public function create()
    {
        return view('admin.videogallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'youtube_link' => 'required|url'
        ]);

        VideoGallery::create($request->only('youtube_link'));

        return redirect()->route('admin.videogallery.index')->with('success', 'Video berhasil ditambahkan.');
    }

    public function edit(VideoGallery $video)
    {
        return view('admin.videogallery.edit', compact('video'));
    }

    public function update(Request $request, VideoGallery $video)
    {
        $request->validate([
            'youtube_link' => 'required|url'
        ]);

        $video->update($request->only('youtube_link'));

        return redirect()->route('admin.videogallery.index')->with('success', 'Video berhasil diperbarui.');
    }

    public function destroy(VideoGallery $video)
    {
        $video->delete();
        return redirect()->route('admin.videogallery.index')->with('success', 'Video berhasil dihapus.');
    }
}
