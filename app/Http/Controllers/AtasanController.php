<?php

namespace App\Http\Controllers;

use App\Models\Atasan;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class AtasanController extends Controller
{

    public function index()
    {
        // Mengambil semua data Atasan dan membaginya ke dalam beberapa halaman dengan fungsi paginate()
        $data_atasan = Atasan::paginate(10);
        return view('Atasan/Atasan', ['data_atasan' => $data_atasan]);
    }

    public function tambah()
    {
        $data_pegawai = Pegawai::all();
        return view('Atasan/atasan_tambah', ['data_pegawai' => $data_pegawai]);
    }

    public function store(Request $request)
    {
        // Validasi inputan dari form
        $this->validate($request, [
            'bagian' => 'required',
            'langsung' => 'required',
            'berwenang' => 'required',
        ]);
        // Buat data baru dari model Atasan dengan data yang diambil dari inputan form
        Atasan::create([
            'bagian' => $request->bagian,
            'langsung' => $request->langsung,
            'berwenang' => $request->berwenang,
        ]);
        return redirect('/atasan');
    }

    public function edit($id_atasan)
    {
        // Mengambil data Atasan berdasarkan ID yang dikirimkan dan semua data Pegawai
        $data_atasan = Atasan::find($id_atasan);
        $data_pegawai = Pegawai::all();
        return view('Atasan/atasan_edit', compact('data_atasan', 'data_pegawai'));
    }

    public function update($id_atasan, Request $request)
    {
        // Validasi inputan dari form
        $this->validate($request, [
            'bagian' => 'required',
            'langsung' => 'required',
            'berwenang' => 'required',

        ]);
        // Mengambil data Atasan berdasarkan ID yang dikirimkan dan update datanya dengan data yang diambil dari inputan form
        $data_atasan = Atasan::find($id_atasan);
        $data_atasan->bagian = $request->bagian;
        $data_atasan->langsung = $request->langsung;
        $data_atasan->berwenang = $request->berwenang;
        $data_atasan->save();
        return redirect('/atasan');
    }

    public function delete($id_atasan)
    {
        $data_atasan = Atasan::find($id_atasan);
        $data_atasan->delete();
        return redirect('/atasan');
    }
}
