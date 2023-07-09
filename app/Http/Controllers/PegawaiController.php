<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;

class PegawaiController extends Controller
{

    public function index()
    {
        // Menampilkan halaman index pegawai dengan data pegawai yang telah dipaginasi
        $datapegawai = Pegawai::paginate(10);
        // Mencari data pegawai berdasarkan keyword 'search'
        if (request('search')) {
            $datapegawai = Pegawai::where(function ($query) {
                $query->where('nip', 'like', '%' . request('search') . '%')
                    ->orWhere('nama', 'like', '%' . request('search') . '%');
            })->paginate(10);
        }
        return view('Pegawai/pegawai', [
            'title' => 'Pegawai', 'data_pegawai' => $datapegawai
        ]);
    }


    public function tambah()
    {
        return view('Pegawai/pegawai_tambah', ['title' => 'Pegawai']);
    }

    public function store(Request $request)
    {
        //Validasi input dari form tambah pegawai
        $validatedata =  $request->validate([
            'nip' => 'required|unique:tb_pegawai',
            'nama' => 'required',
            'jk' => 'required',
            'tmp_lhr' => 'required',
            'tgl_lhr' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'email' => 'required',
            'unit' => 'required',
            'unit_organisasi' => 'required',
            'jab' => 'required',
            'tgl_masa' => 'required',
            'golongan' => 'required',
            'foto' => 'file|image',
            'n2' => 'required',
            'n1' => 'required',
            'n' => 'required',
            'level' => 'required'
        ]);

        // Jika terdapat file foto yang diunggah, simpan file tersebut ke dalam storage dan update foto pegawai di database
        if ($request->file('foto')) {
            $validatedata['foto'] = $request->file('foto')->store('profile-images');
        }
        // Tambahkan data pegawai baru ke dalam tabel pegawai
        $pegawai = Pegawai::create($validatedata);
        $peg_id = $pegawai->id;

        // Tambahkan data user baru ke dalam tabel user
        User::create([
            'id_pegawai' => $peg_id,
            'username' => $validatedata['nip'],
            'level' => $validatedata['level'],
            'password' => bcrypt($validatedata['nip'])
        ]);

        return redirect('/pegawai');
    }


    public function edit($nip)
    {
        //Menampilkan halaman edit data pegawai berdasarkan NIP pegawai yang dipilih
        $datapegawai = Pegawai::find($nip);
        $datauser = User::find($nip);

        return view('Pegawai/pegawai_edit', ['data_pegawai' => $datapegawai, 'data_user' => $datauser]);
    }

    public function update($id, Request $request)
    {
        // Menemukan data pegawai berdasarkan id
        $datapegawai = Pegawai::find($id);
        // Validasi data yang diterima dari request
        $validatedata =  $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'tmp_lhr' => 'required',
            'tgl_lhr' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'email' => 'required',
            'unit' => 'required',
            'unit_organisasi' => 'required',
            'jab' => 'required',
            'tgl_masa' => 'required',
            'golongan' => 'required',
            'foto' => 'file|image',
            'n2' => 'required',
            'n1' => 'required',
            'n' => 'required',
            'level' => 'required'
        ]);

        // Jika terdapat file foto pada request, maka akan diproses
        if ($request->file('foto')) {
            // Jika data pegawai sudah memiliki foto, maka foto lama akan dihapus
            if ($datapegawai->foto) {
                Storage::delete($datapegawai->foto);
            }
            // Simpan file foto baru ke dalam storage dengan nama folder 'profile-images'
            $validatedata['foto'] = $request->file('foto')->store('profile-images');
        }

        // Update data pegawai dengan data yang telah divalidasi
        $datapegawai->update($validatedata);
        // Jika terdapat level pada request, maka akan diupdate pada tabel User
        if ($request->level) {
            User::where('id_pegawai', $id)->update(['level' => $validatedata['level']]);
        }
        return redirect('/pegawai');
    }

    public function delete($id)
    {
        $data_pegawai = Pegawai::find($id);
        $data_user = User::where('id_pegawai', $id);
        $data_user->delete();
        $data_pegawai->delete();
        return redirect('/pegawai');
    }

    public function profile($id)
    {
        // Menemukan data pegawai berdasarkan id
        $datapegawai = Pegawai::find($id);
        return view('Pegawai/pegawai_profile', ['data_pegawai' => $datapegawai]);
    }

    public function profile_foto($id)
    {
        // Menemukan data pegawai berdasarkan id
        $datapegawai = Pegawai::find($id);
        // Jika terdapat file foto pada request, maka akan diproses
        if (request()->file('foto')) {
            // Jika data pegawai sudah memiliki foto, maka foto lama akan dihapus
            if ($datapegawai->foto) {
                Storage::delete($datapegawai->foto);
            }
            // Simpan file foto baru ke dalam storage dengan nama folder 'profile-images'
            $datapegawai->foto = request()->file('foto')->store('profile-images');
            $datapegawai->save();
        }
        return view('Pegawai/pegawai_profile', ['data_pegawai' => $datapegawai]);
    }
}
