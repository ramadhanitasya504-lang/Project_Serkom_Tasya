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
                    Edit Ekstrakurikuler
                </h4>

                <p class="text-muted mb-0">
                    Perbarui data ekstrakurikuler
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


        <form action="{{ route('eskul.update', $ekstrakurikuler->id) }}"
              method="POST">

            @csrf

            @method('PUT')


            <div class="mb-3">

                <label class="form-label">
                    Nama Ekstrakurikuler
                </label>

                <input type="text"
                       name="nama"
                       class="form-control"
                       value="{{ old('nama', $ekstrakurikuler->nama) }}"
                       required>

            </div>


            <div class="mb-3">

                <label class="form-label">
                    Pembina
                </label>

                <input type="text"
                       name="pembina"
                       class="form-control"
                       value="{{ old('pembina', $ekstrakurikuler->pembina) }}">

            </div>


            <div class="row">

                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        Hari
                    </label>

                    <input type="text"
                           name="hari"
                           class="form-control"
                           value="{{ old('hari', $ekstrakurikuler->hari) }}">

                </div>


                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        Jam
                    </label>

                    <input type="text"
                           name="jam"
                           class="form-control"
                           value="{{ old('jam', $ekstrakurikuler->jam) }}">

                </div>

            </div>


            <div class="mb-3">

                <label class="form-label">
                    Deskripsi
                </label>

                <textarea name="deskripsi"
                          class="form-control"
                          rows="5">{{ old('deskripsi', $ekstrakurikuler->deskripsi) }}</textarea>

            </div>


            <button type="submit"
                    class="btn btn-primary">

                <i class="fa fa-save me-2"></i>
                Simpan Perubahan

            </button>

        </form>

    </div>

</div>

@endsection