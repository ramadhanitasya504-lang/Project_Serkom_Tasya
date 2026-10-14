@extends('layouts.template')

@section('content')

<div class="container-fluid pt-4 px-4">

    <!-- Header -->
    <div class="d-flex align-items-center justify-content-between mb-4">

        <div>
            <h4 class="mb-1">Edit Data User</h4>
            <p class="mb-0 text-muted">
                Ubah data pengguna sistem
            </p>
        </div>

        <a href="{{ route('user.index') }}"
           class="btn btn-secondary">

            <i class="fas fa-arrow-left me-2"></i>
            Kembali

        </a>

    </div>


    <!-- Card -->
    <div class="bg-light rounded p-4">

        <form action="{{ route('user.update', ['user' => $user->id_user]) }}"
              method="POST">

            @csrf

            @method('PUT')


            <!-- Username -->
            <div class="mb-3">

                <label for="name" class="form-label">
                    Username
                    <span class="text-danger">*</span>
                </label>

                <input type="text"
                       class="form-control @error('name') is-invalid @enderror"
                       id="name"
                       name="name"
                       value="{{ old('name', $user->username) }}"
                       placeholder="Masukkan username"
                       required>

                @error('name')

                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                @enderror

            </div>


            <!-- Role -->
            <div class="mb-3">

                <label for="role" class="form-label">
                    Role / Hak Akses
                    <span class="text-danger">*</span>
                </label>

                <select class="form-select @error('role') is-invalid @enderror"
                        id="role"
                        name="role"
                        required>

                    <option value="Admin"
                        {{ old('role', $user->role) == 'Admin' ? 'selected' : '' }}>
                        Admin
                    </option>

                    <option value="Operator"
                        {{ old('role', $user->role) == 'Operator' ? 'selected' : '' }}>
                        Operator
                    </option>

                </select>

                @error('role')

                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                @enderror

            </div>


            <!-- Password -->
            <div class="mb-4">

                <label for="password" class="form-label">
                    Password Baru
                </label>

                <input type="password"
                       class="form-control @error('password') is-invalid @enderror"
                       id="password"
                       name="password"
                       placeholder="Kosongkan jika tidak ingin mengubah password">

                <small class="text-muted">
                    Kosongkan jika password tidak ingin diubah.
                </small>

                @error('password')

                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                @enderror

            </div>


            <!-- Tombol -->
            <div>

                <button type="submit"
                        class="btn btn-primary">

                    <i class="fas fa-save me-2"></i>
                    Simpan Perubahan

                </button>

                <a href="{{ route('user.index') }}"
                   class="btn btn-secondary">

                    Batal

                </a>

            </div>

        </form>

    </div>

</div>

@endsection