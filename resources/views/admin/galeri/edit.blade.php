@extends('layouts.template')

@section('content')

<div class="container-fluid">

    <div class="d-flex align-items-center justify-content-between mb-4">

        <div>
            <h1 class="h3 mb-1 text-gray-800">
                Edit Foto Galeri
            </h1>

            <p class="mb-0 text-muted">
                Ubah informasi foto galeri
            </p>
        </div>

        <a
            href="{{ route('galeri.index') }}"
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

                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>

                        </div>

                    @endif


                    <form
                        action="{{ route('galeri.update', $galeri->id_galeri) }}"
                        method="POST"
                        enctype="multipart/form-data"
                    >

                        @csrf
                        @method('PUT')


                        {{-- Judul --}}
                        <div class="mb-3">

                            <label class="form-label">
                                Judul Foto
                            </label>

                            <input
                                type="text"
                                name="judul"
                                class="form-control"
                                value="{{ old('judul', $galeri->judul) }}"
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

                                <option value="Sekolah"
                                    {{ old('kategori', $galeri->kategori) == 'Sekolah' ? 'selected' : '' }}>
                                    Sekolah
                                </option>

                                <option value="Ekstrakurikuler"
                                    {{ old('kategori', $galeri->kategori) == 'Ekstrakurikuler' ? 'selected' : '' }}>
                                    Ekstrakurikuler
                                </option>

                                <option value="Kegiatan"
                                    {{ old('kategori', $galeri->kategori) == 'Kegiatan' ? 'selected' : '' }}>
                                    Kegiatan
                                </option>

                                <option value="Prestasi"
                                    {{ old('kategori', $galeri->kategori) == 'Prestasi' ? 'selected' : '' }}>
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
                                value="{{ old('tanggal', $galeri->tanggal) }}"
                                required
                            >

                        </div>


                        {{-- Foto lama --}}
                        <div class="mb-3">

                            <label class="form-label">
                                Foto Saat Ini
                            </label>

                            <div>

                                <img
                                    src="{{ asset('storage/' . $galeri->foto) }}"
                                    width="250"
                                    height="170"
                                    style="object-fit: cover; border-radius: 10px;"
                                >

                            </div>

                        </div>


                        {{-- Ganti foto --}}
                        <div class="mb-4">

                            <label class="form-label">
                                Ganti Foto
                            </label>

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


                        {{-- Tombol --}}
                        <div class="d-flex justify-content-end gap-2">

                            <a
                                href="{{ route('galeri.index') }}"
                                class="btn btn-secondary"
                            >
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

    </div>

</div>

@endsection