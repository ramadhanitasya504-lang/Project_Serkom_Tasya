<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nilai - SMK Nusantara</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f1ed;
            font-family: Arial, sans-serif;
        }

        .card {
            border: none;
            border-radius: 15px;
        }

        .card-header {
            background: #8B7A6D;
            color: white;
            padding: 20px;
            border-radius: 15px 15px 0 0 !important;
        }

        .btn-utama {
            background: #8B7A6D;
            color: white;
        }

        .btn-utama:hover {
            background: #62554b;
            color: white;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6">

            <div class="card shadow">
                <div class="card-header text-center">
                    <h3 class="mb-1">Input Nilai Siswa</h3>
                    <p class="mb-0">SMK Nusantara</p>
                </div>

                <div class="card-body p-4">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('input-nilai.hitung') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Nilai 1</label>
                            <input type="number" name="nilai1"
                                class="form-control"
                                min="0" max="100" step="any"
                                value="{{ old('nilai1', $nilai1 ?? '') }}"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nilai 2</label>
                            <input type="number" name="nilai2"
                                class="form-control"
                                min="0" max="100" step="any"
                                value="{{ old('nilai2', $nilai2 ?? '') }}"
                                required>
                        </div>

                        <button type="submit" class="btn btn-utama w-100">
                            Hitung Nilai
                        </button>
                    </form>

                    @isset($rataRata)
                        <hr>

                        <div class="alert alert-info mt-3">
                            <h5>Hasil Perhitungan</h5>
                            <p>Nilai 1: {{ $nilai1 }}</p>
                            <p>Nilai 2: {{ $nilai2 }}</p>
                            <p>Rata-rata: <strong>{{ $rataRata }}</strong></p>

                            <p class="mb-0">
                                Keterangan:
                                @if ($rataRata > 70)
                                    <strong class="text-success">LULUS</strong>
                                @else
                                    <strong class="text-danger">TIDAK LULUS</strong>
                                @endif
                            </p>
                        </div>
                    @endisset

                    <a href="{{ route('dashboard') }}"
                       class="btn btn-secondary w-100 mt-3">
                        Kembali ke Dashboard
                    </a>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>