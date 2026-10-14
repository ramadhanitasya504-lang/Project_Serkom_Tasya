<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Sistem Informasi Sekolah</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
        rel="stylesheet">

    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}"
        rel="stylesheet">

    <link href="{{ asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}"
        rel="stylesheet">

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <style>
        html,
        body {
            width: 100%;
            min-height: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        body {
            font-family: 'Heebo', sans-serif;
            background-color: #fff;
        }

        .container-xxl {
            width: 100% !important;
            max-width: 100% !important;
            min-height: 100vh;
            margin: 0 !important;
            padding: 0 !important;
            display: flex !important;
            align-items: stretch;
        }

        /* SIDEBAR */
        .sidebar {
            position: relative !important;
            top: auto !important;
            left: auto !important;
            width: 250px !important;
            min-width: 250px !important;
            max-width: 250px !important;
            height: 100vh;
            margin: 0 !important;
            padding-right: 0 !important;
            flex: 0 0 250px !important;
            background-color: #6F6258 !important;
            z-index: 1050;
            overflow-y: auto;
            overflow-x: hidden;
            transition: width .3s ease, min-width .3s ease,
                max-width .3s ease, flex-basis .3s ease, left .3s ease;
        }

        .sidebar .navbar {
            width: 100% !important;
            min-height: 100vh;
            padding-right: 0 !important;
            background-color: #6F6258 !important;
            align-items: flex-start;
        }

        /* LOGO */
        .sidebar .navbar-brand {
            margin-top: 10px;
        }

        .sidebar .navbar-brand h3 {
            color: #F5EFE8 !important;
            font-weight: 700;
            white-space: nowrap;
        }

        .sidebar .navbar-brand h3 i {
            color: #D8C8B8 !important;
        }

        /* ROLE SIDEBAR */
        .sidebar .user-role {
            color: #fff !important;
            font-size: 15px;
            font-weight: 600;
        }

        /* MENU */
        .sidebar .navbar-nav {
            width: 100% !important;
        }

        .sidebar .navbar-nav .nav-link {
            display: flex;
            align-items: center;
            width: calc(100% - 20px);
            color: #F5EFE8 !important;
            background-color: transparent !important;
            border-radius: 8px;
            margin: 3px 10px;
            padding: 10px 15px;
            transition: all .2s ease;
            white-space: nowrap;
        }

        .sidebar .navbar-nav .nav-link i {
            color: #E0D1C3 !important;
            width: 20px;
            min-width: 20px;
            text-align: center;
        }

        .sidebar .navbar-nav .nav-link:hover {
            background-color: #817368 !important;
            color: #fff !important;
        }

        .sidebar .navbar-nav .nav-link:hover i {
            color: #fff !important;
        }

        .sidebar .navbar-nav .nav-link.active {
            background-color: #8B7A6D !important;
            color: #fff !important;
        }

        .sidebar .navbar-nav .nav-link.active i {
            color: #fff !important;
        }

        /* LOGOUT */
        
        .sidebar form button.nav-link {
            color: #F5EFE8 !important;
            border: none;
            cursor: pointer;
        }

        .sidebar form button.nav-link i {
            color: #E0D1C3 !important;
        }

        .sidebar form button.nav-link:hover {
            background-color: #817368 !important;
            color: #fff !important;
        }

        .sidebar form button.nav-link:hover i {
            color: #fff !important;
        }

        /* CONTENT */
        .content {
            position: relative;
            width: auto !important;
            max-width: none !important;
            min-width: 0;
            min-height: 100vh;
            margin: 0 !important;
            padding: 0 !important;
            flex: 1 1 auto !important;
            background-color: #fff;
            overflow-x: hidden;
            transition: width .3s ease;
        }

        /* TOP NAVBAR */
        .content > .navbar {
            width: 100% !important;
            height: 70px;
            margin: 0 !important;
            padding-left: 25px !important;
            padding-right: 25px !important;
            background-color: #F5EFE8 !important;
            border-bottom: 1px solid #E8DED4;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .05);
            position: sticky;
            top: 0;
            z-index: 999;
        }

        .content > .navbar .sidebar-toggler {
            width: 45px;
            height: 45px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #6F6258;
            background-color: #fff;
            border-radius: 50%;
            font-size: 20px;
            text-decoration: none;
            transition: all .2s ease;
            flex-shrink: 0;
            cursor: pointer;
        }

        .content > .navbar .sidebar-toggler:hover {
            color: #fff;
            background-color: #6F6258;
        }

        .content > .navbar h5 {
            margin: 0;
            color: #6F6258 !important;
            font-weight: 600;
        }

        /* ROLE NAVBAR */
        .content > .navbar .nav-link {
            color: #6F6258;
            display: flex;
            align-items: center;
        }

        .content > .navbar .nav-link:hover {
            color: #8B7A6D;
        }

        /* DROPDOWN */
        .content > .navbar .dropdown-menu {
            min-width: 180px;
            margin-top: 8px;
            padding: 8px 0;
            border: none;
            background-color: #fff !important;
            box-shadow: 0 5px 20px rgba(0, 0, 0, .10);
        }

        .content > .navbar .dropdown-item {
            color: #6F6258;
            padding: 10px 16px;
        }

        .content > .navbar .dropdown-item:hover {
            background-color: #E8DED4;
            color: #6F6258;
        }

        .content > .navbar .dropdown-item i {
            color: #8B7A6D;
        }

        .content > .navbar .dropdown-divider {
            border-color: #E8DED4;
        }

        .content > .container-fluid,
        .content > .container,
        .content > .container-xxl {
            max-width: 100% !important;
        }

        /* FOOTER */
        .content .bg-light {
            background-color: #F5EFE8 !important;
        }

        .content .bg-light a {
            color: #6F6258;
        }

        .content .bg-light a:hover {
            color: #8B7A6D;
        }

        .back-to-top {
            background-color: #009CFF !important;
            border-color: #009CFF !important;
        }

        /* DESKTOP SIDEBAR COLLAPSE */
        @media (min-width: 992px) {
            body.sidebar-collapsed .sidebar {
                width: 80px !important;
                min-width: 80px !important;
                max-width: 80px !important;
                flex: 0 0 80px !important;
            }

            body.sidebar-collapsed .sidebar .navbar-brand {
                width: 100%;
                margin-left: 0 !important;
                margin-right: 0 !important;
                text-align: center;
            }

            body.sidebar-collapsed .sidebar .navbar-brand h3 {
                font-size: 0 !important;
                text-align: center;
            }

            body.sidebar-collapsed .sidebar .navbar-brand h3 i {
                font-size: 25px !important;
                margin-right: 0 !important;
            }

            body.sidebar-collapsed .sidebar .user-role-container {
                width: 100%;
                margin-left: 0 !important;
                margin-right: 0 !important;
                text-align: center;
            }

            body.sidebar-collapsed .sidebar .user-role {
                font-size: 0 !important;
            }

            body.sidebar-collapsed .sidebar .navbar-nav .nav-link {
                width: 60px !important;
                margin-left: 10px !important;
                margin-right: 10px !important;
                padding-left: 0 !important;
                padding-right: 0 !important;
                justify-content: center;
                font-size: 0 !important;
            }

            body.sidebar-collapsed .sidebar .navbar-nav .nav-link i {
                margin-right: 0 !important;
                font-size: 16px !important;
                width: auto !important;
                min-width: auto !important;
            }

            body.sidebar-collapsed .sidebar form button.nav-link {
                width: 60px !important;
                margin-left: 10px !important;
                margin-right: 10px !important;
                padding-left: 0 !important;
                padding-right: 0 !important;
                justify-content: center;
                font-size: 0 !important;
            }

            body.sidebar-collapsed .sidebar form button.nav-link i {
                margin-right: 0 !important;
                font-size: 16px !important;
            }
        }

        /* TABLET / MOBILE */
        @media (max-width: 991.98px) {
            .sidebar {
                position: fixed !important;
                top: 0 !important;
                left: -250px !important;
                width: 250px !important;
                min-width: 250px !important;
                max-width: 250px !important;
                height: 100vh !important;
                z-index: 1050 !important;
                transition: left .3s ease !important;
            }

            body.sidebar-mobile-open .sidebar {
                left: 0 !important;
            }

            .content {
                width: 100% !important;
                margin-left: 0 !important;
            }

            body.sidebar-mobile-open::before {
                content: "";
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, .35);
                z-index: 1040;
            }
        }

        @media (max-width: 575.98px) {
            .content > .navbar {
                padding-left: 15px !important;
                padding-right: 15px !important;
            }

            .content > .navbar h5 {
                font-size: 16px;
            }

            .content > .navbar .sidebar-toggler {
                width: 40px;
                height: 40px;
            }
        }
    </style>
</head>

<body>

    <div class="container-xxl position-relative bg-white d-flex p-0">

        <!-- SPINNER -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50
            d-flex align-items-center justify-content-center">

            <div class="spinner-border text-primary"
                style="width: 3rem; height: 3rem;"
                role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <!-- SIDEBAR -->
        <div class="sidebar pb-3">
            <nav class="navbar bg-light navbar-light">

                <!-- LOGO -->
                <a href="{{ route('dashboard') }}" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">
                        <i class="fa fa-school me-2"></i>
                        SEKOLAH
                    </h3>
                </a>

                <!-- ROLE SIDEBAR TANPA FOTO -->
                <div class="user-role-container ms-4 mb-4">
                    <h6 class="user-role mb-0">
                        {{ ucfirst(strtolower(Auth::user()->role ?? 'User')) }}
                    </h6>
                </div>

                <!-- MENU SIDEBAR -->
                <div class="navbar-nav w-100">

                    <!-- DASHBOARD -->
                    <a href="{{ route('dashboard') }}" class="nav-item nav-link">
                        <i class="fa fa-tachometer-alt me-2"></i>
                        Dashboard
                    </a>

                    <!-- SISWA -->
                    <a href="{{ route('siswa.index') }}" class="nav-item nav-link">
                        <i class="fa fa-user-graduate me-2"></i>
                        Data Siswa
                    </a>

                    <!-- GURU -->
                    <a href="{{ route('admin.guru.index') }}" class="nav-item nav-link">
                        <i class="fa fa-chalkboard-teacher me-2"></i>
                        Data Guru
                    </a>

                    <!-- GALERI -->
                    <a href="{{ route('admin.galeri.index') }}" class="nav-item nav-link">
                        <i class="fa fa-images me-2"></i>
                        Galeri
                    </a>

                    <!-- BERITA -->
                    <a href="{{ route('admin.berita.index') }}" class="nav-item nav-link">
                        <i class="fa fa-newspaper me-2"></i>
                        Berita
                    </a>

                    <!-- EKSTRAKURIKULER -->
                    <a href="{{ route('eskul.index') }}" class="nav-item nav-link">
                        <i class="fa fa-futbol me-2"></i>
                        Ekstrakurikuler
                    </a>

                    <!-- PROFIL SEKOLAH -->
                    <a href="{{ route('profil.index') }}" class="nav-item nav-link">
                        <i class="fa fa-school me-2"></i>
                        Profil Sekolah
                    </a>

                    <!-- LOGOUT -->
                    <form action="{{ route('logout') }}" method="POST" class="w-100">
                        @csrf

                        <button type="submit"
                            class="nav-item nav-link border-0 bg-transparent w-100 text-start">
                            <i class="fa fa-sign-out-alt me-2"></i>
                            Logout
                        </button>
                    </form>

                </div>
            </nav>
        </div>

        <!-- CONTENT -->
        <div class="content">

            <!-- TOP NAVBAR -->
            <nav class="navbar navbar-expand bg-light navbar-light px-4 py-0">

                <!-- HAMBURGER -->
                <a href="#" class="sidebar-toggler flex-shrink-0" id="sidebarToggle">
                    <i class="fa fa-bars"></i>
                </a>

                <!-- JUDUL -->
                <div class="d-none d-md-flex ms-4">
                    <h5 class="mb-0">Sistem Informasi Sekolah</h5>
                </div>

                <!-- ROLE NAVBAR TANPA FOTO -->
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">

                        <a href="#" class="nav-link dropdown-toggle"
                            data-bs-toggle="dropdown">

                            <span>
                                {{ ucfirst(strtolower(Auth::user()->role ?? 'User')) }}
                            </span>

                        </a>

                        <!-- DROPDOWN -->
                        <div class="dropdown-menu dropdown-menu-end bg-light rounded-bottom m-0">

                            <div class="px-3 py-2">
                                <strong>
                                    {{ ucfirst(strtolower(Auth::user()->role ?? 'User')) }}
                                </strong>
                            </div>

                            <div class="dropdown-divider"></div>

                            <!-- LOGOUT -->
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf

                        
                            </form>

                        </div>
                    </div>
                </div>
            </nav>

            <!-- ISI HALAMAN -->
            @yield('content')

            <!-- FOOTER -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">

                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy;
                            <a href="{{ route('dashboard') }}">
                                Sistem Informasi Sekolah
                            </a>
                            , All Right Reserved.
                        </div>

                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            Sistem Informasi Sekolah
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- BACK TO TOP -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top">
            <i class="bi bi-arrow-up"></i>
        </a>

    </div>

    <!-- JAVASCRIPT -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- CUSTOM HAMBURGER -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const toggle = document.getElementById('sidebarToggle');
            const sidebar = document.querySelector('.sidebar');

            if (!toggle || !sidebar) {
                return;
            }

            toggle.addEventListener('click', function (e) {
                e.preventDefault();

                if (window.innerWidth >= 992) {
                    document.body.classList.toggle('sidebar-collapsed');
                } else {
                    document.body.classList.toggle('sidebar-mobile-open');
                }
            });

            document.addEventListener('click', function (e) {
                if (window.innerWidth >= 992) {
                    return;
                }

                if (!document.body.classList.contains('sidebar-mobile-open')) {
                    return;
                }

                if (!sidebar.contains(e.target) && !toggle.contains(e.target)) {
                    document.body.classList.remove('sidebar-mobile-open');
                }
            });

            window.addEventListener('resize', function () {
                if (window.innerWidth >= 992) {
                    document.body.classList.remove('sidebar-mobile-open');
                } else {
                    document.body.classList.remove('sidebar-collapsed');
                }
            });

        });
    </script>

</body>
</html>