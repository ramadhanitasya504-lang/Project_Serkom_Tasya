<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    public function index()
    {
        return view('input.index');
    }

    public function hitung(Request $request)
    {
        $request->validate([
            'nilai1' => 'required|numeric|min:0|max:100',
            'nilai2' => 'required|numeric|min:0|max:100',
        ]);

        $nilai1 = $request->nilai1;
        $nilai2 = $request->nilai2;

        $rataRata = ($nilai1 + $nilai2) / 2;

        $keterangan = $rataRata > 70
            ? 'Lulus'
            : 'Tidak Lulus';

        return view('input.index', compact(
            'nilai1',
            'nilai2',
            'rataRata',
            'keterangan'
        ));
    }
}