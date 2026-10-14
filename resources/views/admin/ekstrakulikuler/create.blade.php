@extends('layouts.template')

@section('content')

<div class="container-fluid pt-4 px-4">

    <div class="bg-light rounded p-4">

        <div class="d-flex align-items-center mb-4">

            <a href="{{ route('eskul.index') }}"
               class="btn btn-secondary me-3">

                <i class="fa fa-arrow-left"></i>

            </a>

            <div>

                <h4 class="mb-1">
                    Tambah Ekstrakurikuler
                </h4>

                <p class="text-muted mb-0">
                    Tambahkan data ekstrakurikuler baru
                </p>

            </div>

        </div>


        @if($errors->any())

            <div class="alert alert-danger">

                <ul class="mb-0">

                    @foreach($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif


        <form action="{{ route('eskul.store') }}"
              method="POST">

            @csrf


            <div class="mb-3">

                <label class="form-label">
                    Nama Ekstrakurikuler
                </label>

                <input type="text"
                       name="nama"
                       class="form-control"
                       value="{{ old('nama') }}"
                       placeholder="Contoh: Pramuka"
                       required>

            </div>


            <div class="mb-3">

                <label class="form-label">
                    Pembina
                </label>

                <input type="text"
                       name="pembina"
                       class="form-control"
                       value="{{ old('pembina') }}"
                       placeholder="Nama pembina">

            </div>


            <div class="row">

                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        Hari
                    </label>

                    <input type="text"
                           name="hari"
                           class="form-control"
                           value="{{ old('hari') }}"
                           placeholder="Contoh: Jumat">

                </div>


                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        Jam
                    </label>

                    <input type="text"
                           name="jam"
                           class="form-control"
                           value="{{ old('jam') }}"
                           placeholder="Contoh: 13.00 - 15.00">

                </div>

            </div>


            <div class="mb-3">

                <label class="form-label">
                    Deskripsi
                </label>

                <textarea name="deskripsi"
                          class="form-control"
                          rows="5"
                          placeholder="Deskripsi ekstrakurikuler">{{ old('deskripsi') }}</textarea>

            </div>


            <button type="submit"
                    class="btn btn-primary">

                <i class="fa fa-save me-2"></i>
                Simpan

            </button>

        </form>

    </div>

</div>

@endsection