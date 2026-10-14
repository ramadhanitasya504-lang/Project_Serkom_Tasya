@extends('layouts.template')

@section('content')

<div class="container-fluid pt-4 px-4">

    <div class="bg-light rounded p-4">

        <div class="d-flex align-items-center justify-content-between mb-4">

            <div>
                <h4 class="mb-1">
                    <i class="fa fa-futbol me-2"></i>
                    Data Ekstrakurikuler
                </h4>

                <p class="text-muted mb-0">
                    Kelola data ekstrakurikuler sekolah
                </p>
            </div>

            <a href="{{ route('eskul.create') }}"
               class="btn btn-primary">

                <i class="fa fa-plus me-2"></i>
                Tambah Ekstrakurikuler

            </a>

        </div>


        @if(session('success'))

            <div class="alert alert-success">
                {{ session('success') }}
            </div>

        @endif


        <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle">

                <thead class="table-light">

                    <tr>
                        <th>No</th>
                        <th>Nama Ekstrakurikuler</th>
                        <th>Pembina</th>
                        <th>Hari</th>
                        <th>Jam</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($ekstrakurikuler as $item)

                        <tr>

                            <td>
                                {{ $loop->iteration }}
                            </td>

                            <td>
                                <strong>
                                    {{ $item->nama }}
                                </strong>
                            </td>

                            <td>
                                {{ $item->pembina ?? '-' }}
                            </td>

                            <td>
                                {{ $item->hari ?? '-' }}
                            </td>

                            <td>
                                {{ $item->jam ?? '-' }}
                            </td>

                            <td>
                                {{ $item->deskripsi ?? '-' }}
                            </td>

                            <td>

                                <a href="{{ route('eskul.edit', $item->id) }}"
                                   class="btn btn-sm btn-warning">

                                    <i class="fa fa-edit"></i>

                                </a>


                                <form action="{{ route('eskul.destroy', $item->id) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('Yakin ingin menghapus data ini?');">

                                    @csrf

                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-sm btn-danger">

                                        <i class="fa fa-trash"></i>

                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="7"
                                class="text-center py-4">

                                Belum ada data ekstrakurikuler.

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection