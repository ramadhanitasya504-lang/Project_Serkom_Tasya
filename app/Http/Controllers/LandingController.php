<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilSekolah;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Guru;

class LandingController extends Controller
{
    // ==========================================
    // HALAMAN UTAMA / BERANDA
    // ==========================================
    public function index()
    {
        return view('layouts.landing');
    }

    // ==========================================
    // HALAMAN PROFIL SEKOLAH PUBLIK
    // ==========================================
    public function profil()
    {
        $profil = ProfilSekolah::first();

        return view('landing.components.profil', compact('profil'));
    }

    // ==========================================
    // HALAMAN BERITA PUBLIK
    // ==========================================
    public function berita()
    {
        $berita = Berita::latest()->paginate(6);

        return view('landing.components.berita', compact('berita'));
    }

    // ==========================================
    // HALAMAN EKSTRAKURIKULER PUBLIK
    // ==========================================
    public function eskul()
    {
        return view('landing.components.eskul');
    }

    // ==========================================
    // HALAMAN DATA GURU PUBLIK
    // ==========================================
    public function guru()
    {
        // Mengambil seluruh data guru dari database
        $daftarGuru = Guru::all();

        // Menghitung total guru
        $totalGuru = Guru::count();

        return view(
            'landing.components.data-guru',
            compact(
                'daftarGuru',
                'totalGuru',
            )
        );
    }

    // ==========================================
    // HALAMAN GALERI PUBLIK
    // ==========================================
    public function galeri()
    {
        $galeri = Galeri::latest()->get();

        return view('landing.components.galeri', compact('galeri'));
    }
}