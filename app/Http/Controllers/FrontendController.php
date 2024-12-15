<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan halaman utama
        return view('frontend.index'); // Pastikan Anda memiliki view ini
    }

    
}
