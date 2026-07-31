<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\WakasekController;


/*
|--------------------------------------------------------------------------
| HOME / LANDING PAGE
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])
    ->name('home');


/*
|--------------------------------------------------------------------------
| LOGIN
|--------------------------------------------------------------------------
*/
Route::get('/halaman/login', [loginController::class, 'index'])->name('login');
Route::post('/proses/login', [loginController::class, 'login'])->name('proses.login');
Route::post('/logout',[loginController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware(['role:admin'])->group(function () {


Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('halaman.admin');
Route::get('/admin/kategori', [AdminController::class, 'halamanKategori'])->name('halaman.kategori');
Route::get('/admin/laporan', [AdminController::class, 'halamanLaporan'])->name('halaman.laporan');
Route::get('/admin/pengguna', [AdminController::class, 'halamanPengguna'])->name('halaman.pengguna');

});



/*
|--------------------------------------------------------------------------
| SISWA
|--------------------------------------------------------------------------
*/

Route::get('/user/dashboard', [SiswaController::class, 'index'])->name('user.dashboard');
Route::get('/user/kategori', [SiswaController::class, 'kategori'])->name('user.kategori');
Route::get('/user//pengaduan', [SiswaController::class, 'pengaduan'])->name('user.pengaduan');
Route::get('/user/riwayat', [SiswaController::class, 'riwayat'])->name('user.riwayat');





/*
|--------------------------------------------------------------------------
| WAKASEK
|--------------------------------------------------------------------------
*/

Route::get('/wakasek/dashboard', [WakasekController::class, 'index'])->name('wakasek.dashboard');
Route::get('/wakasek/pengaduan', [WakasekController::class, 'pengaduanMasuk'])->name('wakasek.pengaduan');
Route::get('/wakasek/daftar', [WakasekController::class, 'daftarPengaduan'])->name('wakasek.daftar');

