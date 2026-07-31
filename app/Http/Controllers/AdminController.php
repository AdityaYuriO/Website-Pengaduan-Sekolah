<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index() {
        $user = Auth::user();
        return view('admin.dashboard', compact('user'));
    }

    public function halamanKategori() {
        $user = Auth::user();
        return view('admin.kategori.index', compact('user'));
    }

    public function halamanLaporan() {
        $user = Auth::user();
        return view('admin.laporan.index', compact('user'));
    }

    public function halamanPengguna() {
        $user = Auth::user();
        return view('admin.users.index', compact('user'));
    }
}
