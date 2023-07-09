<?php

namespace App\Http\Controllers;

use App\Models\Mohoncuti;
use App\Models\Pegawai;
use App\Models\Atasan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class MohoncutiController extends Controller
{
    public function index()
    {
        // membuat Eloquent Builder untuk model Mohoncuti
        $query = Mohoncuti::query()->orderBy('tgl', 'desc');

        // mencari data cuti berdasarkan level pengguna
        if (auth()->user()->level == 'Pegawai') {
            $query->where('peg_id', auth()->user()->id_pegawai);
        }

        // mencari data cuti berdasarkan keyword 'search'
        if (request('search')) {
            $query->where(function ($query) {
                $query->where('jenis', 'like', '%' . request('search') . '%')
                    ->orWhere('alasan', 'like', '%' . request('search') . '%')
                    ->orWhereHas('pegawai', function ($query) {
                        $query->where('nama', 'like', '%' . request('search') . '%')
                            ->orWhere('nip', 'like', '%' . request('search') . '%');
                    });
            });
        }

        // mengambil data cuti dengan pagination
        $datacuti = $query->paginate(10);
        return view('Mohoncuti/mohoncuti', ['data_cuti' => $datacuti]);
    }



    public function tambah()
    {
        // mengambil data pegawai dan atasan
        $data_pegawai = Pegawai::all();
        $data_atasan = Atasan::all();
        return view('Mohoncuti/mohoncuti_tambah', compact('data_pegawai', 'data_atasan'));
    }

    public function store(Request $request)
    {
        // menghitung jumlah hari cuti berdasarkan tanggal mulai dan selesai
        $date1 = \Carbon\Carbon::parse($request->mulai);
        $date2 = \Carbon\Carbon::parse($request->selesai);
        $jml_hari = $date1->diffInDays($date2);

        // validasi input data
        $validatedata =  $request->validate([
            'peg_id' => 'required',
            'jenis' => 'required',
            'alasan' => 'required',
            'catatan' => 'required',
            'mulai' => 'required',
            'selesai' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'atasan_id' => 'required',
            'bukti1' => 'file|mimes:pdf|max:2048',
            'bukti2' => 'file|mimes:pdf|max:2048',
            'approval' => 'required',
            'approval2' => 'required',
        ]);


        // tambahkan data jumlah hari cuti ke data yang divalidasi
        $validatedata['jml_hari'] = $jml_hari;

        // simpan file bukti1 ke folder public/bukti-cuti1
        if ($request->file('bukti1')) {
            $validatedata['bukti1'] = $request->file('bukti1')->store('bukti-cuti1');
        }
        if ($request->file('bukti2')) {
            $validatedata['bukti2'] = $request->file('bukti2')->store('bukti-cuti2');
        }
        // if ($request->hasFile('bukti1')) {
        //     $file = $request->file('bukti1');
        //     $filename = time() . '.' . $file->getClientOriginalExtension();
        //     $file->storeAs('public/bukti-cuti1/', $filename);
        //     $validatedata['bukti1'] = $filename;
        // }

        Mohoncuti::create($validatedata);

        return redirect('/cuti');
    }


    public function edit($id_mohoncuti)
    {
        // Mengambil data mohon cuti dengan id yang diberikan
        $data_mohoncuti = Mohoncuti::find($id_mohoncuti);
        // Mengambil semua data pegawai dan atasan
        $data_pegawai = Pegawai::all();
        $data_atasan = Atasan::all();
        return view('Mohoncuti/mohoncuti_edit', compact('data_mohoncuti', 'data_atasan', 'data_pegawai'));
    }

    public function update($id_mohoncuti, Request $request)
    {
        // Menghitung jumlah hari antara tanggal mulai dan selesai cuti
        $date1 = \Carbon\Carbon::parse($request->mulai);
        $date2 = \Carbon\Carbon::parse($request->selesai);
        $jml_hari = $date1->diffInDays($date2);

        // Validasi data yang diterima dari request
        $validatedata =  $request->validate([
            'peg_id' => 'required',
            'jenis' => 'required',
            'alasan' => 'required',
            'catatan' => 'required',
            'mulai' => 'required',
            'selesai' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'atasan_id' => 'required',
            'approval' => 'required',
        ]);

        // Menambahkan jumlah hari ke dalam data yang akan diupdate
        $validatedata['jml_hari'] = $jml_hari;
        Mohoncuti::find($id_mohoncuti)->update($validatedata);

        return redirect('/cuti');
    }

    public function delete($id_mohoncuti)
    {
        // Mengambil data mohon cuti dengan id yang diberikan
        $data_mohoncuti = Mohoncuti::find($id_mohoncuti);
        $data_mohoncuti->delete();
        return redirect('/cuti');
    }

    public function approval()
    {
        // mengambil semua data cuti
        $query = Mohoncuti::where('approval', 'menunggu')
            ->orwhere('approval2', 'menunggu')
            ->orderBy('tgl', 'desc');

            if (auth()->user()->level == 'Pegawai') {
                $query->where('peg_id', auth()->user()->id_pegawai);
            }

        // mencari data cuti berdasarkan keyword 'search'
        // $approval = $datacuti->where('approval', 'menunggu');
        if (request('search')) {
            $query->where(function ($query) {
                $query->where('jenis', 'like', '%' . request('search') . '%')
                    ->orWhere('alasan', 'like', '%' . request('search') . '%')
                    ->orWhereHas('pegawai', function ($query) {
                        $query->where('nama', 'like', '%' . request('search') . '%')
                            ->orWhere('nip', 'like', '%' . request('search') . '%');
                    });
            });
        }

        // mengambil data cuti dengan pagination
        $datacuti = $query->paginate(10);
        return view('Mohoncuti/mohoncuti_approval', ['data_cuti' => $datacuti]);
    }

    public function setuju()
    {
        // mengambil semua data cuti
        $query = Mohoncuti::where('approval', 'Y')
            ->where('approval2', 'Y')
            ->orderBy('tgl', 'desc');

        // mencari data cuti berdasarkan keyword 'search'
        if (request('search')) {
            $query->where(function ($query) {
                $query->where('jenis', 'like', '%' . request('search') . '%')
                    ->orWhere('alasan', 'like', '%' . request('search') . '%')
                    ->orWhereHas('pegawai', function ($query) {
                        $query->where('nama', 'like', '%' . request('search') . '%')
                            ->orWhere('nip', 'like', '%' . request('search') . '%');
                    });
            });
        }
        // mengambil data cuti dengan pagination
        $datacuti = $query->paginate(10);
        return view('Mohoncuti/mohoncuti_setuju', ['data_cuti' => $datacuti]);
    }

    public function ditangguh()
    {
        // mengambil semua data cuti
        $query = Mohoncuti::where('approval', 'Ditangguhkan')
            ->orderBy('tgl', 'desc');


        // mencari data cuti berdasarkan keyword 'search'
        if (request('search')) {
            $query->where(function ($query) {
                $query->where('jenis', 'like', '%' . request('search') . '%')
                    ->orWhere('alasan', 'like', '%' . request('search') . '%')
                    ->orWhereHas('pegawai', function ($query) {
                        $query->where('nama', 'like', '%' . request('search') . '%')
                            ->orWhere('nip', 'like', '%' . request('search') . '%');
                    });
            });
        }
        // mengambil data cuti dengan pagination
        $datacuti = $query->paginate(10);
        // return view('Mohoncuti/mohoncuti_tangguh', ['data_cuti' => $datacuti]);
        return view('Mohoncuti/mohoncuti_tangguh', ['data_cuti' => $datacuti]);
    }
    public function approvaledit($id_mohoncuti, Request $request)
    {
        // dd($request);
        $data_mohoncuti = Mohoncuti::find($id_mohoncuti);
        // dd($data_mohoncuti, $request);
        
        if(auth()->user()->id_pegawai == $data_mohoncuti->atasan->langsung || auth()->user()->id_pegawai == $data_mohoncuti->atasan->berwenang)
        $data_mohoncuti->update([
            'approval' => $request->approval
        ]);
        if(auth()->user()->id_pegawai == $data_mohoncuti->atasan->berwenang)
        $data_mohoncuti->update([
            'approval2' => $request->approval
        ]);
        return redirect('/cuti-approval')->with('success', 'data berhasil diubah');
    }

    // public function print()
    // {
    //     // membuat Eloquent Builder untuk model Mohoncuti
    //     $query = Mohoncuti::query()->orderBy('tgl', 'desc');

    //     // mencari data cuti berdasarkan level pengguna
    //     if (auth()->user()->level == 'Pegawai') {
    //         $query->where('peg_id', auth()->user()->id_pegawai);
    //     }

    //     // mencari data cuti berdasarkan keyword 'search'
    //     if (request('search')) {
    //         $query->where(function ($query) {
    //             $query->where('jenis', 'like', '%' . request('search') . '%')
    //                 ->orWhere('alasan', 'like', '%' . request('search') . '%')
    //                 ->orWhereHas('pegawai', function ($query) {
    //                     $query->where('nama', 'like', '%' . request('search') . '%')
    //                         ->orWhere('nip', 'like', '%' . request('search') . '%');
    //                 });
    //         });
    //     }

    //     // mengambil data cuti dengan pagination
    //     $datacuti = $query->paginate(10);
    //     return view('Mohoncuti/mohoncuti_print2', ['data_cuti' => $datacuti]);
    // }

    public function detail($id_mohoncuti)
    {
        $now = date('d-m-Y');
        // Mengambil data mohon cuti dengan id yang diberikan
        $data_mohoncuti = Mohoncuti::find($id_mohoncuti);
        // Mengambil semua data pegawai dan atasan
        $data_pegawai = Pegawai::all();
        $data_atasan = Atasan::all();
        return view('Mohoncuti/mohoncuti_print', compact('now','data_mohoncuti', 'data_atasan', 'data_pegawai'));
    }

    public function download(Request $request, $id)
    {
        $pdfFile = Mohoncuti::findOrFail($id);
        $lampiran = $request->lampiran;
        
        // dd($pdfFile->$lampiran);
        // $filePath = storage_path($pdfFile->pdf_file);
        $filePath = public_path('storage/' . $pdfFile->$lampiran);

        return response()->download($filePath, 'berkas '. $lampiran .'.pdf');
    }
}
