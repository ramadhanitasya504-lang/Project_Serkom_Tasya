@extends('layouts.template')

@section('content')

<div class="container-fluid">

    <!-- Judul -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">

        <h1 class="h3 mb-0 text-gray-800">
            Tambah Data Guru
        </h1>

        <a href="{{ route('admin.guru.index') }}"
           class="btn btn-secondary btn-sm shadow-sm">

            <i class="fas fa-arrow-left fa-sm text-white-50"></i>
            Kembali

        </a>

    </div>

    <!-- Pesan sukses -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- Card -->
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Form Tambah Guru
            </h6>
        </div>

        <div class="card-body">

            <form action="{{ route('admin.guru.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <!-- Nama Guru -->
                <div class="mb-3">
                    <label for="nama_guru" class="form-label">
                        Nama Guru
                    </label>

                    <input type="text"
                           name="nama_guru"
                           id="nama_guru"
                           class="form-control @error('nama_guru') is-invalid @enderror"
                           value="{{ old('nama_guru') }}"
                           maxlength="40"
                           placeholder="Masukkan nama guru"
                           required>

                    @error('nama_guru')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- NIP -->
                <div class="mb-3">
                    <label for="nip" class="form-label">
                        NIP <small class="text-muted">(Opsional)</small>
                    </label>

                    <input type="text"
                           name="nip"
                           id="nip"
                           class="form-control @error('nip') is-invalid @enderror"
                           value="{{ old('nip') }}"
                           maxlength="15"
                           placeholder="Masukkan NIP">

                    @error('nip')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Mata Pelajaran -->
                <div class="mb-3">
                    <label for="mapel" class="form-label">
                        Mata Pelajaran
                    </label>

                    <input type="text"
                           name="mapel"
                           id="mapel"
                           class="form-control @error('mapel') is-invalid @enderror"
                           value="{{ old('mapel') }}"
                           maxlength="40"
                           placeholder="Contoh: Pemrograman Web"
                           required>

                    @error('mapel')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Foto Guru -->
                <div class="mb-4">
                    <label for="foto" class="form-label">
                        Foto Guru
                    </label>

                    <input type="file"
                           name="foto"
                           id="foto"
                           class="form-control @error('foto') is-invalid @enderror"
                           accept=".jpg,.jpeg,.png">

                    <small class="text-muted">
                        Format JPG, JPEG, PNG. Maksimal 2 MB.
                    </small>

                    @error('foto')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Tombol -->
                <div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i>
                        Simpan
                    </button>

                    <a href="{{ route('admin.guru.index') }}"
                       class="btn btn-secondary">
                        Batal
                    </a>
                </div>

            </form>

        </div>
    </div>

</div>

@endsection