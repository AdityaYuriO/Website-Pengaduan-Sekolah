<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(!Auth::attempt($request->only('email', 'password'))) {
            return redirect()->back()->with('success', 'email atau password salah');
        }

        $request->session()->regenerate();

        $user = Auth::user();
        $role = $user->role->nama_role;

        if($role == 'siswa') {

        }

        if($role == 'kepala_sekolah') {

        }

        if($role == 'hubin') {

        }

        if($role == 'kesiswaan') {

        }

        if($role == 'prasarana' ) {

        }

        if($role == 'kurikulum') {

        }

        if($role == 'admin') {
            return redirect()->route('halaman.admin')->with('success', 'berhasil masuk sebagai admin');
        }

        Auth::logout();

        return back()->with('failed', 'gagal punya hak akses');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'berhasil logout');
    }
}
