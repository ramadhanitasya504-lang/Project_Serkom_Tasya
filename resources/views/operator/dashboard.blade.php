@extends('layouts.template')

@section('content')

<div class="container-fluid pt-4 px-4">

    <div class="bg-light rounded p-4">

        <h3 style="color: #6F6258;">
            Dashboard Operator
        </h3>

        <p>
            Selamat datang,
            {{ auth()->user()->username ?? 'Operator' }}!
        </p>

        <p>
            Kamu login sebagai Operator.
        </p>

        <hr>

        <h5 style="color: #6F6258;">
            Menu Operator
        </h5>

        <a href="{{ route('operator.siswa.index') }}"
           class="btn text-white"
           style="background-color: #8B7A6D;">

            <i class="fa fa-user-graduate me-2"></i>
            Lihat Data Siswa

        </a>

    </div>

</div>

@endsection