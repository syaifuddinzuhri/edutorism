<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('admins.login');
    }

    public function login(Request $request)
    {
        $payload = $request->only(['email', 'password']);
        if (Auth::attempt($payload)) {
            toast('Login Berhasil', 'success');
            return redirect()->route('dashboard.index');
        }
        toast('Email atau password salah!', 'error');
        return redirect()->back();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        toast('Logout Berhasil', 'success');
        return redirect()->route('showLogin');
    }
}
