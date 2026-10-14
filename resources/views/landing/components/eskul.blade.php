<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ekstrakurikuler - SEKOLAHKU</title>

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }


        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            background: #8B7A6D;
        }

        .navbar-brand {
            color: white !important;
            font-weight: bold;
            font-size: 22px;
        }

        .nav-link {
            color: white !important;
            margin-left: 10px;
        }

        .nav-link:hover {
            color: #E8DED4 !important;
        }


        /* =========================
           HERO
        ========================= */

        .hero {
            background:
                linear-gradient(
                    rgba(139, 122, 109, 0.9),
                    rgba(139, 122, 109, 0.9)
                );

            color: white;
            padding: 90px 0;
        }

        .hero h1 {
            font-size: 48px;
            font-weight: bold;
        }

        .hero p {
            font-size: 18px;
        }


        /* =========================
           CARD
        ========================= */

        .eskul-card {
            border: none;
            border-radius: 18px;
            transition: 0.3s;
            overflow: hidden;
        }

        .eskul-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
        }


        /* =========================
           ICON
        ========================= */

        .icon-box {
            width: 90px;
            height: 90px;

            background: #eef2ff;
            color: #8B7A6D;

            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 40px;

            margin: auto;
        }


        /* =========================
           SECTION
        ========================= */

        .judul-section {
            color: #8B7A6D;
            font-weight: bold;
        }

        .garis {
            width: 70px;
            height: 4px;

            background: #8B7A6D;

            margin: 15px auto 40px;
        }


        /* =========================
           FOOTER
        ========================= */

        footer {
            background: #111827;
            color: white;

            padding: 50px 0 20px;

            margin-top: 60px;
        }

        footer a:hover {
            color: white !important;
        }

    </style>

</head>


<body>


<!-- ================================================= -->
<!-- NAVBAR -->
<!-- ================================================= -->

<nav class="navbar navbar-expand-lg sticky-top">

    <div class="container">


        <!-- LOGO -->

        <a
            class="navbar-brand"
            href="{{ route('home') }}">

            <i class="bi bi-mortarboard-fill"></i>

            SEKOLAHKU

        </a>


        <!-- TOGGLE MOBILE -->

        <button
            class="navbar-toggler bg-light"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarMenu">

            <span class="navbar-toggler-icon"></span>

        </button>


        <!-- MENU -->

        <div
            class="collapse navbar-collapse"
            id="navbarMenu">

            <ul class="navbar-nav ms-auto">


                <!-- BERANDA -->

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ route('home') }}">

                        Beranda

                    </a>

                </li>


                <!-- BERITA -->

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ route('berita.public') }}">

                        Berita

                    </a>

                </li>


                <!-- EKSTRAKURIKULER -->

                <li class="nav-item">

                    <a
                        class="nav-link active"
                        href="{{ route('eskul.public') }}">

                        Ekstrakurikuler

                    </a>

                </li>


                <!-- GALERI -->

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ route('galeri.public') }}">

                        Galeri

                    </a>

                </li>


                <!-- PROFIL -->

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ route('profil.index') }}">

                        Profil

                    </a>

                </li>


                <!-- SISWA -->

                


                <!-- GURU -->

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ route('data-guru') }}">

                        Guru

                    </a>

                </li>
            </ul>

        </div>

    </div>

</nav>



<!-- ================================================= -->
<!-- HERO -->
<!-- ================================================= -->

<section class="hero">

    <div class="container text-center">

        <h1>

            Ekstrakurikuler

        </h1>

        <p class="mt-3 mb-0">

            Kegiatan untuk mengembangkan bakat dan minat siswa

        </p>

    </div>

</section>



<!-- ================================================= -->
<!-- DAFTAR EKSTRAKURIKULER -->
<!-- ================================================= -->

<section class="py-5">

    <div class="container">


        <div class="text-center">

            <h2 class="judul-section">

                Kegiatan Ekstrakurikuler

            </h2>

            <p class="text-muted">

                Berbagai kegiatan untuk mengembangkan
                potensi dan kreativitas siswa

            </p>

            <div class="garis"></div>

        </div>



        <div class="row g-4">


            <!-- =========================
                 PRAMUKA
            ========================= -->

            <div class="col-md-6 col-lg-3">

                <div class="card eskul-card shadow-sm text-center p-4 h-100">

                    <div class="icon-box">

                        <i class="bi bi-compass"></i>

                    </div>


                    <h5 class="mt-4 fw-bold">

                        Pramuka

                    </h5>


                    <p class="text-muted">

                        Melatih kemandirian,
                        kedisiplinan,
                        kepemimpinan,
                        dan kerja sama siswa.

                    </p>

                </div>

            </div>



            <!-- =========================
                 OLAHRAGA
            ========================= -->

            <div class="col-md-6 col-lg-3">

                <div class="card eskul-card shadow-sm text-center p-4 h-100">

                    <div class="icon-box">

                        <i class="bi bi-trophy"></i>

                    </div>


                    <h5 class="mt-4 fw-bold">

                        Olahraga

                    </h5>


                    <p class="text-muted">

                        Mengembangkan kemampuan
                        olahraga dan menjaga
                        kesehatan jasmani siswa.

                    </p>

                </div>

            </div>



            <!-- =========================
                 SENI
            ========================= -->

            <div class="col-md-6 col-lg-3">

                <div class="card eskul-card shadow-sm text-center p-4 h-100">

                    <div class="icon-box">

                        <i class="bi bi-music-note-beamed"></i>

                    </div>


                    <h5 class="mt-4 fw-bold">

                        Seni

                    </h5>


                    <p class="text-muted">

                        Mengembangkan kreativitas
                        dan bakat seni siswa
                        melalui berbagai kegiatan.

                    </p>

                </div>

            </div>



            <!-- =========================
                 TEKNOLOGI
            ========================= -->

            <div class="col-md-6 col-lg-3">

                <div class="card eskul-card shadow-sm text-center p-4 h-100">

                    <div class="icon-box">

                        <i class="bi bi-laptop"></i>

                    </div>


                    <h5 class="mt-4 fw-bold">

                        Teknologi

                    </h5>


                    <p class="text-muted">

                        Mempelajari teknologi,
                        komputer, desain,
                        dan pemrograman.

                    </p>

                </div>

            </div>



            <!-- =========================
                 ROHIS
            ========================= -->

            <div class="col-md-6 col-lg-3">

                <div class="card eskul-card shadow-sm text-center p-4 h-100">

                    <div class="icon-box">

                        <i class="bi bi-book"></i>

                    </div>


                    <h5 class="mt-4 fw-bold">

                        Rohis

                    </h5>


                    <p class="text-muted">

                        Kegiatan keagamaan untuk
                        membangun karakter dan
                        akhlak siswa.

                    </p>

                </div>

            </div>



            <!-- =========================
                 PMR
            ========================= -->

            <div class="col-md-6 col-lg-3">

                <div class="card eskul-card shadow-sm text-center p-4 h-100">

                    <div class="icon-box">

                        <i class="bi bi-heart-pulse"></i>

                    </div>


                    <h5 class="mt-4 fw-bold">

                        PMR

                    </h5>


                    <p class="text-muted">

                        Melatih kepedulian,
                        kesehatan, pertolongan,
                        dan kemanusiaan.

                    </p>

                </div>

            </div>



            <!-- =========================
                 BASKET
            ========================= -->

            <div class="col-md-6 col-lg-3">

                <div class="card eskul-card shadow-sm text-center p-4 h-100">

                    <div class="icon-box">

                        <i class="bi bi-dribbble"></i>

                    </div>


                    <h5 class="mt-4 fw-bold">

                        Basket

                    </h5>


                    <p class="text-muted">

                        Meningkatkan kemampuan
                        bermain basket,
                        kerja sama, dan sportivitas.

                    </p>

                </div>

            </div>



            <!-- =========================
                 FUTSAL
            ========================= -->

            <div class="col-md-6 col-lg-3">

                <div class="card eskul-card shadow-sm text-center p-4 h-100">

                    <div class="icon-box">

                        <i class="bi bi-person-running"></i>

                    </div>


                    <h5 class="mt-4 fw-bold">

                        Futsal

                    </h5>


                    <p class="text-muted">

                        Mengembangkan kemampuan
                        bermain futsal serta
                        kerja sama tim.

                    </p>

                </div>

            </div>


        </div>

    </div>

</section>



<!-- ================================================= -->
<!-- FOOTER -->
<!-- ================================================= -->

<footer>

    <div class="container">

        <div class="