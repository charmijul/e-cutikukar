@extends('layout.main')

@section('container')
    <div class="container">
        <div class="text-center">
            <strong>Mengajukan Cuti</strong>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <a href="/cuti" class="btn btn-primary">Kembali</a>
                <br />
                <br />

                <form method="post" action="/cuti/store" enctype="multipart/form-data">

                    {{ csrf_field() }}

                    <div class="form-group">
                        {{-- <label>Tanggal Pembuatan Surat Cuti</label> --}}
                        <input type="text" class="form-control" readonly disabled
                            placeholder="{{ auth()->user()->pegawai->nama }}">
                    </div>

                    <div class="form-group">
                        {{-- <label>Tanggal Pembuatan Surat Cuti</label> --}}
                        <input type="text" name="peg_id" class="form-control" value="{{ auth()->user()->id_pegawai }}"
                            hidden>
                    </div>

                    <div class="form-group">
                        {{-- <label>Tanggal Pembuatan Surat Cuti</label> --}}
                        <input type="hidden" name="tgl" class="form-control"
                            placeholder="Tangga Pembuatan Surat Cuti ..">

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
                            <option value="Cuti Tahunan">Cuti tahunan</option>
                            <option value="Cuti Besar">Cuti Besar</option>
                            <option value="Cuti Sakit">Cuti Sakit</option>
                            <option value="Cuti Melahirkan">Cuti Melahirkan</option>
                            <option value="Cuti karena Alasan Penting">Cuti karena Alasan Penting</option>
                            <option value="Cuti di Luar tanggungan Negara">Cuti di Luar tanggungan Negara</option>

                        </select>

                        @if ($errors->has('jenis'))
                            <div class="text-danger">
                                {{ $errors->first('jenis') }}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Alasan Cuti</label>
                        <textarea name="alasan" class="form-control" placeholder="Alasan Cuti .."></textarea>

                        @if ($errors->has('alasan'))
                            <div class="text-danger">
                                {{ $errors->first('alasan') }}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Catatan Cuti</label>
                        <textarea name="catatan" class="form-control" placeholder="Catatan Cuti .."></textarea>

                        @if ($errors->has('catatan'))
                            <div class="text-danger">
                                {{ $errors->first('catatan') }}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Tanggal Mulai Cuti</label>
                        <input type="date" name="mulai" class="form-control" placeholder="Tangga Mulai Cuti ..">

                        @if ($errors->has('mulai'))
                            <div class="text-danger">
                                {{ $errors->first('mulai') }}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Tanggal Selesai Cuti</label>
                        <input type="date" name="selesai" class="form-control" placeholder="Tanggal Selesai Cuti ..">
                        @if ($errors->has('selesai'))
                            <div class="text-danger">
                                {{ $errors->first('selesai') }}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        {{-- <label>Jumlah Hari Cuti</label> --}}
                        <input type="hidden" name="jml_hari" class="form-control" placeholder="Jumlah Hari Cuti ..">

                        @if ($errors->has('jml_hari'))
                            <div class="text-danger">
                                {{ $errors->first('jml_hari') }}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Alamat Cuti</label>
                        <textarea name="alamat" class="form-control" placeholder="Alamat Cuti .."></textarea>

                        @if ($errors->has('alamat'))
                            <div class="text-danger">
                                {{ $errors->first('alamat') }}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Nomor telepon</label>
                        <input type="text" name="telp" class="form-control" placeholder="Nomor Telepon ..">

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
                                <option value="{{ $p->id_atasan }}">{{ $p->Pegawai1->nama }} -
                                    {{ $p->Pegawai1->nip }} & {{ $p->Pegawai2->nama }} - {{ $p->Pegawai2->nip }}
                                </option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <input type="text" name="approval" class="form-control" value="Menunggu" hidden>
                    </div>

                    <div class="form-group">
                        <input type="text" name="approval2" class="form-control" value="Menunggu" hidden>
                    </div>

                    <div class="form-group">
                        <label for="bukti1">Bukti 1</label>
                        <input type="file" class="form-control" id="bukti1" name="bukti1">
                        @error('bukti1')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="bukti2">Bukti 2</label>
                        <input type="file" class="form-control" id="bukti2" name="bukti2">
                        @error('bukti2')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>


                    {{-- <label for="bukti1">Bukti Cuti 1</label>
                    <input type="file" name="bukti1" id="bukti1" accept="application/pdf"> --}}



            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Simpan">
            </div>
            </form>

        </div>
    </div>
    </div>
@endsection
