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
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required'
    ]);

    // Jika validasi berhasil
    if ($validator->passes()) {
        // Cek kredensial login
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate(); // Regenerasi sesi untuk mencegah session fixation
            return redirect()->intended('admin/dashboard'); // Redirect ke dashboard
        } else {
            // Kredensial salah
            return redirect()->route('account.login')->withErrors([
                'login' => 'Either email or password is incorrect.'
            ]);
        }
    } else {
        // Jika validasi gagal
        return redirect()->route('account.login')
            ->withInput()
            ->withErrors($validator);
    }
}

    public function logout(Request $request)
{
    Auth::logout(); // Logout pengguna
    $request->session()->invalidate(); // Hapus semua sesi
    $request->session()->regenerateToken(); // Regenerasi token CSRF
    return redirect()->route('account.login'); // Redirect ke halaman login
    }
}




