@extends('layout.main')

@section('container')
    <div class="container">
        <div class="text-center">
            <strong>Tambah Data Atasan</strong>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <a href="/atasan" class="btn btn-primary">Kembali</a>
                <br />
                <br />

                <form method="post" action="/atasan/store">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>Unit Bagian Atasan</label>
                        <input type="text" name="bagian" class="form-control" placeholder="Unit Bagian Atasan ..">

                        @if ($errors->has('bagian'))
                            <div class="text-danger">
                                {{ $errors->first('bagian') }}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Atasan Langsung</label>
                        <select name="langsung" class="form-control">
                            <option value="">- Pilih -</option>
                            @foreach ($data_pegawai as $p)
                                <option value="{{ $p->id }}">{{ $p->nama }} - {{ $p->nip }}</option>
                            @endforeach

                        </select>
                    </div>
                    <br>

                    <div class="form-group">
                        <label>Atasan Berwenang</label>
                        <select name="berwenang" class="form-control">
                            <option value="">- Pilih -</option>
                            @foreach ($data_pegawai as $p)
                                <option value="{{ $p->id }}">{{ $p->nama }} - {{ $p->nip }}</option>
                            @endforeach

                        </select>

                    </div>



                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
