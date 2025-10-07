<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EkstrakurikulerController extends Controller
{
    //
    public function index()
    {
        $eskuls = Ekstrakurikuler::all();
        return view('admin.ekstrakurikuler.index', compact('eskuls'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $filename = null;

        if ($request->hasFile('gambar')) {
            $originalName = $request->file('gambar')->getClientOriginalName();
            $timestampedName = time() . '-' . $originalName;

            $filename = $request->file('gambar')->storeAs('eskul', $timestampedName, 'public');
        }


        Ekstrakurikuler::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'gambar' => $filename,
        ]);

        return redirect()->route('admin.ekstrakurikuler.index')->with('success', 'Data ekstrakurikuler berhasil disimpan!');
    }

    public function create()
    {
        return view('admin.ekstrakurikuler.create');
    }

    public function edit(Ekstrakurikuler $eskul)
    {
        $eskul = Ekstrakurikuler::findOrFail($eskul);
        return view('admin.ekstrakurikuler.edit', compact('eskul'));
    }

    public function update(Request $request, Ekstrakurikuler $eskul)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $eskul = Ekstrakurikuler::findOrFail($eskul);

        $filename = $eskul->gambar; // default: gambar lama

        // if ($request->hasFile('gambar')) {
        //     $originalName = $request->file('gambar')->getClientOriginalName();
        //     $timestampedName = time() . '-' . $originalName;
        //     $filename = $request->file('gambar')->storeAs('eskul', $timestampedName, 'public');
        // }

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($eskul->gambar && Storage::disk('public')->exists($eskul->gambar)) {
                Storage::disk('public')->delete($eskul->gambar);
            }

            $originalName = $request->file('gambar')->getClientOriginalName();
            $timestampedName = time() . '-' . $originalName;
            $filename = $request->file('gambar')->storeAs('eskul', $timestampedName, 'public');
        }


        $eskul->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'gambar' => $filename,
        ]);

        return redirect()->route('admin.ekstrakurikuler.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy(Ekstrakurikuler $eskul)
    {
        $eskul = Ekstrakurikuler::findOrFail($eskul);

        if ($eskul->gambar && Storage::disk('public')->exists($eskul->gambar)) {
            Storage::disk('public')->delete($eskul->gambar);
        }

        $eskul->delete();

        return redirect()->route('admin.ekstrakurikuler.index')->with('success', 'Data berhasil dihapus!');
    }
}
