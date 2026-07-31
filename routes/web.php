<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;


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

Route::get('/login', function () {
    return view('auth.login');
})->name('login');


/*
|--------------------------------------------------------------------------
| ADMIN DASHBOARD
|--------------------------------------------------------------------------
*/

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin/kategori', function () {
    return view('admin.kategori.index');
})->name('admin.kategori');

Route::view('/admin/users', 'admin.users.index')
    ->name('admin.users.index');

Route::view('/admin/laporan', 'admin.laporan.index')
    ->name('admin.laporan.index');

    
/*
|--------------------------------------------------------------------------
| USER DASHBOARD
|--------------------------------------------------------------------------
*/

Route::get('/user/dashboard', function () {
    return view('user.dashboard');
})->name('user.dashboard');

Route::get('/user/kategori', function () {
    return view('user.kategori');
})->name('user.kategori');

Route::get('/user/riwayat', function () {
    return view('user.riwayat');
})->name('user.riwayat');

Route::get('/user/pengaduan', function () {
    return view('user.pengaduan');
})->name('user.pengaduan');





Route::get('/wakasek/dashboard', function () {
    return view('wakasek.dashboard');
})->name('wakasek.dashboard');


Route::get('/wakasek/masuk', function () {
    return view('wakasek.masuk');
})->name('wakasek.masuk');


Route::get('/wakasek/daftar', function () {
    return view('wakasek.daftar');
})->name('wakasek.daftar');

/*
|--------------------------------------------------------------------------
| LOGOUT
|--------------------------------------------------------------------------
*/

Route::post('/logout', function () {

    Auth::logout();

    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect()->route('login');

})->name('logout');


Route::get('/user/kategori', function () {
    return view('user.kategori');
})->name('user.kategori');