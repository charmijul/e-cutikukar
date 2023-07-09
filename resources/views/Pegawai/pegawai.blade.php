@extends('layout.main')

@section('container')
    <div class="card">
        <div class="card-header">

            <a href="/pegawai/tambah" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="row mt-3 justify-content-center" style="border-radius: 10px;">
            <div class="container col-md-6">
                <form action="/pegawai" method="GET">
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
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Unit Organisasi</th>
                        <th>Jabatan</th>
                        <th>Golongan Pegawai</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($data_pegawai as $p)
                        <tr>
                            <td>
                                @if (request('page') !== null)
                                    {{ (request('page') - 1) * 10 + $loop->iteration }}
                                @else()
                                    {{ $loop->iteration }}
                                @endif
                            </td>
                            <td><a href="/pegawai/profile/{{ $p->id }}">{{ $p->nip }}</a></td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->jk }}</td>
                            <td>{{ $p->unit_organisasi }}</td>
                            <td>{{ ucwords(strtolower($p->jab)) }}</td>
                            <td>{{ $p->golongan }}</td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal"
                                    data-bs-target="#Pegawai-Modal-{{ $p->id }}">
                                    Detail
                                </button>
                                @if (auth()->user()->level != 'Atasan1' && auth()->user()->level != 'Atasan2')
                                    <a href="/pegawai/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/pegawai/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                @endif

                            </td>
                        </tr>
                        @include('Pegawai.pegawai_detail')
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <br />
    {{ $data_pegawai->links() }}
@endsection
