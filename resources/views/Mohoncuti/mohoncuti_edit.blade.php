{{-- @dd($data_mohoncuti) --}}
@extends('layout.main')

@section('container')
    <div class="container">
        <div class="text-center">
            <strong>EDIT DATA</strong>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <a href="/cuti" class="btn btn-primary">Kembali</a>
                <br />
                <br />

                <form method="post" action="/cuti/update/{{ $data_mohoncuti->id_mohoncuti }}">

                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        {{-- <label>Tanggal Pembuatan Surat Cuti</label> --}}
                        <input type="text" class="form-control" readonly disabled
                            placeholder="{{ $data_mohoncuti->Pegawai->nama }}">
                    </div>

                    <div class="form-group">
                        {{-- <label>Tanggal Pembuatan Surat Cuti</label> --}}
                        <input type="text" name="peg_id" class="form-control" value="{{ $data_mohoncuti->peg_id }}"
                            hidden>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Pembuatan Surat Cuti</label>
                        <input type="text" name="tgl" class="form-control"
                            placeholder="Tangga Pembuatan Surat Cuti .." value="{{ $data_mohoncuti->tgl }}" readonly disabled>

                        @if ($errors->has('tgl'))
                            <div class="text-danger">
                                {{ $errors->first('tgl') }}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Jenis Cuti</label>
                        <select name="jenis" class="form-control">
                            <option value="">Pilih jenis Cuti</option>
                            <option value="Cuti Tahunan" {{ $data_mohoncuti->jenis == 'Cuti Tahunan' ? 'selected' : '' }}>
                                Cuti tahunan</option>
                            <option value="Cuti Besar" {{ $data_mohoncuti->jenis == 'Cuti Besar' ? 'selected' : '' }}>Cuti
                                Besar</option>
                            <option value="Cuti Sakit" {{ $data_mohoncuti->jenis == 'Cuti Sakit' ? 'selected' : '' }}>Cuti
                                Sakit</option>
                            <option value="Cuti Melahirkan"
                                {{ $data_mohoncuti->jenis == 'Cuti Melahirkan' ? 'selected' : '' }}>Cuti Melahirkan
                            </option>
                            <option value="Cuti karena Alasan Penting"
                                {{ $data_mohoncuti->jenis == 'Cuti karena Alasan Penting' ? 'selected' : '' }}>Cuti karena
                                Alasan Penting</option>
                            <option value="Cuti di Luar tanggungan Negara"
                                {{ $data_mohoncuti->jenis == 'Cuti di Luar tanggungan Negara' ? 'selected' : '' }}>Cuti di
                                Luar tanggungan Negara</option>

                        </select>

                        @if ($errors->has('jenis'))
                            <div class="text-danger">
                                {{ $errors->first('jenis') }}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Alasan Cuti</label>
                        <textarea name="alasan" class="form-control" placeholder="Alasan Cuti .." required>{{ $data_mohoncuti->alasan }}</textarea>

                        @if ($errors->has('alasan'))
                            <div class="text-danger">
                                {{ $errors->first('alasan') }}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Catatan Cuti</label>
                        <textarea name="catatan" class="form-control" placeholder="Catatan Cuti ..">{{ $data_mohoncuti->catatan }}</textarea>

                        @if ($errors->has('catatan'))
                            <div class="text-danger">
                                {{ $errors->first('catatan') }}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Tanggal Mulai Cuti</label>
                        <input type="date" name="mulai" class="form-control" placeholder="Tangga Mulai Cuti .."
                            value="{{ $data_mohoncuti->mulai }}">

                        @if ($errors->has('mulai'))
                            <div class="text-danger">
                                {{ $errors->first('mulai') }}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Tanggal Selesai Cuti</label>
                        <input type="date" name="selesai" class="form-control" placeholder="Tanggal Selesai Cuti .."
                            value="{{ $data_mohoncuti->selesai }}">

                        @if ($errors->has('selesai'))
                            <div class="text-danger">
                                {{ $errors->first('selesai') }}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        {{-- <label>Jumlah Hari Cuti</label> --}}
                        <input type="hidden" name="jml_hari" class="form-control" placeholder="Jumlah Hari Cuti .."
                            value="{{ $data_mohoncuti->jml_hari }}">

                        @if ($errors->has('jml_hari'))
                            <div class="text-danger">
                                {{ $errors->first('jml_hari') }}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Alamat Cuti</label>
                        <textarea name="alamat" class="form-control" placeholder="Alamat Cuti ..">{{ $data_mohoncuti->alamat }}</textarea>

                        @if ($errors->has('alamat'))
                            <div class="text-danger">
                                {{ $errors->first('alamat') }}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Nomor telepon</label>
                        <input type="text" name="telp" class="form-control" placeholder="Nomor Telepon .."
                            value="{{ $data_mohoncuti->telp }}">

                        @if ($errors->has('telp'))
                            <div class="text-danger">
                                {{ $errors->first('telp') }}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Atasan Pegawai</label>
                        <select name="atasan_id" class="form-control">
                            <option value="">- Pilih -</option>
                            
                            @foreach ($data_atasan as $p)
                                @if ($p->id_atasan == $data_mohoncuti->atasan_id)
                                    <option value="{{ $p->id_atasan }}" selected>
                                        {{ $p->pegawai1->nama }} -
                                        {{ $p->pegawai1->nip }} & {{ $p->pegawai2->nama }} -
                                        {{ $p->pegawai2->nip }}
                                    </option>
                                @else
                                    <option value="{{ $p->id_atasan }}">{{ $p->pegawai1->nama }} -
                                        {{ $p->pegawai1->nip }} & {{ $p->pegawai2->nama }} -
                                        {{ $p->pegawai2->nip }}
                                    </option>
                                @endif
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label>Persetujuan Cuti</label>
                        <select name="approval" class="form-control">
                            <option value="">Pilih Approval</option>
                            <option value="Y" {{ $data_mohoncuti->approval == 'Y' ? 'selected' : '' }}>Disetujuin
                            </option>
                            <option value="N" {{ $data_mohoncuti->approval == 'N' ? 'selected' : '' }}>Ditolak
                            </option>

                        </select>

                        @if ($errors->has('jenis'))
                            <div class="text-danger">
                                {{ $errors->first('jenis') }}
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
@endsection
