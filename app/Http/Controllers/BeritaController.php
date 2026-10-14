<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
class BeritaController extends Controller
{
    // HALAMAN BERITA UNTUK PENGUNJUNG
    public function index()
    {
        $beritas = Berita::latest('tanggal')->get();

        return view('admin.berita.index', compact('beritas'));
    }


    // HALAMAN TAMBAH BERITA UNTUK ADMIN
    public function create()
    {
        return view('admin.berita.create');
    }


    // SIMPAN BERITA
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:150',
            'isi' => 'required',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only([
            'judul',
            'isi',
            'tanggal'
        ]);

        if ($request->hasFile('gambar')) {

            $namaGambar = time() . '.' . $request->gambar->extension();

            $request->gambar->move(
                public_path('upload/berita'),
                $namaGambar
            );

            $data['gambar'] = $namaGambar;
        }

        Berita::create($data);

        return redirect()
            ->route('admin.berita.index')
            ->with('success', 'Berita berhasil ditambahkan!');
    }


    // EDIT BERITA
    public function edit(Berita $berita)
    {
        return view(
            'admin.berita.edit',
            compact('berita')
        );
    }


    // UPDATE BERITA
    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'judul' => 'required|max:150',
            'isi' => 'required',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only([
            'judul',
            'isi',
            'tanggal'
        ]);

        if ($request->hasFile('gambar')) {

            $namaGambar = time() . '.' . $request->gambar->extension();

            $request->gambar->move(
                public_path('upload/berita'),
                $namaGambar
            );

            $data['gambar'] = $namaGambar;
        }

        $berita->update($data);

        return redirect()
            ->route('berita.index')
            ->with('success', 'Berita berhasil diperbarui!');
    }


    // HAPUS BERITA
    public function destroy(Berita $berita)
    {
        $berita->delete();

        return redirect()
            ->route('berita.index')
            ->with('success', 'Berita berhasil dihapus!');
    }
}