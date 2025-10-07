<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    //
    // Tampilkan semua data guru
    public function index()
    {
        $guru = Guru::all();
        return view('admin.guru.index', compact('guru'));
    }

    // Form tambah guru
    public function create()
    {
        return view('admin.guru.create');
    }

    // Simpan data guru baru
    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|digits:8|unique:guru,nip',
            'nama' => 'required',
            'mapel' => 'required',
            'alamat' => 'nullable',
            'no_hp' => 'nullable'
        ], [
            'nip.unique' => 'NIP sudah terdaftar!',
            'nip.required' => 'NIP wajib diisi!',
            'nama.required' => 'Nama wajib diisi!',
            'mapel.required' => 'Mata pelajaran wajib diisi!',
        ]);

        Guru::create($request->all());
        return redirect()->route('guru.index')->with('success', 'Data guru berhasil ditambahkan!');
    }

    // Form edit
    public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        return view('admin.guru.edit', compact('guru'));
    }

    // Update data guru
    public function update(Request $request, $id)
    {
        $guru = Guru::findOrFail($id);

        $request->validate([
            'nip' => 'required|unique:guru,nip,' . $guru->id,
            'nama' => 'required',
            'mapel' => 'required'
        ], [
            'nip.unique' => 'NIP sudah digunakan oleh guru lain!',
        ]);

        $guru->update($request->all());
        return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil diperbarui!');
    }

    // Hapus guru
    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);
        $guru->delete();
        return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil dihapus!');
    }
}
