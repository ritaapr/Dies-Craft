<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function authenticate(Request $request)
{
    // Validasi input
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Autentikasi pengguna
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        $request->session()->regenerate(); // Regenerasi sesi
        return redirect()->intended('admin/dashboard'); // Redirect ke dashboard
    }

    // Jika kredensial salah
    return back()->withErrors([
        'login' => __('auth.failed'),
    ])->withInput();
}


public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate(); // Hapus sesi
    $request->session()->regenerateToken(); // Regenerasi token CSRF

    return redirect()->route('account.login'); // Redirect ke login
}

}



