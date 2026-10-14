@extends('layouts.template')

@section('content')

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">

        <h1 class="h3 mb-0 text-gray-800">
            Data Siswa
        </h1>

        <a href="{{ route('siswa.create') }}"
           class="btn btn-primary btn-sm">

            <i class="fas fa-plus"></i>
            Tambah Siswa

        </a>

    </div>


    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif


    <div class="card shadow">

        <div class="card-header">

            <h6 class="m-0 font-weight-bold text-primary">
                Data Siswa
            </h6>

        </div>


        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered">

                    <thead class="table-primary">

                        <tr>

                            <th>No</th>
                            <th>NISN</th>
                            <th>Nama Siswa</th>
                            <th>Jenis Kelamin</th>
                            <th>Tahun Masuk</th>
                            <th>Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($siswas as $siswa)

                        <tr>

                            <td>
                                {{ $loop->iteration }}
                            </td>

                            <td>
                                {{ $siswa->nisn }}
                            </td>

                            <td>
                                {{ $siswa->nama_siswa }}
                            </td>

                            <td>
                                {{ $siswa->jenis_kelamin }}
                            </td>

                            <td>
                                {{ $siswa->tahun_masuk }}
                            </td>

                            <td>

                                <a href="{{ route('siswa.edit', $siswa->id_siswa) }}"
                                   class="btn btn-warning btn-sm">

                                    <i class="fas fa-edit"></i>

                                </a>


                                <form action="{{ route('siswa.destroy', $siswa->id_siswa) }}"
                                      method="POST"
                                      class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus data ini?')">

                                        <i class="fas fa-trash"></i>

                                    </button>

                                </form>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td colspan="6"
                                class="text-center">

                                Belum ada data siswa.

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection