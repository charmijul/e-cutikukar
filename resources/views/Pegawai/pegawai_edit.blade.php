@extends('layout.main')

@section('container')
    <div class="container">
        <div class="text-center">
            <strong>Edit Data {{ $data_pegawai->nama }}</strong>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <a href="/pegawai" class="btn btn-primary">Kembali</a>
                <br />
                <br />

                <form method="post" action="/pegawai/update/{{ $data_pegawai->id }}" enctype="multipart/form-data">

                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label>NIP</label>
                        <input type="text" name="nip" class="form-control" placeholder="NIP pegawai .."
                            value=" {{ $data_pegawai->nip }}">

                        @if ($errors->has('nip'))
                            <div class="text-danger">
                                {{ $errors->first('nip') }}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama pegawai .."
                            value=" {{ $data_pegawai->nama }}">

                        @if ($errors->has('nama'))
                            <div class="text-danger">
                                {{ $errors->first('nama') }}
                            </div>
                        @endif

                    </div>
                    <!-- NOTE Pake Radio Selection! -->
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="jk" class="form-control">
                            <option value="">Pilih jenis kelamin</option>
                            <option value="Laki-laki" {{ $data_pegawai->jk == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                            </option>
                            <option value="Perempuan" {{ $data_pegawai->jk == 'Perempuan' ? 'selected' : '' }}>Perempuan
                            </option>
                        </select>

                        @if ($errors->has('jk'))
                            <div class="text-danger">
                                {{ $errors->first('jk') }}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <textarea name="tmp_lhr" class="form-control" placeholder="Tempat Lahir pegawai ..">{{ $data_pegawai->tmp_lhr }}</textarea>

                        @if ($errors->has('tmp_lhr'))
                            <div class="text-danger">
                                {{ $errors->first('tmp_lhr') }}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgl_lhr" class="form-control" placeholder="Tanggal Lahir pegawai .."
                            value="{{ $data_pegawai->tgl_lhr }}">

                        @if ($errors->has('tgl_lhr'))
                            <div class="text-danger">
                                {{ $errors->first('tgl_lhr') }}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="Alamat pegawai ..">{{ $data_pegawai->alamat }}</textarea>

                        @if ($errors->has('alamat'))
                            <div class="text-danger">
                                {{ $errors->first('alamat') }}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Nomor Telepon</label>
                        <input type="text" name="telp" class="form-control" placeholder="Nomor Telepon pegawai .."
                            value=" {{ $data_pegawai->telp }}">

                        @if ($errors->has('telp'))
                            <div class="text-danger">
                                {{ $errors->first('telp') }}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Email pegawai .."
                            value=" {{ $data_pegawai->email }}"></textarea>

                        @if ($errors->has('email'))
                            <div class="text-danger">
                                {{ $errors->first('email') }}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Unit Kerja</label>
                        <input type="text" name="unit" class="form-control" placeholder="Unit Kerja pegawai .."
                            value=" {{ $data_pegawai->unit }}">

                        @if ($errors->has('unit'))
                            <div class="text-danger">
                                {{ $errors->first('unit') }}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Unit Organisasi</label>
                        <input type="text" name="unit_organisasi" class="form-control"
                            placeholder="Unit Organisasi pegawai .." value=" {{ $data_pegawai->unit_organisasi }}">

                        @if ($errors->has('unit_organisasi'))
                            <div class="text-danger">
                                {{ $errors->first('unit_organisasi') }}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" name="jab" class="form-control" placeholder="Jabatan pegawai .."
                            value=" {{ $data_pegawai->jab }}">

                        @if ($errors->has('jab'))
                            <div class="text-danger">
                                {{ $errors->first('jab') }}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Tanggal Masa Kerja</label>
                        <input type="date" name="tgl_masa" class="form-control"
                            placeholder="Tanggal Masa Kerja pegawai .." value="{{ $data_pegawai->tgl_masa }}">

                        @if ($errors->has('tgl_masa'))
                            <div class="text-danger">
                                {{ $errors->first('tgl_masa') }}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Golongan</label>
                        <input type="text" name="golongan" class="form-control" placeholder="Golongan pegawai .."
                            value=" {{ $data_pegawai->golongan }}">

                        @if ($errors->has('golongan'))
                            <div class="text-danger">
                                {{ $errors->first('golongan') }}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>N2</label>
                        <input type="text" name="n2" class="form-control" placeholder="N2 pegawai .."
                            value=" {{ $data_pegawai->n2 }}">
                        @if ($errors->has('n2'))
                            <div class="text-danger">
                                {{ $errors->first('n2') }}
                            </div>
                        @endif

                    </div>
                    <div class="form-group">
                        <label>N1</label>
                        <input type="text" name="n1" class="form-control" placeholder="N1 pegawai .."
                            value=" {{ $data_pegawai->n1 }}">
                        @if ($errors->has('n1'))
                            <div class="text-danger">
                                {{ $errors->first('n1') }}
                            </div>
                        @endif

                    </div>
                    <div class="form-group">
                        <label>N</label>
                        <input type="text" name="n" class="form-control" placeholder="N pegawai .."
                            value=" {{ $data_pegawai->n }}">

                        @if ($errors->has('n'))
                            <div class="text-danger">
                                {{ $errors->first('n') }}
                            </div>
                        @endif

                        <div class="form-group">
                            <label>Photo Profil</label>
                            @if ($data_pegawai->foto)
                                <input type="hidden" name="oldImage" value="{{ $data_pegawai->foto }}">
                                <img src="{{ asset('storage/' . $data_pegawai->foto) }}"
                                    class="img-preview img-fluid mb-3 col-sm-5 d-block">
                            @else
                                <img class="img-preview img-fluid mb-3 col-sm-5">
                            @endif
                            <input type="file" name="foto" class="form-control" onchange="previewImage()"
                                id="foto">

                            @if ($errors->has('foto'))
                                <div class="text-danger">
                                    {{ $errors->first('foto') }}
                                </div>
                            @endif

                        </div>

                    </div>
                    <!-- NOTE Pake Radio Selection! -->
                    <div class="form-group">
                        <label>Hak Akses Pegawai</label>
                        <select name="level" class="form-control">
                            <option value="Pegawai" {{ $data_user->level == 'Pegawai' ? 'selected' : '' }}>Pegawai
                            </option>
                            <option value="Admin" {{ $data_user->level == 'Admin' ? 'selected' : '' }}>Admin
                            </option>
                            <option value="Staff" {{ $data_user->level == 'Staff' ? 'selected' : '' }}>
                                Staff Kepegawaian
                            </option>
                            </option>
                            <option value="Atasan1" {{ $data_user->level == 'Atasan1' ? 'selected' : '' }}>
                                Atasan Langsung
                            </option>
                            </option>
                            <option value="Atasan2" {{ $data_user->level == 'Atasan2' ? 'selected' : '' }}>
                                Atasan Berwenang
                            </option>

                        </select>

                        @if ($errors->has('level'))
                            <div class="text-danger">
                                {{ $errors->first('level') }}
                            </div>
                        @endif

                    </div>

            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Simpan">
            </div>

            </form>

        </div>
    </div>
    </div>
    <script>
        function previewImage() {
            const image = document.querySelector('#foto');
            const imgPreview = document.querySelector('.img-preview');
            imgPreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
