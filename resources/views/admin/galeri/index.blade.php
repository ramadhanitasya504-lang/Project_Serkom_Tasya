@extends('layouts.template')

@section('content')

<div class="container-fluid">

    {{-- Judul --}}
    <div class="d-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-1 text-gray-800">Galeri</h1>
            <p class="mb-0 text-muted">
                Dokumentasi kegiatan dan lingkungan sekolah
            </p>
        </div>

        <a href="{{ route('admin.galeri.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i>
            Tambah Foto
        </a>
    </div>


    {{-- Pesan berhasil --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    {{-- Galeri --}}
    <div class="row">

        @forelse($galeri as $item)

            <div class="col-xl-4 col-lg-4 col-md-6 mb-4">

                <div class="card shadow h-100 border-0">

                    {{-- Foto --}}
                    <img
                        src="{{ asset('storage/' . $item->foto) }}"
                        class="card-img-top"
                        style="height: 230px; object-fit: cover;"
                        alt="{{ $item->judul }}"
                    >

                    <div class="card-body">

                        {{-- Kategori --}}
                        <span class="badge bg-primary mb-2">
                            {{ $item->kategori }}
                        </span>

                        {{-- Judul --}}
                        <h5 class="card-title">
                            {{ $item->judul }}
                        </h5>

                        {{-- Tanggal --}}
                        <p class="text-muted mb-3">
                            <i class="far fa-calendar-alt"></i>
                            {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}
                        </p>

                        {{-- Tombol --}}
                        <div class="d-flex gap-2">

                            <a
                                href="{{ route('admin.galeri.edit', $item->id_galeri) }}"
                                class="btn btn-warning btn-sm"
                            >
                                <i class="fas fa-edit"></i>
                                Edit
                            </a>

                            <form
                                action="{{ route('admin.galeri.destroy', $item->id_galeri) }}"
                                method="POST"
                            >
                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus foto ini?')"
                                >
                                    <i class="fas fa-trash"></i>
                                    Hapus
                                </button>
                            </form>

                        </div>

                    </div>

                </div>

            </div>

        @empty

            <div class="col-12">

                <div class="card shadow border-0">
                    <div class="card-body text-center py-5">

                        <i class="fas fa-images fa-3x text-muted mb-3"></i>

                        <h5>Belum Ada Foto</h5>

                        <p class="text-muted">
                            Belum ada dokumentasi yang ditambahkan ke galeri.
                        </p>

                        <a
                            href="{{ route('admin.galeri.create') }}"
                            class="btn btn-primary"
                        >
                            <i class="fas fa-plus"></i>
                            Tambah Foto Pertama
                        </a>

                    </div>
                </div>

            </div>

        @endforelse

    </div>

</div>

@endsection