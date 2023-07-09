@extends('layout.main')
@section('container')

    <div class="card">
        <div class="row mt-3 justify-content-center" style="border-radius: 10px;">
            <div class="container col-md-6">
                <form action="/cuti-approval" method="GET">
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
                            <th>Persetujuan Atasan Langsung</th>
                            <th>Persetujuan Atasan Berwenang</th>
                            <th style="text-align: center;">Action</th>
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

                                    @if ($p->approval == 'Y')
                                        <td style="text-align: center;">
                                            <label class="label label-success"
                                                style="background-color: green; padding: 5px; border-radius: 5px; color: white;">disetujui</label>
                                        </td>
                                    @else
                                        <td style="text-align: center;">{{ $p->approval }}</td>
                                    @endif
                                    @if ($p->approval2 == 'Y')
                                        <td style="text-align: center;">
                                            <label class="label label-success"
                                                style="background-color: green; padding: 5px; border-radius: 5px; color: white;">disetujui</label>
                                        </td>
                                    @else
                                        <td style="text-align: center;">{{ $p->approval2 }}</td>
                                    @endif
                                    @if (auth()->user()->id_pegawai != $p->peg_id)
                                        <td>
                                            <!-- Tombol untuk membuka modal -->
                                            <a class="btn btn-app btn-primary" data-toggle="modal"
                                                data-target="#konfirmasiModal">
                                                <i class="fas fa-edit"></i> Konfirmasi
                                            </a>

                                            <!-- Modal -->
                                            <div class="modal fade" id="konfirmasiModal" tabindex="-1" role="dialog"
                                                aria-labelledby="konfirmasiModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="konfirmasiModalLabel">Konfirmasi
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        @include('mohoncuti.mohoncuti_approval_edit')

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    @else
                                        <td>
                                            <a href="/cuti/detail/{{ $p->id_mohoncuti }}" class="btn btn-primary">
                                                Detail
                                            </a>
                                            @if (auth()->user()->id_pegawai == $p->atasan->langsung || auth()->user()->id_pegawai == $p->atasan->berwenang)
                                            <p></p>
                                            @else
                                                <a href="/cuti/edit/{{ $p->id_mohoncuti }}" class="btn btn-warning">
                                                    Edit
                                                </a>
                                            @endif

                                            <a href="/cuti/hapus/{{ $p->id_mohoncuti }}" class="btn btn-danger">
                                                Hapus
                                            </a>
                                        </td>
                                    @endif

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
