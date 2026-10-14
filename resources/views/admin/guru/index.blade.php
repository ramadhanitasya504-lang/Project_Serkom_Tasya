@extends('layouts.template')

@section('content')

<div class="container-fluid">

    <!-- Judul -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">

        <h1 class="h3 mb-0 text-gray-800">
            Data Guru
        </h1>

        <a href="{{ route('admin.guru.create') }}"
           class="btn btn-primary btn-sm shadow-sm">

            <i class="fas fa-plus fa-sm text-white-50"></i>
            Tambah Guru

        </a>

    </div>


    <!-- Pesan sukses -->
    @if(session('success'))

        <div class="alert alert-success alert-dismissible fade show">

            {{ session('success') }}

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
            </button>

        </div>

    @endif


    <!-- Card -->
    <div class="card shadow mb-4">

        <div class="card-header py-3">

            <h6 class="m-0 font-weight-bold text-primary">
                Data Guru
            </h6>

        </div>


        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-primary">

                        <tr>

                            <th width="5%">No</th>
                            <th width="12%">Foto</th>
                            <th>Nama Guru</th>
                            <th>NIP</th>
                            <th>Mata Pelajaran</th>
                            <th width="15%">Aksi</th>

                        </tr>

                    </thead>


                    <tbody>

                        @forelse($gurus as $guru)

                        <tr>

                            <td class="text-center">
                                {{ $loop->iteration }}
                            </td>


                            <!-- FOTO -->
                            <td class="text-center">

                                @if($guru->foto)

                                    <img src="{{ asset('storage/guru/' . $guru->foto) }}"
                                         alt="{{ $guru->nama_guru }}"
                                         width="80"
                                         height="80"
                                         style="object-fit: cover;"
                                         class="rounded">

                                @else

                                    <span class="text-muted">
                                        Tidak ada foto
                                    </span>

                                @endif

                            </td>


                            <!-- NAMA -->
                            <td>
                                {{ $guru->nama_guru }}
                            </td>


                            <!-- NIP -->
                            <td>

                                @if($guru->nip)

                                    {{ $guru->nip }}

                                @else

                                    <span class="text-muted">
                                        -
                                    </span>

                                @endif

                            </td>


                            <!-- MAPEL -->
                            <td>
                                {{ $guru->mapel }}
                            </td>


                            <!-- AKSI -->
                            <td class="text-center">

                                <!-- Edit -->
                                <a href="{{ route('admin.guru.edit', $guru->id_guru) }}"
                                   class="btn btn-warning btn-sm">

                                    <i class="fas fa-edit"></i>

                                </a>


                                <!-- Hapus -->
                                <form action="{{ route('admin.guru.destroy', $guru->id_guru) }}"
                                      method="POST"
                                      class="d-inline">

                                    @csrf

                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus data guru ini?')">

                                        <i class="fas fa-trash"></i>

                                    </button>

                                </form>

                            </td>

                        </tr>


                        @empty

                        <tr>

                            <td colspan="6"
                                class="text-center py-4">

                                <span class="text-muted">
                                    Belum ada data guru.
                                </span>

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