<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;

class EskulController extends Controller
{
    /**
     * Menampilkan daftar ekstrakurikuler
     */
    public function index()
    {
        $ekstrakurikuler = Ekstrakurikuler::latest()->get();

        return view('admin.ekstrakulikuler.index', compact('ekstrakurikuler'));
    }

    /**
     * Form tambah ekstrakurikuler
     */
    public function create()
    {
        return view('admin.ekstrakulikuler.create');
    }

    /**
     * Menyimpan data baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'pembina' => 'nullable|string|max:255',
            'hari' => 'nullable|string|max:255',
            'jam' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        Ekstrakurikuler::create([
            'nama' => $request->nama,
            'pembina' => $request->pembina,
            'hari' => $request->hari,
            'jam' => $request->jam,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()
            ->route('eskul.index')
            ->with('success', 'Data ekstrakurikuler berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail
     */
    public function show($id)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);

        return view('ekstrakurikuler.show', compact('ekstrakurikuler'));
    }

    /**
     * Form edit
     */
    public function edit($id)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);

        return view('ekstrakurikuler.edit', compact('ekstrakurikuler'));
    }

    /**
     * Update data
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'pembina' => 'nullable|string|max:255',
            'hari' => 'nullable|string|max:255',
            'jam' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);

        $ekstrakurikuler->update([
            'nama' => $request->nama,
            'pembina' => $request->pembina,
            'hari' => $request->hari,
            'jam' => $request->jam,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()
            ->route('eskul.index')
            ->with('success', 'Data ekstrakurikuler berhasil diperbarui.');
    }

    /**
     * Hapus data
     */
    public function destroy($id)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);

        $ekstrakurikuler->delete();

        return redirect()
            ->route('eskul.index')
            ->with('success', 'Data ekstrakurikuler berhasil dihapus.');
    }
}