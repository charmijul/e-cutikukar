<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mohoncuti;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // mengambil semua data cuti
        $datacuti = Mohoncuti::all();
        // Mengambil jumlah total data pada $datacuti
        $totalCuti = $datacuti->count();
        $totalCutiY = $datacuti->where('approval', 'Y')->count();
        $totalCutiN = $datacuti->where('approval', 'N')->count();
        $totalCutiD = $datacuti->where('approval', 'Ditangguhkan')->count();
        $totalCutiM = $datacuti->where('approval', 'menunggu')->count();
        $cutisakit = $datacuti->where('jenis', 'Cuti Sakit')->count();
        $cutitahun = $datacuti->where('jenis', 'Cuti Tahunan')->count();
        $cutibesar = $datacuti->where('jenis', 'Cuti Besar')->count();
        $cutilahir = $datacuti->where('jenis', 'Cuti Melahirkan')->count();
        $cutipenting = $datacuti->where('jenis', 'Cuti karena Alasan Penting')->count();
        $cutinegara = $datacuti->where('jenis', 'Cuti di Luar tanggungan Negara')->count();
        // mengambil data user berdasarkan id_pegawai dari user yang sedang login
        $userdata = User::where('id_pegawai',auth()->user()->id_pegawai)->first();
        return view('/home', compact('userdata','datacuti','totalCuti','totalCutiY','totalCutiD','totalCutiM','totalCutiN','cutisakit','cutitahun','cutibesar','cutilahir','cutipenting','cutinegara'));
    }
}   
