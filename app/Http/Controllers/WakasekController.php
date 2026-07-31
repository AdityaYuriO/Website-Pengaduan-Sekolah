<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WakasekController extends Controller
{
    public function index() {
        $user = Auth::user();
        return view('wakasek.dashboard', compact('user'));
    }

    public function pengaduanMasuk() {
        $user = Auth::user();
        return view('wakasek.masuk', compact('user'));
    }

    public function daftarPengaduan() {
        $user = Auth::user();
        return view('wakasek.daftar', compact('user'));
    }
}
