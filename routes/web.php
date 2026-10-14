<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ProfilSekolahController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\EskulController;
use App\Http\Controllers\InputController;




Route::get('/', [LandingController::class, 'index'])
    ->name('home');

Route::get('/landing', function () {
    return redirect()->route('home');
})->name('landing');



Route::controller(LandingController::class)->group(function () {

    Route::get('/profil', 'profil')
        ->name('profil.public');

    Route::get('/profil-sekolah', 'profil')
        ->name('profil.sekolah');

    Route::get('/berita', 'berita')
        ->name('berita.public');

    Route::get('/galeri', 'galeri')
        ->name('galeri.public');

    Route::get('/ekstrakurikuler', 'eskul')
        ->name('eskul.public');

    Route::get('/data-guru', 'guru')
        ->name('data-guru');

});




Route::get('/input-nilai', [InputController::class, 'index'])
    ->name('input.index');

Route::post('/input-nilai/hitung', [InputController::class, 'hitung'])
    ->name('input-nilai.hitung');




Route::get('/login', [LoginController::class, 'showLogin'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [LoginController::class, 'login'])
    ->middleware('guest')
    ->name('login.process');

Route::post('/logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');




Route::middleware(['auth', 'role:Admin'])
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');


        
        Route::resource('/user', UserController::class)
            ->names('user');


        
        Route::resource('/siswa', SiswaController::class)
            ->names('siswa');


        
        Route::resource('/admin/guru', GuruController::class)
            ->names('admin.guru');


        
        Route::resource('/admin/galeri', GaleriController::class)
            ->names('admin.galeri');


        
        Route::resource('/admin/berita', BeritaController::class)
            ->names('admin.berita');


        
        Route::resource('/eskul', EskulController::class)
            ->names('eskul');


        
        Route::prefix('admin/profil')
            ->name('profil.')
            ->controller(ProfilSekolahController::class)
            ->group(function () {

                Route::get('/', 'index')
                    ->name('index');

                Route::get('/edit', 'edit')
                    ->name('edit');

                Route::put('/', 'update')
                    ->name('update');

            });

    });


/*
|--------------------------------------------------------------------------
| OPERATOR
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:Operator'])
    ->prefix('operator')
    ->name('operator.')
    ->group(function () {

        Route::get('/dashboard', function () {
            return view('operator.dashboard');
        })->name('dashboard');


        Route::get('/siswa', [SiswaController::class, 'index'])
            ->name('siswa.index');

    });
