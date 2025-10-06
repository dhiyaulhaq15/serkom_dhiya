<?php

namespace App\Http\Controllers;

use App\Models\EventsNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventNewsController extends Controller
{
    //
    public function index()
    {
        $eventsnews = EventsNews::with('user')->latest()->get();
        return view('admin.eventnews.index', compact('eventsnews'));
    }

    public function create()
    {
        return view('admin.eventnews.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
            'gambar'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $filename = null;

        if ($request->hasFile('gambar')) {
            $originalName = $request->file('gambar')->getClientOriginalName();
            $timestampedName = time() . '-' . $originalName;
            $filename = $request->file('gambar')->storeAs('eventnews', $timestampedName, 'public');
        }

        EventsNews::create([
            'title'   => $request->title,
            'content' => $request->content,
            'gambar'  => $filename,
            'user_id' => Auth()->id(),
        ]);

        return redirect()->route('admin.eventnews.index')->with('success', 'Berita berhasil ditambahkan!');
    }
}
