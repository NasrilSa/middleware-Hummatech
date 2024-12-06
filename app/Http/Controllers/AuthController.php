<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        // Contoh hardcoded user
        $user = [
            'username' => 'admin',
            'password' => 'admin123',
        ];

        if ($credentials['username'] === $user['username'] && $credentials['password'] === $user['password']) {
            $request->session()->put('user', $user);
            return redirect()->route('dashboard.rumahSakit')->with('success', 'Berhasil login.');
        }

        return back()->with('error', 'Username atau password salah.');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user');
        return redirect()->route('login')->with('success', 'Berhasil logout.');
    }
}
