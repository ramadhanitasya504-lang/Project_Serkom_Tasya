@extends('layouts.template')

@section('content')

<div class="container-fluid">

    <!-- Judul -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">

        <h1 class="h3 mb-0 text-gray-800">
            Edit Data Guru
        </h1>

        <a href="{{ route('admin.guru.index') }}"
           class="btn btn-secondary btn-sm shadow-sm">

            <i class="fas fa-arrow-left fa-sm text-white-50"></i>
            Kembali

        </a>

    </div>


    <!-- Card -->
    <div class="card shadow mb-4">

        <div class="card-header py-3">

            <h6 class="m-0 font-weight-bold text-primary">
                Form Edit Guru
            </h6>

        </div>


        <div class="card-body">

            <form action="{{ route('guru.update', $guru->id_guru) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                @method('PUT')


                <!-- Nama Guru -->
                <div class="mb-3">

                    <label for="nama_guru"
                           class="form-label">

                        Nama Guru

                    </label>

                    <input type="text"
                           name="nama_guru"
                           id="nama_guru"
                           class="form-control @error('nama_guru') is-invalid @enderror"
                           value="{{ old('nama_guru', $guru->nama_guru) }}"
                           maxlength="40"
                           required>

                    @error('nama_guru')

                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                <!-- NIP -->
                <div class="mb-3">

                    <label for="nip"
                           class="form-label">

                        NIP

                        <small class="text-muted">
                            (Opsional)
                        </small>

                    </label>

                    <input type="text"
                           name="nip"
                           id="nip"
                           class="form-control @error('nip') is-invalid @enderror"
                           value="{{ old('nip', $guru->nip) }}"
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

                    <label for="mapel"
                           class="form-label">

                        Mata Pelajaran

                    </label>

                    <input type="text"
                           name="mapel"
                           id="mapel"
                           class="form-control @error('mapel') is-invalid @enderror"
                           value="{{ old('mapel', $guru->mapel) }}"
                           maxlength="40"
                           required>

                    @error('mapel')

                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                <!-- Foto Lama -->
                <div class="mb-3">

                    <label class="form-label">
                        Foto Saat Ini
                    </label>

                    <div>

                        @if($guru->foto)

                            <img src="{{ asset('storage/guru/' . $guru->foto) }}"
                                 alt="{{ $guru->nama_guru }}"
                                 width="150"
                                 height="150"
                                 style="object-fit: cover;"
                                 class="rounded border">

                        @else

                            <p class="text-muted">
                                Belum ada foto.
                            </p>

                        @endif

                    </div>

                </div>


                <!-- Foto Baru -->
                <div class="mb-4">

                    <label for="foto"
                           class="form-label">

                        Ganti Foto

                    </label>

                    <input type="file"
                           name="foto"
                           id="foto"
                           class="form-control @error('foto') is-invalid @enderror"
                           accept=".jpg,.jpeg,.png">

                    <small class="text-muted">
                        Kosongkan jika tidak ingin mengganti foto.
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

                    <button type="submit"
                            class="btn btn-primary">

                        <i class="fas fa-save"></i>
                        Update

                    </button>


                    <a href="{{ route('guru.index') }}"
                       class="btn btn-secondary">

                        Batal

                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection