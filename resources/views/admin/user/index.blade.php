@extends('layouts.template')

@section('content')

<div class="container-fluid pt-4 px-4">

    <!-- Judul Halaman -->
    <div class="d-flex align-items-center justify-content-between mb-4">

        <div>
            <h4 class="mb-1">Kelola Data User</h4>
            <p class="mb-0 text-muted">
                Daftar pengguna sistem
            </p>
        </div>

        <a href="{{ route('user.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i>
            Tambah User
        </a>

    </div>


    <!-- Alert Success -->
    @if(session('success'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">

            <i class="fas fa-check-circle me-2"></i>

            {{ session('success') }}

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
            </button>

        </div>

    @endif


    <!-- Alert Error -->
    @if($errors->any())

        <div class="alert alert-danger alert-dismissible fade show" role="alert">

            <strong>Terjadi kesalahan:</strong>

            <ul class="mb-0 mt-2">

                @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
            </button>

        </div>

    @endif


    <!-- Card -->
    <div class="bg-light rounded p-4">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <h6 class="mb-0">
                <i class="fas fa-users me-2"></i>
                Daftar Pengguna
            </h6>

            <span class="badge bg-primary">
                {{ $users->count() }} User
            </span>

        </div>


        <!-- Table -->
        <div class="table-responsive">

            <table class="table table-hover align-middle">

                <thead>

                    <tr>

                        <th width="5%">
                            No
                        </th>

                        <th>
                            Username
                        </th>

                        <th>
                            Role
                        </th>

                        <th width="25%">
                            Aksi
                        </th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($users as $index => $item)

                        <tr>

                            <!-- No -->
                            <td>
                                {{ $index + 1 }}
                            </td>


                            <!-- Username -->
                            <td>

                                <div class="d-flex align-items-center">

                                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-3"
                                         style="width: 40px; height: 40px;">

                                        <i class="fas fa-user text-white"></i>

                                    </div>

                                    <strong>
                                        {{ $item->username }}
                                    </strong>

                                </div>

                            </td>


                            <!-- Role -->
                            <td>

                                @if(strtolower($item->role) == 'admin')

                                    <span class="badge bg-primary">

                                        <i class="fas fa-user-shield me-1"></i>

                                        Admin

                                    </span>

                                @elseif(strtolower($item->role) == 'operator')

                                    <span class="badge bg-success">

                                        <i class="fas fa-user me-1"></i>

                                        Operator

                                    </span>

                                @else

                                    <span class="badge bg-secondary">

                                        {{ $item->role }}

                                    </span>

                                @endif

                            </td>


                            <!-- Aksi -->
                            <td>

                                <!-- Edit -->
                                <a href="{{ route('user.edit', ['user' => $item->id_user]) }}"
                                   class="btn btn-sm btn-warning me-1">

                                    <i class="fas fa-edit"></i>

                                    Edit

                                </a>


                                <!-- Hapus -->
                                <form action="{{ route('user.destroy', ['user' => $item->id_user]) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('Yakin ingin menghapus user ini?')">

                                    @csrf

                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-sm btn-danger">

                                        <i class="fas fa-trash"></i>

                                        Hapus

                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="4"
                                class="text-center py-5">

                                <i class="fas fa-users fa-3x text-muted mb-3"></i>

                                <p class="mb-0 text-muted">
                                    Data User belum ada.
                                </p>

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection