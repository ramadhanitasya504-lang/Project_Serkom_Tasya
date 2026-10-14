@extends('layouts.template')

@section('content')

<div class="container-fluid">

    <div class="d-flex align-items-center justify-content-between mb-4">

        <div>
            <h1 class="h3 mb-1 text-gray-800">
                Tambah Foto Galeri
            </h1>

            <p class="mb-0 text-muted">
                Tambahkan dokumentasi kegiatan sekolah
            </p>
        </div>

        <a
            href="{{ route('admin.galeri.index') }}"
            class="btn btn-secondary"
        >
            <i class="fas fa-arrow-left"></i>
            Kembali
        </a>

    </div>


    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow border-0">

                <div class="card-body p-4">

                    @if($errors->any())

                        <div class="alert alert-danger">

                            <strong>Oops!</strong>

                            <ul class="mb-0 mt-2">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>

                        </div>

                    @endif


                    <form
                        action="{{ route('admin.galeri.store') }}"
                        method="POST"
                        enctype="multipart/form-data"
                    >

                        @csrf


                        {{-- Judul --}}
                        <div class="mb-3">

                            <label class="form-label">
                                Judul Foto
                            </label>

                            <input
                                type="text"
                                name="judul"
                                class="form-control"
                                placeholder="Contoh: Kegiatan Pramuka"
                                value="{{ old('judul') }}"
                                required
                            >

                        </div>


                        {{-- Kategori --}}
                        <div class="mb-3">

                            <label class="form-label">
                                Kategori
                            </label>

                            <select
                                name="kategori"
                                class="form-select"
                                required
                            >

                                <option value="">
                                    -- Pilih Kategori --
                                </option>

                                <option value="Sekolah">
                                    Sekolah
                                </option>

                                <option value="Ekstrakurikuler">
                                    Ekstrakurikuler
                                </option>

                                <option value="Kegiatan">
                                    Kegiatan
                                </option>

                                <option value="Prestasi">
                                    Prestasi
                                </option>

                            </select>

                        </div>


                        {{-- Tanggal --}}
                        <div class="mb-3">

                            <label class="form-label">
                                Tanggal
                            </label>

                            <input
                                type="date"
                                name="tanggal"
                                class="form-control"
                                value="{{ old('tanggal') }}"
                                required
                            >

                        </div>


                        {{-- Foto --}}
                        <div class="mb-4">

                            <label class="form-label">
                                Foto
                            </label>

                            <input
                                type="file"
                                name="foto"
                                class="form-control"
                                accept="image/png,image/jpeg,image/jpg,image/webp"
                                required
                            >

                            <small class="text-muted">
                                Format JPG, JPEG, PNG, atau WEBP. Maksimal 2 MB.
                            </small>

                        </div>


                        {{-- Tombol --}}
                        <div class="d-flex justify-content-end gap-2">

                            <a
                                href="{{ route('admin.galeri.index') }}"
                                class="btn btn-secondary"
                            >
                                Batal
                            </a>

                            <button
                                type="submit"
                                class="btn btn-primary"
                            >
                                <i class="fas fa-save"></i>
                                Simpan Foto
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection