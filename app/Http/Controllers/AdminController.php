<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('admin.login'); // Pastikan view-nya ada di resources/views/admin/login.blade.php
    }

    // Proses login
    public function login(Request $request)
    {
        $request->validate([
            'user_name' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('user_name', 'password');

        if (Auth::attempt($credentials)) {
            // Redirect ke halaman dashboard admin
            return redirect()->route('admin.dashboard')->with('success', 'Login berhasil');
        }

        // Jika gagal login
        return back()->withErrors(['user_name' => 'Username atau password salah']);
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login')->with('success', 'Logout berhasil');
    }
    public function dashboard()
{
    return view('admin.dashboard'); // Pastikan view ini ada di resources/views/admin/dashboard.blade.php
}

}
