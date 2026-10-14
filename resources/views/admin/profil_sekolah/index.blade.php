@extends('layouts.template')

@section('content')

<div class="container-fluid">

    <!-- Judul -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">

        <h1 class="h3 mb-0 text-gray-800">
            Profil Sekolah
        </h1>

        <!-- Tombol Edit -->
        <a href="{{ route('profil.edit') }}" class="btn btn-primary">
            <i class="fas fa-edit"></i>
            Edit Profil
        </a>

    </div>


    <!-- Pesan Berhasil -->
    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif


    <!-- Profil Sekolah -->
    <div class="card shadow mb-4">

        <div class="card-header py-3">

            <h6 class="m-0 font-weight-bold text-primary">
                Profil {{ $profil->nama_sekolah ?? 'SMK Nusantara' }}
            </h6>

        </div>

        <div class="card-body">

            <div class="row">

                <!-- Foto -->
                <div class="col-md-5 mb-4">

                    @if(isset($profil->foto) && $profil->foto)

                        <img
                            src="{{ asset('storage/' . $profil->foto) }}"
                            class="img-fluid rounded"
                            alt="Gedung Sekolah"
                            style="width: 100%; height: 300px; object-fit: cover;"
                        >

                    @else

                        <img
                            src="https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=900&q=80"
                            class="img-fluid rounded"
                            alt="Gedung Sekolah"
                            style="width: 100%; height: 300px; object-fit: cover;"
                        >

                    @endif

                </div>


                <!-- Informasi -->
                <div class="col-md-7">

                    <h3 class="text-primary">
                        {{ $profil->nama_sekolah ?? 'SMK Nusantara' }}
                    </h3>

                    <p>
                        {{ $profil->deskripsi ?? 'SMK Nusantara merupakan sekolah menengah kejuruan yang menyediakan pendidikan dan pembelajaran untuk mempersiapkan siswa menghadapi dunia kerja.' }}
                    </p>

                    <hr>

                    <h5 class="font-weight-bold">
                        Visi
                    </h5>

                    <p>
                        {{ $profil->visi ?? 'Menjadi sekolah yang unggul, berprestasi, berkarakter, dan siap menghadapi dunia kerja.' }}
                    </p>

                    <h5 class="font-weight-bold">
                        Misi
                    </h5>

                    <ul>

                        @if(isset($profil->misi))

                            @foreach(explode("\n", $profil->misi) as $misi)

                                @if(trim($misi) != '')
                                    <li>{{ $misi }}</li>
                                @endif

                            @endforeach

                        @else

                            <li>Meningkatkan kualitas pembelajaran.</li>
                            <li>Mengembangkan keterampilan siswa.</li>
                            <li>Membentuk siswa yang disiplin dan bertanggung jawab.</li>
                            <li>Mempersiapkan siswa untuk dunia kerja.</li>

                        @endif

                    </ul>

                </div>

            </div>

        </div>

    </div>


    <!-- Informasi Sekolah -->
    <div class="row">

        <div class="col-md-4 mb-4">

            <div class="card shadow h-100">

                <div class="card-body">

                    <h5 class="font-weight-bold text-primary">
                        Nama Sekolah
                    </h5>

                    <p class="mb-0">
                        {{ $profil->nama_sekolah ?? 'SMK Nusantara' }}
                    </p>

                </div>

            </div>

        </div>


        <div class="col-md-4 mb-4">

            <div class="card shadow h-100">

                <div class="card-body">

                    <h5 class="font-weight-bold text-primary">
                        Jenjang
                    </h5>

                    <p class="mb-0">
                        {{ $profil->jenjang ?? 'Sekolah Menengah Kejuruan' }}
                    </p>

                </div>

            </div>

        </div>


        <div class="col-md-4 mb-4">

            <div class="card shadow h-100">

                <div class="card-body">

                    <h5 class="font-weight-bold text-primary">
                        Status
                    </h5>

                    <p class="mb-0">
                        {{ $profil->status ?? 'Sekolah Swasta' }}
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection