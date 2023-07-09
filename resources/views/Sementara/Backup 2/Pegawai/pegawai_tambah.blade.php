@extends('layout.main')
@section('container')

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tambah Data Pegawai</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <strong>TAMBAH DATA</strong></a>
                </div>
                <div class="card-body">
                    <a href="/pegawai" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/pegawai/store">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>NIP</label>
                            <input type="text" name="nip" class="form-control" placeholder="NIP pegawai ..">
 
                            @if($errors->has('nip'))
                                <div class="text-danger">
                                    {{ $errors->first('nip')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama pegawai .." >
 
                             @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
 
                        </div>
                        <!-- NOTE Pake Radio Selection! -->
                        <div class="form-group">
                           <label>Jenis Kelamin</label>
                            <select name="jk" class="form-control">
                                <option value="">Pilih jenis kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
 
                             @if($errors->has('jk'))
                                <div class="text-danger">
                                    {{ $errors->first('jk')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <textarea name="tmp_lhr" class="form-control" placeholder="Tempat Lahir pegawai .."></textarea>
 
                             @if($errors->has('tmp_lhr'))
                                <div class="text-danger">
                                    {{ $errors->first('tmp_lhr')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tgl_lhr" class="form-control" placeholder="Tangga Lahir pegawai ..">
 
                             @if($errors->has('tgl_lhr'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_lhr')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Alamat pegawai .."></textarea>
 
                             @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Nomor Telepon</label>
                            <input type="text" name="telp" class="form-control" placeholder="Nomor Telepon pegawai .." >
 
                             @if($errors->has('telp'))
                                <div class="text-danger">
                                    {{ $errors->first('telp')}}
                                </div>
                            @endif
 
                        </div>

                         <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email pegawai .."></textarea>
 
                             @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Unit Kerja</label>
                            <input type="text" name="unit" class="form-control" placeholder="Unit Kerja pegawai .." >
 
                             @if($errors->has('unit'))
                                <div class="text-danger">
                                    {{ $errors->first('unit')}}
                                </div>
                            @endif
 
                        </div>

                         <div class="form-group">
                            <label>Unit Organisasi</label>
                            <input type="text" name="unit_organisasi" class="form-control" placeholder="Unit Organisasi pegawai .." >
 
                             @if($errors->has('unit_organisasi'))
                                <div class="text-danger">
                                    {{ $errors->first('unit_organisasi')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" name="jab" class="form-control" placeholder="Jabatan pegawai .." >
 
                             @if($errors->has('jab'))
                                <div class="text-danger">
                                    {{ $errors->first('jab')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Tanggal Masa Kerja</label>
                            <input type="date" name="tgl_masa" class="form-control" placeholder="Tanggal Masa Kerja pegawai ..">
 
                             @if($errors->has('tgl_masa'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_masa')}}
                                </div>
                            @endif
 
                        </div>

                         <div class="form-group">
                            <label>Golongan</label>
                            <input type="text" name="golongan" class="form-control" placeholder="Golongan pegawai .." >
 
                             @if($errors->has('golongan'))
                                <div class="text-danger">
                                    {{ $errors->first('golongan')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>N2</label>
                            <input type="text" name="n2" class="form-control" placeholder="N2 pegawai .." >
                             @if($errors->has('n2'))
                                <div class="text-danger">
                                    {{ $errors->first('n2')}}
                                </div>
                            @endif
 
                        </div>
                         <div class="form-group">
                            <label>N1</label>
                            <input type="text" name="n1" class="form-control" placeholder="N1 pegawai .." >
 
                             @if($errors->has('n1'))
                                <div class="text-danger">
                                    {{ $errors->first('n1')}}
                                </div>
                            @endif
 
                        </div>
                         <div class="form-group">
                            <label>N</label>
                            <input type="text" name="n" class="form-control" placeholder="N pegawai .." >
 
                             @if($errors->has('n'))
                                <div class="text-danger">
                                    {{ $errors->first('n')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>
@endsection