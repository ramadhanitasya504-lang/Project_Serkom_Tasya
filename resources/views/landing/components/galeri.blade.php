<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri | SMK Nusantara</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --cokelat: #8B7A6D;
            --cokelat-gelap: #59483D;
            --krem: #F5F0EB;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #faf8f6;
            color: #332a25;
        }

        /* NAVBAR */
        .navbar {
            background: var(--cokelat);
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
            color: #ead8c8 !important;
        }

        /* HEADER GALERI */
        .gallery-hero {
            background:
                linear-gradient(90deg, rgba(47,35,28,.82), rgba(47,35,28,.35)),
                url('https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=1800&q=80');
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

        .hero-content .label {
            display: inline-block;
            background: rgba(255,255,255,.18);
            border: 1px solid rgba(255,255,255,.35);
            border-radius: 30px;
            padding: 8px 17px;
            margin-bottom: 16px;
            font-size: 13px;
            letter-spacing: 1px;
        }

        .hero-content h1 {
            font-size: clamp(36px, 5vw, 55px);
            font-weight: 800;
            margin-bottom: 14px;
        }

        .hero-content p {
            font-size: 16px;
            max-width: 580px;
            line-height: 1.8;
            color: #f2eae4;
        }

        /* BAGIAN GALERI */
        .gallery-section {
            padding: 65px 0 80px;
        }

        .section-label {
            color: var(--cokelat);
            font-weight: 700;
            letter-spacing: 2px;
            font-size: 12px;
            text-transform: uppercase;
        }

        .section-title {
            font-weight: 800;
            font-size: clamp(27px, 4vw, 38px);
            margin: 10px 0;
        }

        .section-description {
            color: #81766e;
            margin-bottom: 30px;
        }

        /* FILTER */
        .filter-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 32px;
        }

        .filter-btn {
            border: 1px solid #ded3ca;
            background: white;
            color: #66564a;
            padding: 10px 20px;
            border-radius: 30px;
            font-weight: 600;
            transition: .25s;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: var(--cokelat);
            color: white;
            border-color: var(--cokelat);
        }

        /* KARTU FOTO */
        .gallery-card {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            background: white;
            box-shadow: 0 5px 20px rgba(60,40,25,.08);
            height: 100%;
            transition: transform .3s, box-shadow .3s;
        }

        .gallery-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 28px rgba(60,40,25,.16);
        }

        .gallery-image {
            width: 100%;
            height: 240px;
            object-fit: cover;
            display: block;
            transition: transform .5s;
        }

        .gallery-card:hover .gallery-image {
            transform: scale(1.06);
        }

        .image-wrapper {
            overflow: hidden;
            position: relative;
            cursor: pointer;
        }

        .image-overlay {
            position: absolute;
            inset: 0;
            background: rgba(40,30,23,.35);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: .3s;
        }

        .image-wrapper:hover .image-overlay {
            opacity: 1;
        }

        .image-overlay i {
            color: white;
            font-size: 32px;
        }

        .gallery-info {
            padding: 19px;
        }

        .gallery-category {
            color: var(--cokelat);
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .gallery-info h5 {
            font-size: 17px;
            font-weight: 700;
            margin: 8px 0;
        }

        .gallery-info p {
            color: #8b817a;
            font-size: 13px;
            margin: 0;
        }

        .gallery-item.hidden {
            display: none;
        }

        /* FOOTER */
        footer {
            background: var(--cokelat-gelap);
            color: white;
            padding: 27px 0;
            text-align: center;
        }

        footer p {
            margin: 0;
            font-size: 14px;
            color: #e6ddd6;
        }

        /* PREVIEW FOTO */
        .preview-image {
            width: 100%;
            max-height: 75vh;
            object-fit: contain;
            background: #211b17;
            border-radius: 8px;
        }

        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 21px;
            }

            .navbar .nav-link {
                margin-left: 0;
                padding: 9px 0;
            }

            .gallery-hero {
                min-height: 280px;
            }

            .gallery-section {
                padding: 45px 0;
            }

            .gallery-image {
                height: 220px;
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
            data-bs-toggle="collapse" data-bs-target="#navbarGaleri">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarGaleri">
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
                    <a class="nav-link active" href="{{ url('/galeri') }}">Galeri</a>
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
<section class="gallery-hero">
    <div class="container hero-content">
        <span class="label">
            <i class="bi bi-camera-fill me-2"></i>DOKUMENTASI SEKOLAH
        </span>

        <h1>Galeri SMK Nusantara</h1>

        <p>
            Setiap momen punya cerita. Jelajahi berbagai kegiatan,
            prestasi, dan kebersamaan keluarga besar SMK Nusantara.
        </p>
    </div>
</section>

<!-- GALERI FOTO -->
<section class="gallery-section">
    <div class="container">

        <div class="text-center mb-4">
            <span class="section-label">MOMEN KAMI</span>
            <h2 class="section-title">Cerita dalam Setiap Foto</h2>
            <p class="section-description">
                Kumpulan dokumentasi kegiatan dan kehidupan di sekolah.
            </p>
        </div>

        <!-- FILTER KATEGORI -->
        <div class="filter-buttons justify-content-center">
            <button class="filter-btn active" data-filter="all">Semua</button>
            <button class="filter-btn" data-filter="kegiatan">Kegiatan</button>
            <button class="filter-btn" data-filter="belajar">Pembelajaran</button>
            <button class="filter-btn" data-filter="prestasi">Prestasi</button>
            <button class="filter-btn" data-filter="fasilitas">Fasilitas</button>
        </div>

        <div class="row g-4" id="galleryContainer">

            <!-- FOTO 1 -->
            <div class="col-md-6 col-lg-4 gallery-item" data-category="kegiatan">
                <div class="gallery-card">
                    <div class="image-wrapper" onclick="previewImage(this)">
                        <img class="gallery-image"
                            src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?auto=format&fit=crop&w=900&q=80"
                            alt="Kegiatan sekolah" loading="lazy">
                        <div class="image-overlay"><i class="bi bi-zoom-in"></i></div>
                    </div>
                    <div class="gallery-info">
                        <span class="gallery-category">Kegiatan</span>
                        <h5>Kebersamaan di Sekolah</h5>
                        <p>Momen kebersamaan dalam kegiatan sekolah.</p>
                    </div>
                </div>
            </div>

            <!-- FOTO 2 -->
            <div class="col-md-6 col-lg-4 gallery-item" data-category="belajar">
                <div class="gallery-card">
                    <div class="image-wrapper" onclick="previewImage(this)">
                        <img class="gallery-image"
                            src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=900&q=80"
                            alt="Suasana pembelajaran" loading="lazy">
                        <div class="image-overlay"><i class="bi bi-zoom-in"></i></div>
                    </div>
                    <div class="gallery-info">
                        <span class="gallery-category">Pembelajaran</span>
                        <h5>Suasana Belajar</h5>
                        <p>Semangat siswa dalam menuntut ilmu.</p>
                    </div>
                </div>
            </div>

            <!-- FOTO 3 -->
            <div class="col-md-6 col-lg-4 gallery-item" data-category="prestasi">
                <div class="gallery-card">
                    <div class="image-wrapper" onclick="previewImage(this)">
                        <img class="gallery-image"
                            src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=900&q=80"
                            alt="Perayaan kelulusan" loading="lazy">
                        <div class="image-overlay"><i class="bi bi-zoom-in"></i></div>
                    </div>
                    <div class="gallery-info">
                        <span class="gallery-category">Prestasi</span>
                        <h5>Momen Kelulusan</h5>
                        <p>Langkah baru menuju masa depan.</p>
                    </div>
                </div>
            </div>

            <!-- FOTO 4 -->
            <div class="col-md-6 col-lg-4 gallery-item" data-category="kegiatan">
                <div class="gallery-card">
                    <div class="image-wrapper" onclick="previewImage(this)">
                        <img class="gallery-image"
                            src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?auto=format&fit=crop&w=900&q=80"
                            alt="Kebersamaan siswa" loading="lazy">
                        <div class="image-overlay"><i class="bi bi-zoom-in"></i></div>
                    </div>
                    <div class="gallery-info">
                        <span class="gallery-category">Kegiatan</span>
                        <h5>Belajar dan Berteman</h5>
                        <p>Membangun persahabatan dan kerja sama.</p>
                    </div>
                </div>
            </div>

            <!-- FOTO 5 -->
            <div class="col-md-6 col-lg-4 gallery-item" data-category="fasilitas">
                <div class="gallery-card">
                    <div class="image-wrapper" onclick="previewImage(this)">
                        <img class="gallery-image"
                            src="https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=900&q=80"
                            alt="Gedung sekolah" loading="lazy">
                        <div class="image-overlay"><i class="bi bi-zoom-in"></i></div>
                    </div>
                    <div class="gallery-info">
                        <span class="gallery-category">Fasilitas</span>
                        <h5>Lingkungan Sekolah</h5>
                        <p>Lingkungan untuk belajar dan berkembang.</p>
                    </div>
                </div>
            </div>

            <!-- FOTO 6 -->
            <div class="col-md-6 col-lg-4 gallery-item" data-category="belajar">
                <div class="gallery-card">
                    <div class="image-wrapper" onclick="previewImage(this)">
                        <img class="gallery-image"
                            src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?auto=format&fit=crop&w=900&q=80"
                            alt="Ruang kelas" loading="lazy">
                        <div class="image-overlay"><i class="bi bi-zoom-in"></i></div>
                    </div>
                    <div class="gallery-info">
                        <span class="gallery-category">Pembelajaran</span>
                        <h5>Ruang Belajar</h5>
                        <p>Tempat tumbuhnya ilmu dan kreativitas.</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="text-center mt-5">
            <p class="text-secondary small">
                <i class="bi bi-info-circle me-1"></i>
                Foto di atas masih contoh. Ganti dengan dokumentasi asli sekolahmu.
            </p>
        </div>

    </div>
</section>

<!-- MODAL PREVIEW -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-dark border-0 p-2">
            <div class="modal-header border-0">
                <h5 class="modal-title text-white">Galeri SMK Nusantara</h5>
                <button type="button" class="btn-close btn-close-white"
                    data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
                <img src="" id="previewTarget" class="preview-image" alt="Pratinjau foto">
                <p id="previewCaption" class="text-white mt-3 mb-1"></p>
            </div>
        </div>
    </div>
</div>

<!-- FOOTER -->
<footer>
    <div class="container">
        <p>
            &copy; {{ date('Y') }} SMK Nusantara.
            Semua Hak Dilindungi.
        </p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // FILTER KATEGORI GALERI
    const filterButtons = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', function () {
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            const filter = this.dataset.filter;

            galleryItems.forEach(item => {
                if (filter === 'all' || item.dataset.category === filter) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });
        });
    });

    // LIHAT FOTO DALAM UKURAN BESAR
    function previewImage(element) {
        const img = element.querySelector('img');
        document.getElementById('previewTarget').src = img.src;
        document.getElementById('previewCaption').textContent = img.alt;

        const modal = new bootstrap.Modal(document.getElementById('imageModal'));
        modal.show();
    }
</script>

</body>
</html>
