@extends('layouts.template')

@section('content')

<div class="container-fluid">

    <!-- Judul -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            Edit Profil Sekolah
        </h1>

        <a href="{{ route('profil.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i>
            Kembali
        </a>
    </div>

    <!-- Form -->
    <div class="card shadow mb-4">
        <div class="card-body">

            {{-- Pesan error --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Data belum bisa disimpan:</strong>
                    <ul class="mb-0 mt-2">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Pesan sukses --}}
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form
                action="{{ route('profil.update') }}"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf
                @method('PUT')

                <!-- Nama Sekolah -->
                <div class="mb-3">
                    <label class="form-label">
                        Nama Sekolah
                    </label>

                    <input
                        type="text"
                        name="nama_sekolah"
                        class="form-control"
                        value="{{ old('nama_sekolah', $profil->nama_sekolah ?? '') }}"
                        placeholder="Masukkan nama sekolah"
                        required
                    >
                </div>

                <!-- Kepala Sekolah -->
                <div class="mb-3">
                    <label class="form-label">
                        Kepala Sekolah
                    </label>

                    <input
                        type="text"
                        name="kepala_sekolah"
                        class="form-control"
                        value="{{ old('kepala_sekolah', $profil->kepala_sekolah ?? '') }}"
                        placeholder="Masukkan nama kepala sekolah"
                        required
                    >
                </div>

                <!-- NPSN -->
                <div class="mb-3">
                    <label class="form-label">
                        NPSN
                    </label>

                    <input
                        type="text"
                        name="npsn"
                        class="form-control"
                        value="{{ old('npsn', $profil->npsn ?? '') }}"
                        placeholder="Masukkan NPSN"
                    >
                </div>

                <!-- Alamat -->
                <div class="mb-3">
                    <label class="form-label">
                        Alamat Sekolah
                    </label>

                    <textarea
                        name="alamat"
                        class="form-control"
                        rows="3"
                        placeholder="Masukkan alamat sekolah"
                        required
                    >{{ old('alamat', $profil->alamat ?? '') }}</textarea>
                </div>

                <!-- Kontak -->
                <div class="mb-3">
                    <label class="form-label">
                        Kontak / No. Telepon
                    </label>

                    <input
                        type="text"
                        name="kontak"
                        class="form-control"
                        value="{{ old('kontak', $profil->kontak ?? '') }}"
                        placeholder="Masukkan nomor telepon"
                    >
                </div>

                <!-- Tahun Berdiri -->
                <div class="mb-3">
                    <label class="form-label">
                        Tahun Berdiri
                    </label>

                    <input
                        type="number"
                        name="tahun_berdiri"
                        class="form-control"
                        value="{{ old('tahun_berdiri', $profil->tahun_berdiri ?? '') }}"
                        placeholder="Contoh: 2005"
                    >
                </div>

                <!-- Visi & Misi -->
                <div class="mb-3">
                    <label class="form-label">
                        Visi & Misi
                    </label>

                    <textarea
                        name="visi_misi"
                        class="form-control"
                        rows="6"
                        placeholder="Masukkan visi dan misi sekolah"
                    >{{ old('visi_misi', $profil->visi_misi ?? '') }}</textarea>
                </div>

                <!-- Deskripsi -->
                <div class="mb-3">
                    <label class="form-label">
                        Deskripsi Sekolah
                    </label>

                    <textarea
                        name="deskripsi"
                        class="form-control"
                        rows="5"
                        placeholder="Masukkan deskripsi sekolah"
                    >{{ old('deskripsi', $profil->deskripsi ?? '') }}</textarea>
                </div>

                <!-- Foto -->
                <div class="mb-4">
                    <label class="form-label">
                        Foto Sekolah
                    </label>

                    @if (!empty($profil->foto))

                        <div class="mb-3">
                            <img
                                src="{{ asset('storage/' . $profil->foto) }}"
                                alt="Foto Sekolah"
                                width="250"
                                height="160"
                                style="object-fit: cover; border-radius: 10px;"
                            >
                        </div>

                    @endif

                    <input
                        type="file"
                        name="foto"
                        class="form-control"
                        accept="image/png,image/jpeg,image/jpg,image/webp"
                    >

                    <small class="text-muted">
                        Kosongkan jika tidak ingin mengganti foto.
                        Maksimal 2 MB.
                    </small>
                </div>

                <!-- Logo -->
                <div class="mb-4">
                    <label class="form-label">
                        Logo Sekolah
                    </label>

                    @if (!empty($profil->logo))

                        <div class="mb-3">
                            <img
                                src="{{ asset('storage/' . $profil->logo) }}"
                                alt="Logo Sekolah"
                                width="150"
                                height="150"
                                style="object-fit: contain; border-radius: 10px; border: 1px solid #ddd; padding: 5px;"
                            >
                        </div>

                    @endif

                    <input
                        type="file"
                        name="logo"
                        class="form-control"
                        accept="image/png,image/jpeg,image/jpg,image/webp"
                    >

                    <small class="text-muted">
                        Kosongkan jika tidak ingin mengganti logo.
                        Maksimal 2 MB.
                    </small>
                </div>

                <!-- Tombol -->
                <div class="text-end">

                    <a
                        href="{{ route('profil.index') }}"
                        class="btn btn-secondary"
                    >
                        <i class="fas fa-times"></i>
                        Batal
                    </a>

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        <i class="fas fa-save"></i>
                        Simpan Perubahan
                    </button>

                </div>

            </form>

        </div>
    </div>

</div>

@endsection