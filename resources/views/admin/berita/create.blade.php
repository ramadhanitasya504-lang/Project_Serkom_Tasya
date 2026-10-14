@extends('layouts.template')

@section('content')

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">

        <h1 class="h3 mb-0 text-gray-800">
            Tambah Berita
        </h1>

        <a href="{{ route('admin.berita.index') }}"
           class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i>
            Kembali
        </a>

    </div>

    <div class="card shadow">

        <div class="card-body">

            <form action="{{ route('admin.berita.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <div class="mb-3">

                    <label class="form-label">
                        Judul Berita
                    </label>

                    <input type="text"
                           name="judul"
                           class="form-control"
                           value="{{ old('judul') }}"
                           required>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Isi Berita
                    </label>

                    <textarea name="isi"
                              class="form-control"
                              rows="6"
                              required>{{ old('isi') }}</textarea>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Tanggal
                    </label>

                    <input type="date"
                           name="tanggal"
                           class="form-control"
                           value="{{ old('tanggal') }}"
                           required>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Gambar Berita
                    </label>

                    <input type="file"
                           name="gambar"
                           class="form-control"
                           accept="image/*">

                </div>

                <button type="submit"
                        class="btn btn-primary">

                    <i class="fas fa-save"></i>
                    Simpan Berita

                </button>

            </form>

        </div>

    </div>

</div>

@endsection

