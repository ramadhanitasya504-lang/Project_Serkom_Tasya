<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Sistem Informasi Sekolah</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #0284c7, #0f172a);
            font-family: Arial, sans-serif;
        }

        .login-card {
            width: 400px;
            background: white;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
        }

        .login-title {
            text-align: center;
            margin-bottom: 25px;
        }

        .login-title h2 {
            font-weight: bold;
            color: #0f172a;
            margin-bottom: 8px;
        }

        .login-title p {
            color: #6b7280;
            margin-bottom: 0;
        }

        .form-label {
            font-weight: 600;
        }

        .form-control {
            height: 45px;
            border-radius: 10px;
        }

        .form-control:focus {
            border-color: #0284c7;
            box-shadow: 0 0 0 0.2rem rgba(2, 132, 199, 0.15);
        }

        .btn-login {
            width: 100%;
            height: 45px;
            border: none;
            border-radius: 10px;
            background: #0284c7;
            color: white;
            font-weight: bold;
        }

        .btn-login:hover {
            background: #0369a1;
            color: white;
        }

        .alert {
            border-radius: 10px;
        }

        .back-home {
            display: block;
            text-align: center;
            margin-top: 18px;
            text-decoration: none;
            color: #6b7280;
        }

        .back-home:hover {
            color: #0284c7;
        }
    </style>
</head>

<body>

    <div class="login-card">

        <div class="login-title">
            <h2>LOGIN</h2>

            <p>
                Sistem Informasi Sekolah
            </p>
        </div>

        {{-- Pesan error --}}
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        {{-- Pesan sukses --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Error validasi --}}
        @if($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        {{-- Form Login --}}
        <form action="{{ route('login.process') }}" method="POST">

            @csrf

            {{-- Username --}}
            <div class="mb-3">

                <label for="username" class="form-label">
                    Username
                </label>

                <input
                    type="text"
                    name="username"
                    id="username"
                    class="form-control"
                    value="{{ old('username') }}"
                    placeholder="Masukkan username"
                    required
                    autofocus
                >

            </div>

            {{-- Password --}}
            <div class="mb-4">

                <label for="password" class="form-label">
                    Password
                </label>

                <input
                    type="password"
                    name="password"
                    id="password"
                    class="form-control"
                    placeholder="Masukkan password"
                    required
                >

            </div>

            {{-- Tombol Login --}}
            <button type="submit" class="btn btn-login">
                LOGIN
            </button>

        </form>

        {{-- Kembali ke halaman utama --}}
        <a href="{{ route('home') }}" class="back-home">
            ← Kembali ke halaman utama
        </a>

    </div>

</body>

</html>