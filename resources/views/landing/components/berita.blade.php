<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita | SMK Nusantara</title>

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
            font-size: 28px;
            font-weight: 800;
        }

        .navbar-brand i {
            margin-right: 10px;
        }

        .navbar .nav-link {
            color: white !important;
            font-weight: 600;
            margin-left: 14px;
            transition: .3s;
        }

        .navbar .nav-link:hover,
        .navbar .nav-link.active {
            color: #EAD8C8 !important;
        }

        /* HEADER */
        .news-hero {
            background:
                linear-gradient(90deg, rgba(48,35,27,.85), rgba(48,35,27,.35)),
                url('https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=1800&q=80');
            background-size: cover;
            background-position: center;
            min-height: 310px;
            display: flex;
            align-items: center;
            color: white;
        }

        .hero-content {
            padding: 55px 0;
        }

        .hero-label {
            display: inline-block;
            padding: 8px 17px;
            border: 1px solid rgba(255,255,255,.4);
            background: rgba(255,255,255,.12);
            border-radius: 30px;
            font-size: 12px;
            letter-spacing: 1.5px;
            margin-bottom: 16px;
        }

        .news-hero h1 {
            font-size: clamp(36px, 5vw, 54px);
            font-weight: 800;
            margin-bottom: 15px;
        }

        .news-hero p {
            color: #F0E7E0;
            max-width: 600px;
            line-height: 1.8;
        }

        /* CONTENT */
        .news-section {
            padding: 65px 0 80px;
        }

        .section-label {
            color: var(--brown);
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 2px;
        }

        .section-title {
            font-size: clamp(28px, 4vw, 38px);
            font-weight: 800;
            margin-top: 10px;
        }

        .section-desc {
            color: #81766E;
            line-height: 1.8;
        }

        /* BERITA UTAMA */
        .featured-card {
            background: white;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(60,40,25,.08);
            margin: 35px 0 55px;
        }

        .featured-image {
            width: 100%;
            height: 100%;
            min-height: 340px;
            object-fit: cover;
            display: block;
        }

        .featured-content {
            padding: 35px;
        }

        .category {
            display: inline-block;
            background: var(--cream);
            color: var(--brown-dark);
            border-radius: 30px;
            padding: 7px 13px;
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .8px;
        }

        .featured-content h2 {
            font-size: clamp(24px, 3vw, 32px);
            font-weight: 800;
            line-height: 1.4;
            margin: 18px 0 12px;
        }

        .news-meta {
            color: #91857C;
            font-size: 13px;
            margin-bottom: 15px;
        }

        .news-meta i {
            margin-right: 5px;
        }

        .featured-content p {
            color: #766C65;
            line-height: 1.9;
        }

        /* TOMBOL */
        .btn-brown {
            display: inline-block;
            color: white;
            background: var(--brown);
            border: 1px solid var(--brown);
            padding: 11px 22px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 700;
            transition: .3s;
            cursor: pointer;
        }

        .btn-brown:hover {
            color: white;
            background: var(--brown-dark);
            border-color: var(--brown-dark);
        }

        /* SEARCH */
        .search-box {
            position: relative;
            max-width: 390px;
            width: 100%;
        }

        .search-box input {
            width: 100%;
            padding: 13px 45px 13px 18px;
            border: 1px solid #E4DAD1;
            border-radius: 10px;
            background: white;
            outline: none;
        }

        .search-box input:focus {
            border-color: var(--brown);
            box-shadow: 0 0 0 3px rgba(139,122,109,.12);
        }

        .search-box i {
            position: absolute;
            right: 17px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--brown);
        }

        /* FILTER */
        .filter-list {
            display: flex;
            flex-wrap: wrap;
            gap: 9px;
            margin: 25px 0 30px;
        }

        .filter-btn {
            background: white;
            color: #65564B;
            border: 1px solid #E2D8CF;
            border-radius: 30px;
            padding: 9px 18px;
            font-weight: 600;
            transition: .25s;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: var(--brown);
            color: white;
            border-color: var(--brown);
        }

        /* KARTU BERITA */
        .news-card {
            height: 100%;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 22px rgba(60,40,25,.07);
            transition: .3s;
        }

        .news-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 28px rgba(60,40,25,.13);
        }

        .news-card-image {
            width: 100%;
            height: 220px;
            object-fit: cover;
            display: block;
            transition: transform .4s;
        }

        .news-image-wrap {
            overflow: hidden;
        }

        .news-card:hover .news-card-image {
            transform: scale(1.05);
        }

        .news-card-content {
            padding: 22px;
        }

        .news-card-content h3 {
            font-size: 19px;
            font-weight: 800;
            line-height: 1.5;
            margin: 13px 0 10px;
        }

        .news-card-content p {
            font-size: 14px;
            color: #81766E;
            line-height: 1.8;
        }

        .read-more {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            color: var(--brown);
            text-decoration: none;
            font-weight: 800;
            font-size: 14px;
            margin-top: 8px;
        }

        .read-more:hover {
            color: var(--brown-dark);
        }

        .news-item.hidden {
            display: none !important;
        }

        #emptyMessage {
            display: none;
            text-align: center;
            padding: 35px 0;
            color: #81766E;
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

        /* MODAL BACA BERITA */
        .article-modal-image {
            width: 100%;
            max-height: 330px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .article-body {
            color: #655A52;
            line-height: 1.9;
            white-space: pre-line;
        }

        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 21px;
            }

            .navbar .nav-link {
                margin-left: 0;
                padding: 9px 0;
            }

            .news-hero {
                min-height: 280px;
            }

            .featured-image {
                min-height: 230px;
                height: 230px;
            }

            .featured-content {
                padding: 25px;
            }

            .news-section {
                padding: 45px 0 60px;
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
            data-bs-toggle="collapse" data-bs-target="#navbarBerita"
            aria-controls="navbarBerita" aria-expanded="false"
            aria-label="Buka navigasi">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarBerita">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/berita') }}">Berita</a>
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
                    <a class="nav-link" href="{{ url('/data-guru') }}">Guru</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- HEADER -->
<section class="news-hero">
    <div class="container hero-content">
        <span class="hero-label">
            <i class="bi bi-newspaper me-2"></i>INFORMASI SEKOLAH
        </span>

        <h1>Berita SMK Nusantara</h1>

        <p>
            Temukan kabar terbaru, kegiatan, prestasi siswa,
            dan berbagai informasi menarik dari keluarga besar SMK Nusantara.
        </p>
    </div>
</section>

<!-- KONTEN BERITA -->
<section class="news-section">
    <div class="container">

        <div class="text-center">
            <span class="section-label">KABAR TERKINI</span>
            <h2 class="section-title">Informasi dan Cerita Sekolah</h2>
            <p class="section-desc">
                Ikuti setiap langkah dan perkembangan SMK Nusantara.
            </p>
        </div>

        @php
            $featured = isset($beritas) ? $beritas->first() : null;
        @endphp

        <!-- BERITA UTAMA -->
        @if($featured)
            <div class="featured-card">
                <div class="row g-0 align-items-stretch">
                    <div class="col-lg-6">
                        @if(!empty($featured->gambar))
                            <img class="featured-image"
                                src="{{ asset('storage/' . $featured->gambar) }}"
                                alt="{{ $featured->judul ?? 'Berita utama' }}">
                        @else
                            <img class="featured-image"
                                src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=1000&q=80"
                                alt="Berita utama sekolah">
                        @endif
                    </div>

                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="featured-content">
                            <span class="category">Berita Terbaru</span>

                            <h2>{{ $featured->judul ?? 'Berita SMK Nusantara' }}</h2>

                            <div class="news-meta">
                                <i class="bi bi-calendar3"></i>
                                {{ $featured->tanggal ?? 'Informasi Sekolah' }}
                                <span class="mx-2">•</span>
                                <i class="bi bi-building"></i>
                                SMK Nusantara
                            </div>

                            <p>
                                {{ \Illuminate\Support\Str::limit(
                                    strip_tags($featured->isi ?? $featured->deskripsi ?? 'Simak informasi terbaru dari SMK Nusantara.'),
                                    180
                                ) }}
                            </p>

                            <button type="button" class="btn-brown"
                                onclick="openArticle(this)"
                                data-title="{{ $featured->judul ?? 'Berita SMK Nusantara' }}"
                                data-date="{{ $featured->tanggal ?? '' }}"
                                data-image="{{ !empty($featured->gambar) ? asset('storage/' . $featured->gambar) : 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=1000&q=80' }}"
                                data-content="{{ $featured->isi ?? $featured->deskripsi ?? 'Informasi selengkapnya segera hadir.' }}">
                                Baca Berita <i class="bi bi-arrow-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="featured-card">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-6">
                        <img class="featured-image"
                            src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=1000&q=80"
                            alt="Kegiatan sekolah">
                    </div>

                    <div class="col-lg-6">
                        <div class="featured-content">
                            <span class="category">Selamat Datang</span>
                            <h2>Berita dan Informasi SMK Nusantara</h2>
                            <p>
                                Halaman ini menjadi tempat berbagi kabar kegiatan,
                                prestasi, dan informasi terbaru sekolah.
                            </p>
                            <a href="#daftarBerita" class="btn-brown">
                                Jelajahi Berita
                                <i class="bi bi-arrow-down ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <!-- JUDUL DAFTAR BERITA -->
        <div id="daftarBerita"
            class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">

            <div>
                <span class="section-label">JANGAN LEWATKAN</span>
                <h2 class="section-title mb-0">Berita Sekolah</h2>
            </div>

            <div class="search-box">
                <input type="text" id="searchNews"
                    placeholder="Cari berita di sini..."
                    aria-label="Cari berita">
                <i class="bi bi-search"></i>
            </div>
        </div>

        <!-- FILTER -->
        <div class="filter-list">
            <button class="filter-btn active" data-filter="all">Semua Berita</button>
            <button class="filter-btn" data-filter="kegiatan">Kegiatan</button>
            <button class="filter-btn" data-filter="akademik">Akademik</button>
            <button class="filter-btn" data-filter="prestasi">Prestasi</button>
            <button class="filter-btn" data-filter="informasi">Informasi</button>
        </div>

        <!-- DAFTAR BERITA DARI DATABASE -->
        <div class="row g-4" id="newsContainer">

            @if(isset($beritas) && $beritas->count() > 0)

                @foreach($beritas as $berita)
                    <div class="col-md-6 col-lg-4 news-item"
                        data-category="informasi">

                        <article class="news-card">

                            <div class="news-image-wrap">
                                @if(!empty($berita->gambar))
                                    <img class="news-card-image"
                                        src="{{ asset('storage/' . $berita->gambar) }}"
                                        alt="{{ $berita->judul ?? 'Foto berita' }}"
                                        loading="lazy">
                                @else
                                    <img class="news-card-image"
                                        src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=900&q=80"
                                        alt="Ilustrasi berita sekolah"
                                        loading="lazy">
                                @endif
                            </div>

                            <div class="news-card-content">

                                <span class="category">Informasi</span>

                                <h3>{{ $berita->judul ?? 'Berita Sekolah' }}</h3>

                                <div class="news-meta">
                                    <i class="bi bi-calendar3"></i>
                                    {{ $berita->tanggal ?? '-' }}
                                </div>

                                <p>
                                    {{ \Illuminate\Support\Str::limit(
                                        strip_tags($berita->isi ?? $berita->deskripsi ?? ''),
                                        120
                                    ) }}
                                </p>

                                <button type="button" class="read-more border-0 bg-transparent p-0"
                                    onclick="openArticle(this)"
                                    data-title="{{ $berita->judul ?? 'Berita Sekolah' }}"
                                    data-date="{{ $berita->tanggal ?? '' }}"
                                    data-image="{{ !empty($berita->gambar) ? asset('storage/' . $berita->gambar) : 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=900&q=80' }}"
                                    data-content="{{ $berita->isi ?? $berita->deskripsi ?? 'Belum ada isi berita.' }}">
                                    Baca selengkapnya
                                    <i class="bi bi-arrow-right"></i>
                                </button>

                            </div>
                        </article>
                    </div>
                @endforeach

            @else

                <!-- CONTOH BERITA JIKA DATABASE KOSONG -->
                <div class="col-md-6 col-lg-4 news-item" data-category="kegiatan">
                    <article class="news-card">
                        <div class="news-image-wrap">
                            <img class="news-card-image"
                                src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?auto=format&fit=crop&w=900&q=80"
                                alt="Kegiatan sekolah">
                        </div>
                        <div class="news-card-content">
                            <span class="category">Kegiatan</span>
                            <h3>Kegiatan dan Kebersamaan Siswa</h3>
                            <div class="news-meta">
                                <i class="bi bi-calendar3"></i> Berita Sekolah
                            </div>
                            <p>
                                Berbagai kegiatan sekolah menjadi kesempatan
                                bagi siswa untuk belajar dan bekerja sama.
                            </p>
                            <button class="read-more border-0 bg-transparent p-0"
                                onclick="openArticle(this)"
                                data-title="Kegiatan dan Kebersamaan Siswa"
                                data-date="Berita Sekolah"
                                data-image="https://images.unsplash.com/photo-1523580494863-6f3031224c94?auto=format&fit=crop&w=900&q=80"
                                data-content="Kegiatan sekolah memberikan kesempatan bagi siswa untuk belajar, bekerja sama, dan mengembangkan potensi diri. Ganti contoh ini dengan berita resmi sekolah.">
                                Baca selengkapnya <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </article>
                </div>

                <div class="col-md-6 col-lg-4 news-item" data-category="akademik">
                    <article class="news-card">
                        <div class="news-image-wrap">
                            <img class="news-card-image"
                                src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=900&q=80"
                                alt="Pembelajaran di kelas">
                        </div>
                        <div class="news-card-content">
                            <span class="category">Akademik</span>
                            <h3>Semangat Belajar untuk Masa Depan</h3>
                            <div class="news-meta">
                                <i class="bi bi-calendar3"></i> Berita Sekolah
                            </div>
                            <p>
                                Proses pembelajaran membantu siswa mengembangkan
                                pengetahuan dan keterampilan.
                            </p>
                            <button class="read-more border-0 bg-transparent p-0"
                                onclick="openArticle(this)"
                                data-title="Semangat Belajar untuk Masa Depan"
                                data-date="Berita Sekolah"
                                data-image="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=900&q=80"
                                data-content="Pembelajaran menjadi bagian penting dalam mempersiapkan siswa menghadapi masa depan. Ganti contoh ini dengan berita resmi sekolah.">
                                Baca selengkapnya <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </article>
                </div>

                <div class="col-md-6 col-lg-4 news-item" data-category="prestasi">
                    <article class="news-card">
                        <div class="news-image-wrap">
                            <img class="news-card-image"
                                src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=900&q=80"
                                alt="Prestasi dan kelulusan">
                        </div>
                        <div class="news-card-content">
                            <span class="category">Prestasi</span>
                            <h3>Melangkah Menuju Masa Depan</h3>
                            <div class="news-meta">
                                <i class="bi bi-calendar3"></i> Berita Sekolah
                            </div>
                            <p>
                                Dukungan sekolah dan semangat belajar menjadi
                                bekal untuk meraih cita-cita.
                            </p>
                            <button class="read-more border-0 bg-transparent p-0"
                                onclick="openArticle(this)"
                                data-title="Melangkah Menuju Masa Depan"
                                data-date="Berita Sekolah"
                                data-image="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=900&q=80"
                                data-content="Setiap siswa memiliki kesempatan untuk mengembangkan potensi dan meraih cita-cita. Ganti contoh ini dengan berita resmi sekolah.">
                                Baca selengkapnya <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </article>
                </div>

            @endif

        </div>

        <div id="emptyMessage">
            <i class="bi bi-search fs-2 d-block mb-3"></i>
            <h5>Berita tidak ditemukan</h5>
            <p>Coba gunakan kata kunci atau kategori yang berbeda.</p>
        </div>

    </div>
</section>

<!-- MODAL BACA BERITA -->
<div class="modal fade" id="articleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content border-0 rounded-4">
            <div class="modal-header border-0 px-4 pt-4">
                <span class="category">BERITA SMK NUSANTARA</span>
                <button type="button" class="btn-close"
                    data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>

            <div class="modal-body px-4 pb-4">
                <img id="articleImage" class="article-modal-image"
                    src="" alt="Foto berita">

                <div class="news-meta">
                    <i class="bi bi-calendar3"></i>
                    <span id="articleDate"></span>
                </div>

                <h2 id="articleTitle" class="fw-bold mb-3"></h2>

                <div id="articleContent" class="article-body"></div>
            </div>
        </div>
    </div>
</div>

<!-- FOOTER -->
<footer>
    <div class="container">
        <p>
            &copy; {{ date('Y') }} SMK Nusantara. Semua Hak Dilindungi.
        </p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // PENCARIAN DAN FILTER BERITA
    const searchInput = document.getElementById('searchNews');
    const filterButtons = document.querySelectorAll('.filter-btn');
    const newsItems = document.querySelectorAll('.news-item');
    const emptyMessage = document.getElementById('emptyMessage');

    let activeFilter = 'all';

    function filterNews() {
        const keyword = searchInput.value.toLowerCase().trim();
        let visibleCount = 0;

        newsItems.forEach(item => {
            const text = item.innerText.toLowerCase();
            const category = item.dataset.category;

            const matchesKeyword = text.includes(keyword);
            const matchesCategory =
                activeFilter === 'all' || category === activeFilter;

            if (matchesKeyword && matchesCategory) {
                item.classList.remove('hidden');
                visibleCount++;
            } else {
                item.classList.add('hidden');
            }
        });

        emptyMessage.style.display = visibleCount === 0 ? 'block' : 'none';
    }

    searchInput.addEventListener('input', filterNews);

    filterButtons.forEach(button => {
        button.addEventListener('click', function () {
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            activeFilter = this.dataset.filter;
            filterNews();
        });
    });

    // MODAL DETAIL BERITA
    function openArticle(button) {
        document.getElementById('articleTitle').textContent =
            button.dataset.title || 'Berita SMK Nusantara';

        document.getElementById('articleDate').textContent =
            button.dataset.date || '';

        document.getElementById('articleImage').src =
            button.dataset.image || '';

        document.getElementById('articleContent').textContent =
            button.dataset.content || 'Belum ada isi berita.';

        const modal = new bootstrap.Modal(
            document.getElementById('articleModal')
        );

        modal.show();
    }
</script>

</body>
</html>
