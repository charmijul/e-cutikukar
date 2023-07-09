<?php

namespace App\Http\Controllers;
use App\Models\Pegawai;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('Login.login');
    }

    public function postlogin(Request $request)
    {
        // melakukan proses otentikasi dengan menggunakan fungsi Auth::attempt() dan memasukkan input username dan password dari form login
        if (Auth::attempt($request->only('username', 'password'))) 
        {    
            // jika otentikasi berhasil, maka redirect ke halaman home
            return redirect('/home');
        }
        // jika otentikasi gagal, maka redirect kembali ke halaman login
        return redirect('/login');
    }

    public function logout(Request $request)
    {
        // melakukan proses logout user yang sedang login menggunakan fungsi Auth::logout()
        Auth::logout();
        return redirect('/login');
    }
}
