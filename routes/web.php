<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\AdminController;


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
| ADMIN DASHBOARD
|--------------------------------------------------------------------------
*/

Route::middleware(['role:admin'])->group(function () {


Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('halaman.admin');

Route::get('/admin/kategori', function () {
    return view('admin.kategori.index');
})->name('admin.kategori');


});
