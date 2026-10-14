<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    // MENAMPILKAN SEMUA DATA GURU
    public function index()
    {
        $gurus = Guru::all();

        return view('admin.guru.index', compact('gurus'));
    }

    // MENAMPILKAN FORM TAMBAH
    public function create()
    {
        return view('admin.guru.create');
    }

    // MENYIMPAN DATA GURU
    public function store(Request $request)
    {
        $request->validate([
            'nama_guru' => 'required|max:40',
            'nip'       => 'nullable|max:15',
            'mapel'     => 'required|max:40',
            'foto'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $namaFoto = null;

        // Upload foto jika ada
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');

            $namaFoto = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('guru', $namaFoto, 'public');
        }

        Guru::create([
            'nama_guru' => $request->nama_guru,
            'nip'       => $request->nip,
            'mapel'     => $request->mapel,
            'foto'      => $namaFoto,
        ]);

        return redirect()
            ->route('admin.guru.index')
            ->with('success', 'Data guru berhasil ditambahkan.');
    }

    // MENAMPILKAN FORM EDIT
    public function edit(Guru $guru)
    {
        return view('admin.guru.edit', compact('guru'));
    }

    // UPDATE DATA GURU
    public function update(Request $request, Guru $guru)
    {
        $request->validate([
            'nama_guru' => 'required|max:40',
            'nip'       => 'nullable|max:15',
            'mapel'     => 'required|max:40',
            'foto'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $namaFoto = $guru->foto;

        // Jika upload foto baru
        if ($request->hasFile('foto')) {

            // Hapus foto lama
            if ($guru->foto) {
                Storage::disk('public')->delete('guru/' . $guru->foto);
            }

            $file = $request->file('foto');

            $namaFoto = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('guru', $namaFoto, 'public');
        }

        $guru->update([
            'nama_guru' => $request->nama_guru,
            'nip'       => $request->nip,
            'mapel'     => $request->mapel,
            'foto'      => $namaFoto,
        ]);

        return redirect()
            ->route('admin.guru.index')
            ->with('success', 'Data guru berhasil diubah.');
    }

    // HAPUS DATA GURU
    public function destroy(Guru $guru)
    {
        // Hapus foto guru
        if ($guru->foto) {
            Storage::disk('public')->delete('guru/' . $guru->foto);
        }

        $guru->delete();

        return redirect()
            ->route('admin.guru.index')
            ->with('success', 'Data guru berhasil dihapus.');
    }
}
