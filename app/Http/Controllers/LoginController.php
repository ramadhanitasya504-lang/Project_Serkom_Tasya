<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // ==========================================
    // MENAMPILKAN HALAMAN LOGIN
    // ==========================================
    public function showLogin()
    {
        if (Auth::check()) {
            $role = strtolower(trim(Auth::user()->role ?? ''));

            if ($role === 'admin') {
                return redirect()->route('dashboard');
            }

            if ($role === 'operator') {
                return redirect()->route('operator.dashboard');
            }

            // Jika role tidak dikenali, logout
            Auth::logout();

            request()->session()->invalidate();
            request()->session()->regenerateToken();
        }

        return view('admin.auth.login');
    }

    // ==========================================
    // PROSES LOGIN ADMIN DAN OPERATOR
    // ==========================================
    public function login(Request $request)
    {
        // Validasi input login
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        // Cek username dan password
        if (!Auth::attempt($credentials)) {
            return back()
                ->withInput($request->only('username'))
                ->with('error', 'Username atau password salah.');
        }

        // Perbarui session setelah login berhasil
        $request->session()->regenerate();

        // Ambil role akun
        $role = strtolower(trim(Auth::user()->role ?? ''));

        // Arahkan Admin ke dashboard Admin
        if ($role === 'admin') {
            return redirect()->route('dashboard');
        }

        // Arahkan Operator ke dashboard Operator
        if ($role === 'operator') {
            return redirect()->route('operator.dashboard');
        }

        // Jika role tidak dikenali, logout
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('landinng')
            ->with('error', 'Role akun tidak dikenali.');
    }

    // ==========================================
    // LOGOUT
    // ==========================================
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('landing')
            ->with('success', 'Kamu berhasil logout.');
    }
}
