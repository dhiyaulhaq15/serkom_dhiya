<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    //
    public function index()
    {
        $prestasis = Prestasi::latest()->get();
        return view('admin.prestasi.index', compact('prestasis'));
    }

    // Form upload
    public function create()
    {
        return view('admin.prestasi.create');
    }

    // Simpan gambar
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
        ]);

        $path = $request->file('image')->store('prestasi', 'public');

        Prestasi::create(['image' => $path]);

        return redirect()->route('admin.prestasi.index')->with('success', 'Prestasi berhasil ditambahkan.');
    }

    // Form edit
    public function edit(Prestasi $prestasi)
    {
        return view('admin.prestasi.edit', compact('prestasi'));
    }

    // Update gambar
    public function update(Request $request, Prestasi $prestasi)
    {
        $request->validate([
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($prestasi->image);
            $path = $request->file('image')->store('prestasi', 'public');
            $prestasi->update(['image' => $path]);
        }

        return redirect()->route('admin.prestasi.index')->with('success', 'Prestasi berhasil diperbarui.');
    }

    // Hapus gambar
    // public function destroy(Prestasi $prestasi)
    // {
    //     $prestasi = Prestasi::findOrFail($id);
    //     // Log::info('Hapus dipanggil untuk ID: ' . $prestasi->id);
    //     if ($prestasi->image) {
    //         Storage::disk('public')->delete($prestasi->image);
    //     }
    //     $prestasi->delete();


    //     return redirect()->route('admin.prestasi.index')->with('success', 'Prestasi berhasil dihapus.');
    // }

    public function destroy(Prestasi $prestasi)
    {
        if ($prestasi->image) {
            Storage::disk('public')->delete($prestasi->image);
        }

        $prestasi->delete();

        return redirect()->route('admin.prestasi.index')->with('success', 'Prestasi berhasil dihapus.');
    }
}
