@extends('layout.main')

@section('container')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Profile Image -->
                <div class="card card-primary card-outline" style="width: 30%">
                    <div class="card-body box-profile" style="text-align:center">
                        <strong>Berkas yang dilampirkan</strong>
                        @if ($data_mohoncuti->bukti1 == null && $data_mohoncuti->bukti2 == null)
                            <p>Belum ada file terlampirkan</p>
                        @else
                            <form action="/lampiran/download/{{ $data_mohoncuti->id_mohoncuti }}">
                                <input type="hidden" class="form-control md-6" placeholder="Search..." name="lampiran"
                                    value="bukti1">
                                <button class="btn btn-success" type="submit">Download</button>
                            </form>
                            <br>
                            <form action="/lampiran/download/{{ $data_mohoncuti->id_mohoncuti }}">
                                <input type="hidden" class="form-control md-6" placeholder="Search..." name="lampiran"
                                    value="bukti2">
                                <button class="btn btn-success" type="submit">Download</button>
                            </form>
                        @endif

                        <div class="modal fade" id="modal-default" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Ubah Photo Profile</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true"></span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group text-center">

                                                <input type="file" name="foto" class="form-control mt-3"
                                                    onchange="previewImage()" id="foto">
                                            </div>
                                            <div class="form-group text-center">
                                                <input type="submit" class="btn btn-success" value="Simpan">
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>

                <div class="card" style="width: 70%">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Surat
                                    Permohonan</a></li>
                            <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Surat Pernyataan
                                    1</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Surat Pernyataan
                                    2</a>
                            </li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                                <!-- Post -->
                                <div class="post">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg"
                                            alt="user image">
                                        <span class="username">
                                            <a href="#">{{ $data_mohoncuti->Pegawai->nama }}</a>
                                            <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                        </span>
                                        <span class="description">Shared publicly - 7:30 PM today</span>
                                    </div>
                                    <!-- /.user-block -->

                                    @include('mohoncuti.mohoncuti_cetak')
                                    <!-- /.post -->
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="timeline">
                                    <!-- The timeline -->
                                </div>
                                <!-- /.tab-pane -->

                                <div class="tab-pane" id="settings">

                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div>
    </section>
@endsection
