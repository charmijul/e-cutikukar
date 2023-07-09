@extends('layout.main')
@section('container')

    <div class="card">
        <div class="row mt-3 justify-content-center" style="border-radius: 10px;">
            <div class="container col-md-6">
                <form action="/cuti-ditangguhkan" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search.." name="search"
                            value="{{ request('search') }}">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @if ($data_cuti->count())
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal pengajuan</th>
                            <th>Pegawai</th>
                            <th>Jenis Cuti</th>
                            <th>Tanggal Pelaksanaan</th>
                            <th>Lama Cuti</th>
                            <th>Approval</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_cuti as $p)
                            @if (auth()->user()->id_pegawai == $p->atasan->langsung ||
                                    auth()->user()->id_pegawai == $p->atasan->berwenang ||
                                    auth()->user()->id_pegawai == $p->peg_id ||
                                    auth()->user()->level == "Kepegawaian")
                                <tr>
                                    <td>
                                        @if (request('page') !== null)
                                            {{ (request('page') - 1) * 10 + $loop->iteration }}
                                        @else()
                                            {{ $loop->iteration }}
                                        @endif
                                    </td>

                                    <td>{{ $p->tgl }}</td>
                                    <td>{{ $p->Pegawai->nama }} </td>
                                    <td>{{ $p->jenis }}</td>
                                    <td>{{ $p->mulai }} s/d {{ $p->selesai }}</td>
                                    <td>{{ $p->jml_hari }} Hari</td>

                                    <td style="text-align: center;">{{ $p->approval }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-center fs-4">Tidak ada data cuti</p>
            @endif

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <br />
    {{ $data_cuti->links() }}
@endsection
