@extends('layouts.template')

@section('content')

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">

        <h1 class="h3 mb-0 text-gray-800">
            Tambah Data Siswa
        </h1>

        <a href="{{ route('siswa.index') }}"
           class="btn btn-secondary btn-sm">

            <i class="fas fa-arrow-left"></i>
            Kembali

        </a>

    </div>


    <div class="card shadow">

        <div class="card-header">

            <h6 class="m-0 font-weight-bold text-primary">
                Form Tambah Siswa
            </h6>

        </div>


        <div class="card-body">

            <form action="{{ route('siswa.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf


                <!-- NISN -->
                <div class="mb-3">

                    <label class="form-label">
                        NISN
                    </label>

                    <input type="text"
                           name="nisn"
                           class="form-control"
                           value="{{ old('nisn') }}"
                           maxlength="10"
                           required>

                    @error('nisn')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror

                </div>


                <!-- Nama -->
                <div class="mb-3">

                    <label class="form-label">
                        Nama Siswa
                    </label>

                    <input type="text"
                           name="nama_siswa"
                           class="form-control"
                           value="{{ old('nama_siswa') }}"
                           maxlength="40"
                           required>

                    @error('nama_siswa')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror

                </div>


                <!-- Foto Siswa -->
                <div class="mb-3">

                    <label class="form-label">
                        Foto Siswa
                    </label>

                    <input type="file"
                           name="foto"
                           id="foto"
                           class="form-control"
                           accept=".jpg,.jpeg,.png"
                           onchange="previewFoto(event)">

                    <small class="text-muted">
                        Format: JPG, JPEG, PNG. Maksimal 2 MB.
                    </small>

                    @error('foto')
                        <small class="text-danger d-block">
                            {{ $message }}
                        </small>
                    @enderror


                    <!-- Preview Foto -->
                    <div class="mt-3">

                        <img id="preview"
                             src="#"
                             alt="Preview Foto"
                             style="
                                display: none;
                                width: 120px;
                                height: 120px;
                                object-fit: cover;
                                border-radius: 50%;
                                border: 2px solid #ddd;
                             ">

                    </div>

                </div>


                <!-- Jenis Kelamin -->
                <div class="mb-3">

                    <label class="form-label">
                        Jenis Kelamin
                    </label>

                    <select name="jenis_kelamin"
                            class="form-control"
                            required>

                        <option value="">
                            -- Pilih Jenis Kelamin --
                        </option>

                        <option value="Laki-Laki"
                            {{ old('jenis_kelamin') == 'Laki-Laki' ? 'selected' : '' }}>
                            Laki-Laki
                        </option>

                        <option value="Perempuan"
                            {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>
                            Perempuan
                        </option>

                    </select>

                    @error('jenis_kelamin')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror

                </div>


                <!-- Tahun Masuk -->
                <div class="mb-3">

                    <label class="form-label">
                        Tahun Masuk
                    </label>

                    <input type="number"
                           name="tahun_masuk"
                           class="form-control"
                           value="{{ old('tahun_masuk') }}"
                           required>

                    @error('tahun_masuk')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror

                </div>


                <!-- Tombol -->
                <button type="submit"
                        class="btn btn-primary">

                    <i class="fas fa-save"></i>
                    Simpan

                </button>

                <a href="{{ route('siswa.index') }}"
                   class="btn btn-secondary">

                    Batal

                </a>

            </form>

        </div>

    </div>

</div>


<!-- Preview Foto -->
<script>

function previewFoto(event) {

    const input = event.target;
    const preview = document.getElementById('preview');

    if (input.files && input.files[0]) {

        const reader = new FileReader();

        reader.onload = function(e) {

            preview.src = e.target.result;
            preview.style.display = 'block';

        };

        reader.readAsDataURL(input.files[0]);

    } else {

        preview.src = '#';
        preview.style.display = 'none';

    }

}

</script>

@endsection   