@extends('layouts.template')

@section('content')

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">

        <h1 class="h3 mb-0 text-gray-800">
            Data Berita
        </h1>

        <a href="{{ route('admin.berita.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i>
            Tambah Berita
        </a>

    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Daftar Berita Sekolah
            </h6>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered">

                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th width="15%">Gambar</th>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th width="20%">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($beritas as $berita)

                        <tr>

                            <td>
                                {{ $loop->iteration }}
                            </td>

                            <td>
                                @if($berita->gambar)
                                    <img
                                        src="{{ asset('uploads/berita/' . $berita->gambar) }}"
                                        width="100"
                                        height="70"
                                        style="object-fit: cover; border-radius: 8px;"
                                    >
                                @else
                                    <span class="text-muted">
                                        Tidak ada gambar
                                    </span>
                                @endif
                            </td>

                            <td>
                                {{ $berita->judul }}
                            </td>

                            <td>
                                {{ date('d-m-Y', strtotime($berita->tanggal)) }}
                            </td>

                            <td>

                                <a href="{{ route('admin.berita.edit', $berita->id_berita) }}"
                                   class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                    Edit
                                </a>

                                <form action="{{ route('admin.berita.destroy', $berita->id_berita) }}"
                                      method="POST"
                                      style="display:inline;">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus berita ini?')">

                                        <i class="fas fa-trash"></i>
                                        Hapus

                                    </button>

                                </form>

                            </td>

                        </tr>

                        @empty

                        <tr>
                            <td colspan="5" class="text-center">
                                Belum ada berita.
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
