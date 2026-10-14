@extends('layouts.template')

@section('content')

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">

        <h1 class="h3 mb-0 text-gray-800">
            Edit Data Siswa
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
                Form Edit Siswa
            </h6>

        </div>


        <div class="card-body">

            <form action="{{ route('siswa.update', $siswa->id_siswa) }}"
                  method="POST">

                @csrf

                @method('PUT')


                <!-- NISN -->
                <div class="mb-3">

                    <label class="form-label">
                        NISN
                    </label>

                    <input type="text"
                           name="nisn"
                           class="form-control"
                           value="{{ old('nisn', $siswa->nisn) }}"
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
                           value="{{ old('nama_siswa', $siswa->nama_siswa) }}"
                           maxlength="40"
                           required>

                    @error('nama_siswa')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror

                </div>


                <!-- Jenis Kelamin -->
                <div class="mb-3">

                    <label class="form-label">
                        Jenis Kelamin
                    </label>

                    <select name="jenis_kelamin"
                            class="form-control"
                            required>

                        <option value="Laki-Laki"
                            {{ $siswa->jenis_kelamin == 'Laki-Laki' ? 'selected' : '' }}>
                            Laki-Laki
                        </option>

                        <option value="Perempuan"
                            {{ $siswa->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>
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
                           value="{{ old('tahun_masuk', $siswa->tahun_masuk) }}"
                           required>

                    @error('tahun_masuk')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror

                </div>


                <button type="submit"
                        class="btn btn-primary">

                    <i class="fas fa-save"></i>
                    Update

                </button>

                <a href="{{ route('siswa.index') }}"
                   class="btn btn-secondary">

                    Batal

                </a>

            </form>

        </div>

    </div>

</div>

@endsection