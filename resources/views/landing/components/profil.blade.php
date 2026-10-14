<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profil Sekolah | SMKK Nusantara</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root {
            --cokelat: #8B7A6D;
            --cokelat-tua: #59483D;
            --krem: #F8F4EF;
            --putih: #FFFFFF;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            color: #403831;
            background: #fff;
        }

        /* NAVBAR */
        .navbar {
            background: var(--cokelat);
            padding: 15px 0;
        }

        .navbar-brand {
            color: white !important;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .navbar .nav-link {
            color: white !important;
            margin-left: 10px;
            transition: .3s;
        }

        .navbar .nav-link:hover,
        .navbar .nav-link.active {
            color: #F2DCC7 !important;
        }

        .navbar-toggler {
            border-color: white;
        }

        .navbar-toggler-icon {
            filter: brightness(0) invert(1);
        }

        /* HERO */
        .hero {
            min-height: 350px;
            padding: 90px 20px;
            display: flex;
            align-items: center;
            text-align: center;
            color: white;
            background:
                linear-gradient(rgba(49, 37, 29, .75),
                                rgba(49, 37, 29, .75)),
                linear-gradient(135deg, #A89787, #59483D);
        }

        .hero h1 {
            font-size: clamp(32px, 5vw, 48px);
            font-weight: 800;
            margin-bottom: 18px;
        }

        .hero p {
            max-width: 700px;
            margin: auto;
            font-size: 16px;
            line-height: 1.8;
        }

        .hero-line {
            width: 75px;
            height: 4px;
            background: #E8C9A8;
            margin: 0 auto 22px;
            border-radius: 10px;
        }

        /* SECTION */
        .section {
            padding: 75px 0;
        }

        .section-krem {
            background: var(--krem);
        }

        .section-title {
            color: var(--cokelat-tua);
            font-size: 30px;
            font-weight: 800;
            margin-bottom: 14px;
        }

        .section-subtitle {
            color: #82766C;
            line-height: 1.8;
        }

        .title-line {
            height: 4px;
            width: 65px;
            background: var(--cokelat);
            border-radius: 10px;
            margin-bottom: 25px;
        }

        /* KARTU */
        .profile-card {
            height: 100%;
            padding: 30px;
            background: white;
            border-radius: 18px;
            border: 1px solid #EEE5DC;
            box-shadow: 0 8px 25px rgba(60, 45, 35, .06);
            transition: .3s;
        }

        .profile-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 14px 30px rgba(60, 45, 35, .12);
        }

        .icon-box {
            width: 60px;
            height: 60px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #F0E7DE;
            color: var(--cokelat-tua);
            font-size: 28px;
            margin-bottom: 22px;
        }

        .profile-card h4 {
            font-size: 21px;
            color: var(--cokelat-tua);
            font-weight: bold;
            margin-bottom: 15px;
        }

        .profile-card p {
            line-height: 1.9;
            color: #71665E;
            margin-bottom: 0;
        }

        /* SAMBUTAN */
        .welcome-box {
            background: white;
            padding: 35px;
            border-radius: 20px;
            border-left: 5px solid var(--cokelat);
            box-shadow: 0 8px 30px rgba(60, 45, 35, .06);
        }

        .welcome-box p {
            line-height: 1.95;
            color: #6F655D;
        }

        .school-symbol {
            min-height: 300px;
            border-radius: 22px;
            background: linear-gradient(145deg, #8B7A6D, #59483D);
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 30px;
        }

        .school-symbol i {
            font-size: 85px;
            margin-bottom: 20px;
            color: #F0D7BB;
        }

        .school-symbol h3 {
            font-weight: 800;
            letter-spacing: 2px;
        }

        /* VISI MISI */
        .list-misi {
            padding: 0;
            list-style: none;
        }

        .list-misi li {
            display: flex;
            gap: 12px;
            margin-bottom: 18px;
            line-height: 1.8;
            color: #6F655D;
        }

        .list-misi i {
            color: var(--cokelat);
            font-size: 20px;
            flex-shrink: 0;
        }

        /* IDENTITAS */
        .identity-table {
            width: 100%;
            border-collapse: collapse;
        }

        .identity-table td {
            padding: 15px 10px;
            border-bottom: 1px solid #EEE5DC;
            vertical-align: top;
            line-height: 1.7;
        }

        .identity-table td:first-child {
            font-weight: bold;
            color: var(--cokelat-tua);
            width: 38%;
        }

        /* FOOTER */
        footer {
            padding: 35px 15px;
            background: #44372F;
            color: #F5EEE8;
            text-align: center;
        }

        footer p {
            margin: 7px 0;
            color: #E0D5CB;
        }

        @media (max-width: 767px) {
            .section {
                padding: 50px 0;
            }

            .section-title {
                font-size: 26px;
            }

            .welcome-box {
                padding: 25px;
            }

            .navbar .nav-link {
                margin-left: 0;
                padding: 10px 0;
            }

            .identity-table td {
                padding: 12px 5px;
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">

        <a class="navbar-brand" href="{{ url('/') }}">
            <i class="bi bi-mortarboard-fill me-2"></i>
            SMKK NUSANTARA
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menuNavbar"
                aria-controls="menuNavbar"
                aria-expanded="false"
                aria-label="Buka menu navigasi">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuNavbar">
            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">
                        Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/berita') }}">
                        Berita
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/ekstrakurikuler') }}">
                        Ekstrakurikuler
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/galeri') }}">
                        Galeri
                    </a>
                </li>

                <!-- MENU GURU -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/data-guru') }}">
                        Guru
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/profil') }}">
                        Profil
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="hero">
    <div class="container">
        <div class="hero-line"></div>

        <h1>Profil Sekolah</h1>

        <p>
            Mengenal lebih dekat SMKK Nusantara, lingkungan pendidikan
            yang mendukung pengembangan ilmu pengetahuan, keterampilan,
            karakter, dan kreativitas peserta didik.
        </p>
    </div>
</section>

<!-- SAMBUTAN -->
<section class="section">
    <div class="container">
        <div class="row align-items-center g-4 g-lg-5">

            <div class="col-lg-5">
                <div class="school-symbol">
                    <i class="bi bi-mortarboard"></i>
                    <h3>SMKK NUSANTARA</h3>
                    <p class="mb-0">
                        Berkarakter · Terampil · Berprestasi
                    </p>
                </div>
            </div>

            <div class="col-lg-7">
                <span class="text-uppercase fw-bold"
                      style="color: #8B7A6D; letter-spacing: 2px;">
                    Tentang Kami
                </span>

                <h2 class="section-title mt-2">
                    Selamat Datang di SMKK Nusantara
                </h2>

                <div class="title-line"></div>

                <div class="welcome-box">
                    <p>
                        Selamat datang di halaman profil SMKK Nusantara.
                        Halaman ini menjadi sarana untuk mengenal lingkungan
                        sekolah, tujuan pendidikan, serta komitmen kami dalam
                        mendukung perkembangan peserta didik.
                    </p>

                    <p>
                        Kami percaya bahwa pendidikan yang baik tidak hanya
                        berfokus pada pengetahuan, tetapi juga pada
                        pembentukan karakter, kedisiplinan, kreativitas,
                        dan keterampilan yang bermanfaat untuk masa depan.
                    </p>

                    <p class="mb-0">
                        Mari bersama-sama membangun lingkungan belajar
                        yang positif, nyaman, dan inspiratif.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SEJARAH -->
<section class="section section-krem">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="section-title">Sejarah Sekolah</h2>
            <p class="section-subtitle">
                Mengenal perjalanan dan perkembangan SMKK Nusantara.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="profile-card">

                    <div class="icon-box">
                        <i class="bi bi-book-half"></i>
                    </div>

                    <h4>Perjalanan SMKK Nusantara</h4>

                    <p>
                        SMKK Nusantara merupakan lembaga pendidikan yang
                        berperan dalam memberikan kesempatan kepada peserta
                        didik untuk mengembangkan potensi, pengetahuan,
                        keterampilan, serta sikap positif.
                    </p>

                    <p class="mt-3">
                        Bagian sejarah ini dapat dilengkapi dengan tahun
                        berdiri sekolah, latar belakang pendirian, perubahan
                        nama, perkembangan fasilitas, dan pencapaian sekolah
                        sesuai dengan data resmi yang dimiliki.
                    </p>

                </div>
            </div>
        </div>

    </div>
</section>

<!-- VISI MISI -->
<section class="section">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="section-title">Visi dan Misi</h2>
            <p class="section-subtitle">
                Arah dan tujuan dalam membangun pendidikan yang berkualitas.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-lg-5">
                <div class="profile-card">

                    <div class="icon-box">
                        <i class="bi bi-eye"></i>
                    </div>

                    <h4>Visi Sekolah</h4>

                    <p>
                        Menjadi lembaga pendidikan yang mendukung
                        terbentuknya generasi berkarakter, berpengetahuan,
                        terampil, kreatif, disiplin, dan siap menghadapi
                        tantangan masa depan.
                    </p>

                    <p class="mt-3 small">
                        Silakan sesuaikan dengan visi resmi sekolah.
                    </p>

                </div>
            </div>

            <div class="col-lg-7">
                <div class="profile-card">

                    <div class="icon-box">
                        <i class="bi bi-bullseye"></i>
                    </div>

                    <h4>Misi Sekolah</h4>

                    <ul class="list-misi mt-3">
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <span>
                                Menyelenggarakan pembelajaran yang aktif,
                                efektif, dan berkualitas.
                            </span>
                        </li>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <span>
                                Membentuk peserta didik yang disiplin,
                                bertanggung jawab, dan berakhlak baik.
                            </span>
                        </li>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <span>
                                Mengembangkan potensi, kreativitas,
                                bakat, dan keterampilan peserta didik.
                            </span>
                        </li>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <span>
                                Mendorong prestasi akademik maupun
                                nonakademik.
                            </span>
                        </li>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <span>
                                Membangun lingkungan sekolah yang aman,
                                nyaman, dan mendukung kegiatan belajar.
                            </span>
                        </li>
                    </ul>

                    <p class="small mt-3">
                        Misi di atas merupakan contoh dan perlu disesuaikan
                        dengan dokumen resmi sekolah.
                    </p>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- IDENTITAS SEKOLAH -->
<section class="section section-krem">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="section-title">Identitas Sekolah</h2>
            <p class="section-subtitle">
                Informasi umum mengenai SMKK Nusantara.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="profile-card">

                    <table class="identity-table">
                        <tr>
                            <td>Nama Sekolah</td>
                            <td>SMKK Nusantara</td>
                        </tr>

                        <tr>
                            <td>Jenjang Pendidikan</td>
                            <td>Isi sesuai jenjang resmi sekolah</td>
                        </tr>

                        <tr>
                            <td>Status Sekolah</td>
                            <td>Isi status resmi sekolah</td>
                        </tr>

                        <tr>
                            <td>NPSN</td>
                            <td>Isi nomor NPSN sekolah</td>
                        </tr>

                        <tr>
                            <td>Alamat</td>
                            <td>Isi alamat lengkap sekolah</td>
                        </tr>

                        <tr>
                            <td>Kepala Sekolah</td>
                            <td>Isi nama kepala sekolah</td>
                        </tr>

                        <tr>
                            <td>Email</td>
                            <td>Isi email resmi sekolah</td>
                        </tr>
                    </table>

                    <p class="small mt-4">
                        Lengkapi data di atas menggunakan informasi resmi
                        sekolah agar informasi yang ditampilkan akurat.
                    </p>

                </div>
            </div>
        </div>

    </div>
</section>

<!-- PENUTUP -->
<section class="section">
    <div class="container text-center">

        <i class="bi bi-stars"
           style="font-size: 45px; color: #8B7A6D;"></i>

        <h2 class="section-title mt-3">
            Bersama Membangun Masa Depan
        </h2>

        <p class="section-subtitle mx-auto"
           style="max-width: 650px;">
            Pendidikan merupakan langkah penting untuk mengembangkan
            potensi dan mempersiapkan generasi yang mampu memberikan
            kontribusi positif bagi masyarakat.
        </p>

        <a href="{{ url('/') }}"
           class="btn mt-3 px-4 py-3 text-white rounded-pill"
           style="background: #8B7A6D;">

            <i class="bi bi-house-door me-2"></i>
            Kembali ke Beranda

        </a>
    </div>
</section>

<!-- FOOTER -->
<footer>
    <h5 class="fw-bold">SMKK NUSANTARA</h5>

    <p>Berkarakter, Terampil, dan Berprestasi</p>

    <p class="small mb-0">
        &copy; {{ date('Y') }} SMKK Nusantara. Seluruh hak cipta dilindungi.
    </p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>