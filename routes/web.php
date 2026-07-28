<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('home.index');
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', function () {
    return view('auth.login');
})->name('login');