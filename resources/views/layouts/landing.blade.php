<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SMK Nusantara</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        /* GLOBAL */
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f7f5f2;
            color: #333;
            overflow-x: hidden;
        }

        :root {
            --utama: #8B7A6D;
            --gelap: #62554b;
            --muda: #eee7e1;
            --putih: #ffffff;
        }

        section {
            padding: 90px 0;
        }

        .judul-section {
            color: var(--utama);
            font-weight: 800;
            font-size: 36px;
        }

        .garis {
            width: 70px;
            height: 4px;
            background: var(--utama);
            margin: 15px auto 45px;
            border-radius: 10px;
        }
                .nav-link:hover {
            color: #eadfd5 !important;
            transform: translateY(-2px);
        }

        /* BUTTON LOGIN */
        .btn-login {
            display: inline-block;
            background: white;
            color: var(--utama);
            border: 2px solid white;
            border-radius: 25px;
            padding: 8px 22px;
            font-weight: bold;
            text-decoration: none;
            transition: .3s;
        }

        .btn-login:hover {
            background: var(--gelap);
            color: white;
            border-color: var(--gelap);
            transform: translateY(-2px);
        }

        /* NAVBAR */
        .navbar {
            background: rgba(139, 122, 109, 0.97);
            backdrop-filter: blur(10px);
            padding: 15px 0;
            transition: .3s;
        }

        .navbar-brand {
            color: white !important;
            font-weight: 800;
            font-size: 23px;
            letter-spacing: .5px;
        }

        .navbar-brand i {
            margin-right: 7px;
        }

        .nav-link {
            color: white !important;
            font-weight: 500;
            margin-left: 12px;
            transition: .3s;
        }

        .nav-link:hover {
            color: #eadfd5 !important;
            transform: translateY(-2px);
        }

        /* HERO: SATU FOTO, TANPA SLIDER */
        .hero {
            position: relative;
            height: 680px;
            overflow: hidden;
            background-image: url("{{ asset('assets/img/skl-1.jpg') }}");
            background-size: cover;
            background-position: center;
            padding: 0;
        }

        .hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(
                90deg,
                rgba(20, 15, 12, .78),
                rgba(20, 15, 12, .35),
                rgba(20, 15, 12, .15)
            );
        }

        .hero-content {
            position: relative;
            z-index: 2;
            height: 100%;
            display: flex;
            align-items: center;
            color: white;
        }

        .hero-text {
            max-width: 720px;
        }

        .hero-badge {
            display: inline-block;
            background: rgba(255,255,255,.15);
            border: 1px solid rgba(255,255,255,.4);
            padding: 9px 18px;
            border-radius: 30px;
            margin-bottom: 20px;
            backdrop-filter: blur(5px);
        }

        .hero h1 {
            font-size: 58px;
            font-weight: 900;
            line-height: 1.1;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 19px;
            line-height: 1.7;
            color: #f4f4f4;
        }

        .btn-hero {
            background: white;
            color: var(--utama);
            border: none;
            padding: 13px 25px;
            border-radius: 30px;
            font-weight: bold;
            margin-top: 15px;
            transition: .3s;
        }

        .btn-hero:hover {
            transform: translateY(-3px);
            background: var(--muda);
            color: var(--gelap);
        }

        .btn-hero-outline {
            border: 1px solid white;
            color: white;
            padding: 12px 25px;
            border-radius: 30px;
            font-weight: bold;
            margin-top: 15px;
            margin-left: 8px;
            transition: .3s;
        }

        .btn-hero-outline:hover {
            background: white;
            color: var(--utama);
        }

        /* INFO CARDS */
        .info-area {
            margin-top: -55px;
            position: relative;
            z-index: 10;
        }

        .info-card {
            background: white;
            border-radius: 18px;
            padding: 25px;
            box-shadow: 0 12px 35px rgba(0,0,0,.10);
            transition: .3s;
            height: 100%;
        }

        .info-card:hover {
            transform: translateY(-8px);
        }

        .info-icon {
            width: 55px;
            height: 55px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--muda);
            color: var(--utama);
            border-radius: 15px;
            font-size: 25px;
            margin-bottom: 15px;
        }

        .info-card h5 {
            font-weight: bold;
        }

        .info-card p {
            color: #777;
            margin-bottom: 0;
        }

        /* BERITA */
        .berita-section {
            background: #fff;
        }

        .berita-wrapper {
            position: relative;
        }

        .berita-track {
            display: flex;
            gap: 25px;
            overflow-x: auto;
            scroll-behavior: smooth;
            scrollbar-width: none;
            padding: 10px 3px 25px;
        }

        .berita-track::-webkit-scrollbar,
        .galeri-track::-webkit-scrollbar {
            display: none;
        }

        .berita-card {
            min-width: 350px;
            background: white;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0,0,0,.08);
            transition: .3s;
        }

        .berita-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 15px 35px rgba(0,0,0,.13);
        }

        .berita-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }

        .berita-body {
            padding: 23px;
        }

        .tanggal {
            font-size: 13px;
            color: #999;
        }

        .berita-body h5 {
            font-weight: bold;
            margin-top: 10px;
        }

        .berita-body p {
            color: #777;
        }

        .btn-more {
            color: white;
            background: var(--utama);
            border: none;
            border-radius: 25px;
            padding: 9px 18px;
        }

        .btn-more:hover {
            background: var(--gelap);
            color: white;
        }

        /* TOMBOL SLIDER BERITA DAN GALERI */
        .slider-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 10px;
        }

        .slider-btn {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            border: none;
            background: var(--utama);
            color: white;
            transition: .3s;
        }

        .slider-btn:hover {
            background: var(--gelap);
            transform: scale(1.05);
        }

        /* GALERI */
        .galeri-section {
            background: #f1ece7;
        }

        .galeri-track {
            display: flex;
            gap: 20px;
            overflow-x: auto;
            scroll-behavior: smooth;
            scrollbar-width: none;
            padding: 10px 3px 25px;
        }

        .galeri-item {
            min-width: 320px;
            height: 240px;
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            flex-shrink: 0;
        }

        .galeri-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: .5s;
        }

        .galeri-item:hover img {
            transform: scale(1.08);
        }

        .galeri-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(transparent, rgba(0,0,0,.7));
            display: flex;
            align-items: flex-end;
            padding: 20px;
            color: white;
            font-weight: bold;
        }

        /* PROFIL */
        .profil-box {
            background: white;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0,0,0,.08);
        }

        .profil-img {
            width: 100%;
            height: 100%;
            min-height: 400px;
            object-fit: cover;
        }

        .profil-content {
            padding: 50px;
        }

        .profil-content h2 {
            color: var(--utama);
            font-weight: 800;
        }

        .stat-box {
            margin-top: 25px;
            padding: 18px;
            background: var(--muda);
            border-radius: 15px;
        }

        .stat-box h3 {
            color: var(--utama);
            font-weight: 800;
            margin: 0;
        }

        /* EKSTRAKURIKULER */
        .eskul-card {
            background: white;
            padding: 30px 20px;
            border-radius: 20px;
            text-align: center;
            height: 100%;
            box-shadow: 0 8px 25px rgba(0,0,0,.07);
            transition: .3s;
        }

        .eskul-card:hover {
            transform: translateY(-8px);
        }

        .eskul-icon {
            width: 75px;
            height: 75px;
            border-radius: 50%;
            background: var(--muda);
            color: var(--utama);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 32px;
            margin: auto;
        }

        .eskul-card h5 {
            margin-top: 18px;
            font-weight: bold;
        }

        .eskul-card p {
            color: #777;
        }

        /* GURU */
        .guru-section {
            background: white;
        }

        .guru-card {
            background: #fafafa;
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 7px 25px rgba(0,0,0,.06);
            transition: .3s;
        }

        .guru-card:hover {
            transform: translateY(-7px);
        }

        .guru-img {
            width: 140px;
            height: 140px;
            object-fit: cover;
            border-radius: 50%;
            border: 6px solid var(--muda);
        }

        .guru-card h5 {
            font-weight: bold;
            margin-top: 20px;
        }

        .guru-card .jabatan {
            color: var(--utama);
            font-weight: bold;
        }

        .guru-card p {
            color: #777;
        }

        /* SISWA */
        .siswa-box {
            background:
                linear-gradient(
                    120deg,
                    rgba(98,85,75,.95),
                    rgba(139,122,109,.90)
                ),
                url("https://images.unsplash.com/photo-1529390079861-591de354faf5?auto=format&fit=crop&w=1600&q=80");
            background-size: cover;
            background-position: center;
            border-radius: 25px;
            color: white;
            padding: 60px;
            overflow: hidden;
        }

        .siswa-box h2 {
            font-size: 38px;
            font-weight: 800;
        }

        .siswa-icon {
            font-size: 130px;
            opacity: .8;
        }

        /* KONTAK */
        .contact-card {
            background: white;
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            height: 100%;
            box-shadow: 0 7px 25px rgba(0,0,0,.06);
        }

        .contact-icon {
            width: 65px;
            height: 65px;
            background: var(--muda);
            color: var(--utama);
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            font-size: 27px;
            margin: auto;
        }

        /* FOOTER */
        footer {
            background: #171412;
            color: white;
            padding: 60px 0 25px;
        }

        footer h4 {
            font-weight: 800;
        }

        footer a {
            color: #aaa;
            text-decoration: none;
            transition: .3s;
        }

        footer a:hover {
            color: white;
        }

        /* RESPONSIVE */
        @media(max-width: 768px) {
            .hero {
                height: 600px;
                background-position: center;
            }

            .hero h1 {
                font-size: 40px;
            }

            .hero p {
                font-size: 16px;
            }

            .info-area {
                margin-top: 30px;
            }

            .berita-card {
                min-width: 290px;
            }

            .galeri-item {
                min-width: 280px;
            }

            .profil-content {
                padding: 30px;
            }

            .siswa-box {
                padding: 35px 25px;
            }

            .siswa-icon {
                font-size: 80px;
            }

            .judul-section {
                font-size: 30px;
            }

            .btn-hero-outline {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>


<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">

        <a class="navbar-brand" href="{{ route('home') }}">
            <i class="bi bi-mortarboard-fill"></i>
            SMK NUSANTARA
        </a>

        <button class="navbar-toggler bg-light" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarMenu"
            aria-controls="navbarMenu" aria-expanded="false"
            aria-label="Buka navigasi">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('berita.public') }}">
                        Berita
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('eskul.public') }}">
                        Ekstrakurikuler
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('galeri.public') }}">
                        Galeri
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profil.sekolah') }}">
                        Profil
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('data-guru') }}">
                        Guru
                    </a>
                </li>

                <!-- MENU INPUT NILAI -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('input.index') }}">
                        <i class="bi bi-calculator me-1"></i>
                        Input Nilai
                    </a>
                </li>

                <!-- BUTTON LOGIN -->
                <li class="nav-item ms-lg-3 mt-3 mt-lg-0 mb-3 mb-lg-0">
                    <a href="{{ route('login') }}" class="btn-login">
                        <i class="bi bi-box-arrow-in-right me-1"></i>
                        Login
                    </a>
                </li>

            </ul>
        </div>

    </div>
</nav>


<!-- HERO: SATU FOTO SAJA -->
<section class="hero" id="beranda">
    <div class="container hero-content">
        <div class="hero-text">

            <div class="hero-badge">
                <i class="bi bi-mortarboard-fill"></i>
                Website Resmi Sekolah
            </div>

            <h1>Selamat Datang<br>di SMK Nusantara</h1>

            <p>
                Membangun generasi yang berprestasi,
                berkarakter, kreatif, dan siap menghadapi
                dunia kerja serta masa depan.
            </p>

            <a href="{{ route('profil.index') }}" class="btn btn-hero">
                <i class="bi bi-building"></i>
                Tentang Sekolah
            </a>

            <a href="{{ route('berita.public') }}" class="btn btn-hero-outline">
                Lihat Berita
                <i class="bi bi-arrow-right"></i>
            </a>

        </div>
    </div>
</section>

<!-- INFO CARDS -->
<div class="container info-area">
    <div class="row g-4">

        <div class="col-md-3 col-6">
            <div class="info-card">
                <div class="info-icon"><i class="bi bi-people-fill"></i></div>
                <h5>500+</h5>
                <p>Siswa Aktif</p>
            </div>
        </div>

        <div class="col-md-3 col-6">
            <div class="info-card">
                <div class="info-icon"><i class="bi bi-person-workspace"></i></div>
                <h5>40+</h5>
                <p>Guru &amp; Staff</p>
            </div>
        </div>

        <div class="col-md-3 col-6">
            <div class="info-card">
                <div class="info-icon"><i class="bi bi-trophy-fill"></i></div>
                <h5>25+</h5>
                <p>Prestasi</p>
            </div>
        </div>

        <div class="col-md-3 col-6">
            <div class="info-card">
                <div class="info-icon"><i class="bi bi-building-fill"></i></div>
                <h5>10+</h5>
                <p>Tahun Berdiri</p>
            </div>
        </div>

    </div>
</div>

<!-- BERITA -->
<section class="berita-section" id="berita">
    <div class="container">

        <div class="text-center">
            <h2 class="judul-section">Berita Terbaru</h2>
            <p class="text-muted">Informasi dan kegiatan terbaru sekolah</p>
            <div class="garis"></div>
        </div>

        <div class="berita-wrapper">
            <div class="berita-track" id="beritaTrack">

                <div class="berita-card">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=900&q=80" alt="Kegiatan belajar mengajar">
                    <div class="berita-body">
                        <span class="tanggal"><i class="bi bi-calendar3"></i> 01 Oktober 2026</span>
                        <h5>Kegiatan Belajar Mengajar</h5>
                        <p>Kegiatan pembelajaran siswa berlangsung dengan lancar, aktif dan menyenangkan.</p>
                        <a href="{{ route('berita.public') }}" class="btn btn-more">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="berita-card">
                    <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?auto=format&fit=crop&w=900&q=80" alt="Prestasi siswa">
                    <div class="berita-body">
                        <span class="tanggal"><i class="bi bi-calendar3"></i> 28 September 2026</span>
                        <h5>Prestasi Siswa</h5>
                        <p>Siswa berhasil meraih prestasi dalam perlombaan dan membawa nama baik sekolah.</p>
                        <a href="{{ route('berita.public') }}" class="btn btn-more">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="berita-card">
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=900&q=80" alt="Kegiatan sekolah">
                    <div class="berita-body">
                        <span class="tanggal"><i class="bi bi-calendar3"></i> 25 September 2026</span>
                        <h5>Kegiatan Sekolah</h5>
                        <p>Berbagai kegiatan sekolah untuk meningkatkan kreativitas dan pengalaman siswa.</p>
                        <a href="{{ route('berita.public') }}" class="btn btn-more">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="berita-card">
                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=900&q=80" alt="Seminar pendidikan">
                    <div class="berita-body">
                        <span class="tanggal"><i class="bi bi-calendar3"></i> 20 September 2026</span>
                        <h5>Seminar Pendidikan</h5>
                        <p>Siswa mengikuti kegiatan seminar untuk menambah wawasan dan pengalaman.</p>
                        <a href="{{ route('berita.public') }}" class="btn btn-more">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

            </div>

            <div class="slider-buttons">
                <button type="button" class="slider-btn" id="beritaPrev" aria-label="Berita sebelumnya">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button type="button" class="slider-btn" id="beritaNext" aria-label="Berita berikutnya">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </div>

    </div>
</section>

<!-- GALERI -->
<section class="galeri-section" id="galeri">
    <div class="container">

        <div class="text-center">
            <h2 class="judul-section">Galeri Sekolah</h2>
            <p class="text-muted">Dokumentasi kegiatan sekolah</p>
            <div class="garis"></div>
        </div>

        <div class="galeri-track" id="galeriTrack">

            <div class="galeri-item">
                <img src="https://images.unsplash.com/photo-1529390079861-591de354faf5?auto=format&fit=crop&w=900&q=80" alt="Kegiatan siswa">
                <div class="galeri-overlay">Kegiatan Siswa</div>
            </div>

            <div class="galeri-item">
                <img src="https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?auto=format&fit=crop&w=900&q=80" alt="Kegiatan sekolah">
                <div class="galeri-overlay">Kegiatan Sekolah</div>
            </div>

            <div class="galeri-item">
                <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=900&q=80" alt="Pembelajaran">
                <div class="galeri-overlay">Pembelajaran</div>
            </div>

            <div class="galeri-item">
                <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=900&q=80" alt="Suasana kelas">
                <div class="galeri-overlay">Suasana Kelas</div>
            </div>

            <div class="galeri-item">
                <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?auto=format&fit=crop&w=900&q=80" alt="Aktivitas siswa">
                <div class="galeri-overlay">Aktivitas Siswa</div>
            </div>

            <div class="galeri-item">
                <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=900&q=80" alt="Belajar bersama">
                <div class="galeri-overlay">Belajar Bersama</div>
            </div>

        </div>

        <div class="slider-buttons">
            <button type="button" class="slider-btn" id="galeriPrev" aria-label="Galeri sebelumnya">
                <i class="bi bi-chevron-left"></i>
            </button>
            <button type="button" class="slider-btn" id="galeriNext" aria-label="Galeri berikutnya">
                <i class="bi bi-chevron-right"></i>
            </button>
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('galeri.public') }}" class="btn btn-more">
                Lihat Semua Galeri <i class="bi bi-images"></i>
            </a>
        </div>

    </div>
</section>

<!-- PROFIL SEKOLAH -->
<section id="profil">
    <div class="container">
        <div class="profil-box">
            <div class="row g-0 align-items-stretch">

                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=1200&q=85" class="profil-img" alt="Gedung sekolah">
                </div>

                <div class="col-lg-6">
                    <div class="profil-content">
                        <span class="text-muted">TENTANG KAMI</span>
                        <h2 class="mt-2">Profil Sekolah</h2>

                        <p class="text-muted mt-3">
                            SMK Nusantara merupakan lembaga pendidikan yang berkomitmen memberikan pendidikan berkualitas serta membentuk siswa yang memiliki kompetensi, karakter dan keterampilan.
                        </p>

                        <p class="text-muted">
                            Kami terus menciptakan lingkungan belajar yang nyaman, aman, kreatif dan mendukung perkembangan potensi setiap siswa.
                        </p>

                        <div class="row">
                            <div class="col-6">
                                <div class="stat-box">
                                    <h3>500+</h3>
                                    <small>Siswa</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-box">
                                    <h3>40+</h3>
                                    <small>Guru</small>
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('profil.index') }}" class="btn btn-more mt-4">
                            Selengkapnya <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- EKSTRAKURIKULER -->
<section class="bg-white" id="eskul">
    <div class="container">

        <div class="text-center">
            <h2 class="judul-section">Ekstrakurikuler</h2>
            <p class="text-muted">Mengembangkan bakat dan minat siswa</p>
            <div class="garis"></div>
        </div>

        <div class="row g-4">

            <div class="col-md-3 col-6">
                <div class="eskul-card">
                    <div class="eskul-icon"><i class="bi bi-compass"></i></div>
                    <h5>Pramuka</h5>
                    <p>Melatih kemandirian, kedisiplinan dan kerja sama.</p>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="eskul-card">
                    <div class="eskul-icon"><i class="bi bi-trophy"></i></div>
                    <h5>Olahraga</h5>
                    <p>Mengembangkan kemampuan dan kesehatan jasmani.</p>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="eskul-card">
                    <div class="eskul-icon"><i class="bi bi-music-note-beamed"></i></div>
                    <h5>Seni</h5>
                    <p>Mengembangkan kreativitas dan bakat seni siswa.</p>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="eskul-card">
                    <div class="eskul-icon"><i class="bi bi-laptop"></i></div>
                    <h5>Teknologi</h5>
                    <p>Belajar teknologi dan pemrograman.</p>
                </div>
            </div>

        </div>

        <div class="text-center mt-5">
            <a href="{{ route('eskul.public') }}" class="btn btn-more">
                Lihat Ekstrakurikuler <i class="bi bi-arrow-right"></i>
            </a>
        </div>

    </div>
</section>

<!-- DATA SISWA -->
<section id="siswa">
    <div class="container">
        <div class="siswa-box">
            <div class="row align-items-center">

                <div class="col-md-8">
                    <h2>Data Siswa</h2>
                    <p class="mt-3">
                        Informasi mengenai siswa sekolah dan kegiatan peserta didik.
                    </p>
                    <a href="{{ route('siswa.index') }}" class="btn btn-light rounded-pill px-4 mt-3">
                        <i class="bi bi-people-fill"></i>
                        Lihat Data Siswa
                    </a>
                </div>

                <div class="col-md-4 text-center">
                    <i class="bi bi-people-fill siswa-icon"></i>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- GURU -->
<section class="guru-section" id="guru">
    <div class="container">

        <div class="text-center">
            <h2 class="judul-section">Guru &amp; Tenaga Pendidik</h2>
            <p class="text-muted">Guru dan tenaga pendidik sekolah</p>
            <div class="garis"></div>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="guru-card">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=500&q=80" class="guru-img" alt="Ahmad Fauzi">
                    <h5>Ahmad Fauzi</h5>
                    <div class="jabatan">Kepala Sekolah</div>
                    <p class="mt-2">Berpengalaman dalam dunia pendidikan dan manajemen sekolah.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="guru-card">
                    <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=500&q=80" class="guru-img" alt="Siti Aminah">
                    <h5>Siti Aminah</h5>
                    <div class="jabatan">Guru Bahasa Indonesia</div>
                    <p class="mt-2">Membimbing siswa dalam pembelajaran Bahasa Indonesia.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="guru-card">
                    <img src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?auto=format&fit=crop&w=500&q=80" class="guru-img" alt="Budi Santoso">
                    <h5>Budi Santoso</h5>
                    <div class="jabatan">Guru Matematika</div>
                    <p class="mt-2">Membantu siswa memahami matematika dengan cara yang mudah.</p>
                </div>
            </div>

        </div>

        <div class="text-center mt-5">
            <a href="{{ route('data-guru') }}" class="btn btn-more">
                Lihat Semua Guru <i class="bi bi-arrow-right"></i>
            </a>
        </div>

    </div>
</section>

<!-- KONTAK -->
<section id="kontak">
    <div class="container">

        <div class="text-center">
            <h2 class="judul-section">Hubungi Kami</h2>
            <p class="text-muted">Informasi kontak sekolah</p>
            <div class="garis"></div>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="contact-card">
                    <div class="contact-icon"><i class="bi bi-geo-alt-fill"></i></div>
                    <h5 class="mt-3">Alamat</h5>
                    <p class="text-muted">Jl. Pendidikan No. 1</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-card">
                    <div class="contact-icon"><i class="bi bi-telephone-fill"></i></div>
                    <h5 class="mt-3">Telepon</h5>
                    <p class="text-muted">0812-3456-7890</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-card">
                    <div class="contact-icon"><i class="bi bi-envelope-fill"></i></div>
                    <h5 class="mt-3">Email</h5>
                    <p class="text-muted">info@sekolah.sch.id</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FOOTER -->
<footer>
    <div class="container">

        <div class="row g-5">

            <div class="col-md-6">
                <h4><i class="bi bi-mortarboard-fill"></i> SMK NUSANTARA</h4>
                <p class="text-secondary mt-3">
                    Website resmi sekolah sebagai media informasi dan komunikasi bagi siswa, guru, orang tua dan masyarakat.
                </p>
            </div>

            <div class="col-md-3">
                <h5>Navigasi</h5>
                <div class="mt-3">
                    <a href="{{ route('home') }}">Beranda</a><br><br>
                    <a href="{{ route('berita.public') }}">Berita</a><br><br>
                    <a href="{{ route('galeri.public') }}">Galeri</a><br><br>
                    <a href="{{ route('profil.index') }}">Profil</a>
                </div>
            </div>

            <div class="col-md-3">
                <h5>Lainnya</h5>
                <div class="mt-3">
                    <a href="{{ route('eskul.public') }}">Ekstrakurikuler</a><br><br>
                    <a href="{{ route('siswa.index') }}">Siswa</a><br><br>
                    <a href="{{ route('data-guru') }}">Guru</a>
                </div>
            </div>

        </div>

        <hr class="border-secondary my-5">

        <div class="text-center">
            <small class="text-secondary">
                © 2026 SMK Nusantara. All Rights Reserved.
            </small>
        </div>

    </div>
</footer>

<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- JAVASCRIPT SLIDER BERITA DAN GALERI -->
<script>
    /* BERITA SLIDER */
    const beritaTrack = document.getElementById('beritaTrack');

    document.getElementById('beritaNext').addEventListener('click', function () {
        beritaTrack.scrollBy({
            left: 380,
            behavior: 'smooth'
        });
    });

    document.getElementById('beritaPrev').addEventListener('click', function () {
        beritaTrack.scrollBy({
            left: -380,
            behavior: 'smooth'
        });
    });

    /* GALERI SLIDER */
    const galeriTrack = document.getElementById('galeriTrack');

    document.getElementById('galeriNext').addEventListener('click', function () {
        galeriTrack.scrollBy({
            left: 350,
            behavior: 'smooth'
        });
    });

    document.getElementById('galeriPrev').addEventListener('click', function () {
        galeriTrack.scrollBy({
            left: -350,
            behavior: 'smooth'
        });
    });

    /* MOUSE DRAG UNTUK BERITA DAN GALERI */
    function enableDragSlider(slider) {
        let isDown = false;
        let startX = 0;
        let scrollLeft = 0;

        slider.style.cursor = 'grab';

        slider.addEventListener('mousedown', function (e) {
            isDown = true;
            slider.style.cursor = 'grabbing';
            startX = e.pageX - slider.getBoundingClientRect().left;
            scrollLeft = slider.scrollLeft;
        });

        slider.addEventListener('mouseleave', function () {
            isDown = false;
            slider.style.cursor = 'grab';
        });

        slider.addEventListener('mouseup', function () {
            isDown = false;
            slider.style.cursor = 'grab';
        });

        slider.addEventListener('mousemove', function (e) {
            if (!isDown) return;

            e.preventDefault();

            const x = e.pageX - slider.getBoundingClientRect().left;
            const walk = (x - startX) * 1.5;

            slider.scrollLeft = scrollLeft - walk;
        });
    }

    enableDragSlider(beritaTrack);
    enableDragSlider(galeriTrack);
</script>

</body>
</html>