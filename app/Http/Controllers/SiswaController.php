<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    public function index() {
        $user = Auth::user();
        return view('user.dashboard', compact('user'));
    }

    public function kategori() {
        $user = Auth::user();
        return view('user.kategori', compact('user'));
    }

    public function pengaduan() {
        $user = Auth::user();
        return view('user.pengaduan', compact('user'));
    }

    public function riwayat() {
        $user = Auth::user();
        return view('user.riwayat', compact('user') );
    }
}
