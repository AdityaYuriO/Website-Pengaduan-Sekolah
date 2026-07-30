<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class loginController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $request->validate([
            ''
        ]);
    }
}
