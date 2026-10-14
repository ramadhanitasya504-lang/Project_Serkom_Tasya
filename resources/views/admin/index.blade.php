@extends('layouts.template')

@section('content')

<!-- Dashboard Cards Start -->
<div class="container-fluid pt-4 px-4">

    <div class="row g-4">

        <!-- DATA SISWA -->
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-user-graduate fa-3x text-primary"></i>

                <div class="ms-3">
                    <p class="mb-2">Data Siswa</p>
                    <h6 class="mb-0">Siswa</h6>
                </div>
            </div>
        </div>


        <!-- DATA GURU -->
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chalkboard-teacher fa-3x text-primary"></i>

                <div class="ms-3">
                    <p class="mb-2">Data Guru</p>
                    <h6 class="mb-0">Guru</h6>
                </div>
            </div>
        </div>


        <!-- GALERI -->
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-images fa-3x text-primary"></i>

                <div class="ms-3">
                    <p class="mb-2">Galeri</p>
                    <h6 class="mb-0">Dokumentasi</h6>
                </div>
            </div>
        </div>


        <!-- PENGELOLA -->
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-users fa-3x text-primary"></i>

                <div class="ms-3">
                    <p class="mb-2">Pengelola</p>
                    <h6 class="mb-0">Admin</h6>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- Dashboard Cards End -->


<!-- Welcome Start -->
<div class="container-fluid pt-4 px-4">

    <div class="bg-light rounded p-4">

        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">
                Dashboard Sistem Informasi Sekolah
            </h6>
        </div>

        <div class="row align-items-center">

            <div class="col-md-8">

                <h3 class="mb-3">
                    Selamat Datang 👋
                </h3>

                <p class="mb-0">
                    Selamat datang di Sistem Informasi Sekolah.
                    Gunakan menu di sebelah kiri untuk mengelola data siswa,
                    guru, profil sekolah, dan data pengelola.
                </p>

            </div>

            <div class="col-md-4 text-center">

                <i class="fa fa-school text-primary"
                    style="font-size: 100px;">
                </i>

            </div>

        </div>

    </div>

</div>
<!-- Welcome End -->


<!-- Quick Menu Start -->
<div class="container-fluid pt-4 px-4">

    <div class="row g-4">

        <!-- DATA SISWA -->
        <div class="col-md-6 col-xl-3">

            <a href="{{ route('siswa.index') }}"
                class="text-decoration-none">

                <div class="bg-light rounded p-4 text-center">

                    <i class="fa fa-user-graduate fa-3x text-primary mb-3"></i>

                    <h6>
                        Data Siswa
                    </h6>

                    <small class="text-muted">
                        Kelola data siswa
                    </small>

                </div>

            </a>

        </div>


        <!-- DATA GURU -->
        <div class="col-md-6 col-xl-3">

            <a href="{{ route('admin.guru.index') }}"
                class="text-decoration-none">

                <div class="bg-light rounded p-4 text-center">

                    <i class="fa fa-chalkboard-teacher fa-3x text-primary mb-3"></i>

                    <h6>
                        Data Guru
                    </h6>

                    <small class="text-muted">
                        Kelola data guru
                    </small>

                </div>

            </a>

        </div>


        <!-- PROFIL SEKOLAH -->
        <div class="col-md-6 col-xl-3">

            <a href="{{ route('profil.index') }}"
                class="text-decoration-none">

                <div class="bg-light rounded p-4 text-center">

                    <i class="fa fa-school fa-3x text-primary mb-3"></i>

                    <h6>
                        Profil Sekolah
                    </h6>

                    <small class="text-muted">
                        Kelola profil sekolah
                    </small>

                </div>

            </a>

        </div>


        <!-- DATA PENGELOLA -->
        <div class="col-md-6 col-xl-3">

            <a href="{{ route('user.index') }}"
                class="text-decoration-none">

                <div class="bg-light rounded p-4 text-center">

                    <i class="fa fa-users-cog fa-3x text-primary mb-3"></i>

                    <h6>
                        Data Pengelola
                    </h6>

                    <small class="text-muted">
                        Kelola akun pengelola
                    </small>

                </div>

            </a>

        </div>

    </div>

</div>
<!-- Quick Menu End -->


@endsection