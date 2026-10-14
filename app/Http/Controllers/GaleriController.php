<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Menampilkan semua data galeri
     */
    public function index()
    {
        $galeri = Galeri::orderBy('tanggal', 'desc')->get();

        return view('admin.galeri.index', compact('galeri'));
    }

    /**
     * Menampilkan form tambah galeri
     */
    public function create()
    {
        return view('admin.galeri.create');
    }

    /**
     * Menyimpan data galeri
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:100',
            'kategori' => 'required|max:50',
            'foto' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'tanggal' => 'required|date',
        ]);

        $namaFoto = $request->file('foto')->store('galeri', 'public');

        Galeri::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'foto' => $namaFoto,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()
        ->route('admin.galeri.index')
        ->with('success', 'Foto galeri berhasil ditambahkan!');
    }

    /**
     * Menampilkan form edit
     */
    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);

        return view('admin.galeri.edit', compact('galeri'));
    }

    /**
     * Mengupdate data galeri
     */
    public function update(Request $request, $id)
    {
        $galeri = Galeri::findOrFail($id);

        $request->validate([
            'judul' => 'required|max:100',
            'kategori' => 'required|max:50',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'tanggal' => 'required|date',
        ]);

        $data = [
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'tanggal' => $request->tanggal,
        ];

        if ($request->hasFile('foto')) {

            if ($galeri->foto) {
                Storage::disk('public')->delete($galeri->foto);
            }

            $data['foto'] = $request->file('foto')
                ->store('galeri', 'public');
        }

        $galeri->update($data);

        return redirect()
    ->route('admin.galeri.index')
    ->with('success', 'Foto galeri berhasil diperbarui!');
    }

    /**
     * Menghapus data galeri
     */
    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);

        if ($galeri->foto) {
            Storage::disk('public')->delete($galeri->foto);
        }

        $galeri->delete();

        return redirect()
        ->route('admin.galeri.index')
        ->with('success', 'Foto galeri berhasil dihapus!');
    }
}