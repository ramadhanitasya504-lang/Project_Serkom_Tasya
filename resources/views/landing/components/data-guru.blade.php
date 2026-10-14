<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Guru | SMK Nusantara</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --brown: #8B7A6D;
            --brown-dark: #59483D;
            --cream: #F5F0EB;
            --text: #332A25;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #FAF8F6;
            color: var(--text);
            font-family: Arial, sans-serif;
        }

        /* NAVBAR */
        .navbar {
            background: var(--brown);
            padding: 18px 0;
        }

        .navbar-brand {
            color: white !important;
            font-size: 26px;
            font-weight: 800;
        }

        .navbar-brand i {
            margin-right: 8px;
        }

        .navbar .nav-link {
            color: white !important;
            font-weight: 600;
            margin-left: 12px;
            transition: .3s;
        }

        .navbar .nav-link:hover,
        .navbar .nav-link.active {
            color: #EAD8C8 !important;
        }

        /* HEADER */
        .guru-hero {
            background:
                linear-gradient(90deg, rgba(48,35,27,.88), rgba(48,35,27,.40)),
                url('https://images.unsplash.com/photo-1523580494863-6f3031224c94?auto=format&fit=crop&w=1800&q=80');
            background-size: cover;
            background-position: center;
            min-height: 320px;
            display: flex;
            align-items: center;
            color: white;
        }

        .guru-hero-content {
            padding: 60px 0;
        }

        .hero-label {
            display: inline-block;
            padding: 8px 17px;
            border: 1px solid rgba(255,255,255,.4);
            background: rgba(255,255,255,.12);
            border-radius: 30px;
            font-size: 12px;
            letter-spacing: 1.5px;
            margin-bottom: 18px;
        }

        .guru-hero h1 {
            font-size: clamp(36px, 5vw, 54px);
            font-weight: 800;
            margin-bottom: 15px;
        }

        .guru-hero p {
            color: #F0E7E0;
            max-width: 650px;
            line-height: 1.8;
            margin-bottom: 0;
        }

        /* KONTEN */
        .guru-section {
            padding: 65px 0 80px;
        }

        .section-label {
            color: var(--brown);
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 2px;
        }

        .section-title {
            font-size: clamp(27px, 4vw, 38px);
            font-weight: 800;
            margin-top: 10px;
            color: var(--brown-dark);
        }

        .section-desc {
            color: #81766E;
            line-height: 1.8;
        }

        /* STATISTIK TOTAL GURU */
        .guru-stat-card {
            background: white;
            border: 1px solid #EEE7E1;
            border-radius: 20px;
            padding: 28px;
            display: flex;
            align-items: center;
            gap: 22px;
            box-shadow: 0 8px 25px rgba(55,40,30,.06);
            transition: .3s;
            max-width: 420px;
            margin: 35px auto 55px;
        }

        .guru-stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 14px 30px rgba(55,40,30,.10);
        }

        .guru-stat-icon {
            min-width: 70px;
            width: 70px;
            height: 70px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 18px;
            font-size: 30px;
            color: var(--brown);
            background: var(--cream);
        }

        .guru-stat-number {
            font-size: 34px;
            font-weight: 800;
            line-height: 1.2;
            color: var(--brown-dark);
            margin-bottom: 5px;
        }

        .guru-stat-label {
            font-size: 14px;
            color: #777;
            margin: 0;
        }

        /* JUDUL DAFTAR */
        .guru-list-heading {
            margin: 20px 0 35px;
        }

        .guru-list-heading h2 {
            font-weight: 800;
            color: var(--brown-dark);
        }

        .guru-list-heading p {
            color: #888;
        }

        .guru-underline {
            width: 65px;
            height: 4px;
            background: var(--brown);
            border-radius: 10px;
            margin: 15px auto 0;
        }

        /* KARTU GURU */
        .guru-profile-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            height: 100%;
            border: 1px solid #EEE7E1;
            box-shadow: 0 8px 28px rgba(55,40,30,.07);
            transition: .3s;
        }

        .guru-profile-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 16px 35px rgba(55,40,30,.13);
        }

        .guru-photo-wrapper {
            height: 300px;
            background: #EEE7E1;
            overflow: hidden;
            position: relative;
        }

        .guru-photo {
            width: 100%;
            height: 100%;
            object-fit: cover;  
            transition: transform .5s;
        }

        .guru-profile-card:hover .guru-photo {
            transform: scale(1.04);
        }

        .guru-no-photo {
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: var(--brown);
            gap: 12px;
        }

        .guru-no-photo i {
            font-size: 65px;
        }

        .guru-profile-body {
            padding: 25px 20px;
            text-align: center;
        }

        .guru-profile-body h4 {
            color: var(--brown-dark);
            font-size: 19px;
            font-weight: 800;
            margin-bottom: 12px;
        }

        .guru-mapel {
            display: inline-block;
            background: var(--cream);
            color: #725E4E;
            padding: 7px 15px;
            border-radius: 25px;
            font-size: 13px;
            margin-bottom: 12px;
        }

        .guru-nip {
            display: block;
            color: #888;
            font-size: 13px;
            margin-top: 5px;
        }

        /* JIKA DATA KOSONG */
        .guru-empty {
            background: white;
            border-radius: 22px;
            padding: 55px 20px;
            border: 1px dashed #C8B8AA;
            text-align: center;
        }

        .guru-empty i {
            font-size: 60px;
            color: #B7A596;
        }

        .guru-empty h4 {
            color: var(--brown-dark);
            font-weight: 800;
            margin-top: 20px;
        }

        .guru-empty p {
            color: #888;
        }

        /* FOOTER */
        footer {
            background: var(--brown-dark);
            color: white;
            padding: 28px 0;
            text-align: center;
        }

        footer p {
            margin: 0;
            font-size: 14px;
            color: #E6DDD6;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 21px;
            }

            .navbar .nav-link {
                margin-left: 0;
                padding: 9px 0;
            }

            .guru-hero {
                min-height: 280px;
            }

            .guru-section {
                padding: 45px 0 60px;
            }

            .guru-stat-card {
                padding: 22px 18px;
            }

            .guru-photo-wrapper {
                height: 250px;
            }
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg">
    <div class="container">

        <a class="navbar-brand" href="{{ url('/') }}">
            <i class="bi bi-mortarboard-fill"></i> SMK NUSANTARA
        </a>

        <button class="navbar-toggler bg-light" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarGuru"
            aria-controls="navbarGuru" aria-expanded="false"
            aria-label="Buka navigasi">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarGuru">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/berita') }}">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/ekstrakurikuler') }}">Ekstrakurikuler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/galeri') }}">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/profil') }}">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/data-guru') }}">Guru</a>
                </li>
            </ul>
        </div>

    </div>
</nav>

<!-- HEADER -->
<section class="guru-hero">
    <div class="container guru-hero-content">

        <span class="hero-label">
            <i class="bi bi-people-fill me-2"></i>
            INFORMASI TENAGA PENDIDIK
        </span>

        <h1>Data Guru SMK Nusantara</h1>

        <p>
            Kenali tenaga pendidik SMK Nusantara yang berperan
            dalam membimbing siswa, mengembangkan potensi,
            dan membangun generasi berprestasi.
        </p>

    </div>
</section>

<!-- KONTEN DATA GURU -->
<section class="guru-section">
    <div class="container">

        <div class="text-center">
            <span class="section-label">TENAGA PENDIDIK</span>
            <h2 class="section-title">Guru-Guru Kami</h2>
            <p class="section-desc">
                Informasi tenaga pendidik SMK Nusantara.
            </p>
        </div>

        <!-- TOTAL GURU SAJA -->
        <div class="guru-stat-card">

            <div class="guru-stat-icon">
                <i class="bi bi-people-fill"></i>
            </div>

            <div>
                <div class="guru-stat-number">
                    {{ $totalGuru ?? (isset($daftarGuru) ? $daftarGuru->count() : 0) }}
                </div>

                <p class="guru-stat-label">Total Guru</p>
            </div>

        </div>

        <!-- DAFTAR GURU -->
        <div class="guru-list-heading text-center">
            <span class="section-label">DAFTAR PENDIDIK</span>
            <h2 class="section-title">Daftar Tenaga Pendidik</h2>
            <p>Guru-guru SMK Nusantara</p>
            <div class="guru-underline"></div>
        </div>

        <div class="row g-4">

            @forelse ($daftarGuru as $guru)

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="guru-profile-card">

                        <!-- FOTO GURU -->
                        <div class="guru-photo-wrapper">
                            @if($guru->foto)

                                    <img src="{{ asset('storage/guru/' . $guru->foto) }}"
                                         alt="{{ $guru->nama_guru }}"
                                         class="guru-photo">
                                @else

                                    <span class="text-muted">
                                        Tidak ada foto
                                    </span>

                                @endif
                        </div>

                        <!-- INFORMASI GURU -->
                        <div class="guru-profile-body">

                            <h4>{{ $guru->nama_guru }}</h4>

                            <span class="guru-mapel">
                                <i class="bi bi-book me-1"></i>
                                {{ $guru->mapel ?: 'Mata pelajaran belum diisi' }}
                            </span>

                            @if (!empty($guru->nip))
                                <span class="guru-nip">
                                    <i class="bi bi-person-vcard me-1"></i>
                                    NIP: {{ $guru->nip }}
                                </span>
                            @endif

                        </div>

                    </div>
                </div>

            @empty

                <div class="col-12">
                    <div class="guru-empty">
                        <i class="bi bi-people"></i>

                        <h4>Belum Ada Data Guru</h4>

                        <p>
                            Data tenaga pendidik belum tersedia.
                            Silakan tambahkan data guru melalui halaman admin.
                        </p>
                    </div>
                </div>

            @endforelse

        </div>

    </div>
</section>

<!-- FOOTER -->
<footer>
    <div class="container">
        <p>
            &copy; {{ date('Y') }} SMK Nusantara. Semua Hak Dilindungi.
        </p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>