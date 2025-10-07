<?php

namespace App\Http\Controllers;

use App\Models\EventsNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Storage;

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
            'content' => $request->input('content'),
            'gambar'  => $filename,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('admin.eventnews.index')->with('success', 'Berita berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $eventnews = EventsNews::findOrFail($id);
        return view('admin.eventnews.edit', compact('eventnews'));
    }



    public function update(Request $request, EventsNews $eventsnews)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'gambar' => 'nullable|image|max:2048',
        ]);

        $data = [
            'title' => $request->title,
            'content' => $request->input('content'),
        ];

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($eventsnews->gambar && Storage::disk('public')->exists($eventsnews->gambar)) {
                Storage::disk('public')->delete($eventsnews->gambar);
            }

            // Simpan gambar baru
            $path = $request->file('gambar')->store('eventnews', 'public');
            $data['gambar'] = $path;
        }

        $eventsnews->update($data);

        return redirect()->route('admin.eventnews.index')->with('success', 'EventNews berhasil diperbarui.');
    }

    public function destroy(EventsNews $eventsnews)
    {
        if ($eventsnews->gambar && Storage::disk('public')->exists($eventsnews->gambar)) {
            Storage::disk('public')->delete($eventsnews->gambar);
        }

        $eventsnews->delete();

        return redirect()->route('admin.eventnews.index')->with('success', 'EventNews berhasil dihapus.');
    }
}
