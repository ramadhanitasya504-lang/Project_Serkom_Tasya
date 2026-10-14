<?php

namespace App\Http\Controllers;

use App\Models\ProfilSekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilSekolahController extends Controller
{
    public function index()
    {
        $profil = ProfilSekolah::first();

        return view('admin.profil_sekolah.index', compact('profil'));
    }

    public function edit()
    {
        $profil = ProfilSekolah::first();

        // Kalau belum ada data, buat data kosong
        if (!$profil) {
            $profil = new ProfilSekolah();
        }

        return view('admin.profil_sekolah.edit', compact('profil'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama_sekolah' => 'required|max:40',
            'kepala_sekolah' => 'required|max:40',
            'npsn' => 'nullable|max:10',
            'alamat' => 'required',
            'kontak' => 'nullable|max:15',
            'visi_misi' => 'nullable',
            'tahun_berdiri' => 'nullable|integer',
            'deskripsi' => 'nullable',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $profil = ProfilSekolah::first();

        // Kalau belum ada data profil, buat baru
        if (!$profil) {
            $profil = new ProfilSekolah();
        }

        $profil->nama_sekolah = $request->nama_sekolah;
        $profil->kepala_sekolah = $request->kepala_sekolah;
        $profil->npsn = $request->npsn;
        $profil->alamat = $request->alamat;
        $profil->kontak = $request->kontak;
        $profil->visi_misi = $request->visi_misi;
        $profil->tahun_berdiri = $request->tahun_berdiri;
        $profil->deskripsi = $request->deskripsi;

        // Upload FOTO
        if ($request->hasFile('foto')) {

            if ($profil->foto) {
                Storage::disk('public')->delete($profil->foto);
            }

            $profil->foto = $request->file('foto')
                ->store('profil_sekolah', 'public');
        }

        // Upload LOGO
        if ($request->hasFile('logo')) {

            if ($profil->logo) {
                Storage::disk('public')->delete($profil->logo);
            }

            $profil->logo = $request->file('logo')
                ->store('profil_sekolah', 'public');
        }

        $profil->save();

        return redirect()
            ->route('profil.index')
            ->with('success', 'Profil sekolah berhasil diperbarui!');
    }
}