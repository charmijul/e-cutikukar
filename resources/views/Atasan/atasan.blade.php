@extends('layout.main')
@section('container')
    <div class="card">
        <div class="card-header">
            <a href="/atasan/tambah" class="btn btn-primary">Tambah Data</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID Atasan</th>
                        <th>Bagian</th>
                        <th>Atasan Langsung</th>
                        <th>Atasan Berwenang</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_atasan as $p)
                        <tr>
                            <td>
                                @if (request('page') !== null)
                                {{ (request('page') - 1) * 10 + $loop->iteration }}
                            @else()
                                {{ $loop->iteration }}
                            @endif
                            </td>
                            <td>{{ $p->bagian }}</td>
                            <td>{{ $p->Pegawai1->nama }}</td>
                            <td>{{ $p->Pegawai2->nama }}</td>
                            <td>
                                <a href="/atasan/edit/{{ $p->id_atasan }}" class="btn btn-warning">Edit</a>
                                <a href="/atasan/hapus/{{ $p->id_atasan }}" class="btn btn-danger">Hapus</a>
                            </td>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <br />
    {{ $data_atasan->links() }}
@endsection
