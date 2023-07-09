<!DOCTYPE html>

<html lang="en">
<head>
@include('layout.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
@include('layout.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('layout.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Cuti</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Data Cuti</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    {{-- <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>

                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>

                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>

                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div> --}}
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Cuti Kantor Bupati Kutai Kartanegara</h3>
              </div>
              


            <div class="card">
              <div class="card-header">
                <a href="/pegawai/tambah" class="btn btn-primary">Tambah Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal pengajuan</th>
                    <th>Pegawai</th>
                    <th>Jenis Cuti</th>
                    <th>Tanggal Pelaksanaan</th>
                    <th>Lama Cuti</th>
                    <th>Persetujuan</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data_cuti as $p)
                  <tr>
                    <td>{{ $p->id_mohoncuti }}</td>
                    {{-- <td>{{ $p->tb_pegawai->nip }}</td>
                    <td>{{ $p->tb_pegawai->nama }}</td> --}}
                    <td>{{ $p->tgl }}</td>
                    <td>{{ $p->Pegawai->nama }} </td> 
                    <td>{{ $p->jenis }}</td>
                    <td>{{ $p->mulai }} s/d {{ $p->selesai }}</td>
                    <td>{{ $p->jml_hari }}</td>
                    {{-- <td>{{ $p->tb_atasan->tb_pegawai->nama }}</td>
                    <td>{{ $p->tb_atasan->tb_pegawai2->nama }}</td> --}}
                    <td>{{ $p->approval }}</td>
                    <td>
                                          <a href="/tb_mohoncuti/edit/{{ $p->id_mohoncuti }}" class="btn btn-warning">Edit</a>
                                          <a href="/tb_mohoncuti/hapus/{{ $p->id_mohoncuti }}" class="btn btn-danger">Hapus</a>
                                  </td>
                                </tr>
                                @endforeach
                            </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->


            
                    <br/>
                    {{ $data_cuti->links() }}
 
                </div>
            </div>
        </div>
    </thead>
    <tbody>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
@include('layout.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

@include('layout.script')
</body>
</html>
