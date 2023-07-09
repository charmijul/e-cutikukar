@extends('layout.main')

@section('container')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                @if ($data_pegawai->foto)
                                    <img class="profile-user-img img-fluid img-circle"
                                        src="{{ asset('storage/' . $data_pegawai->foto) }}">
                                @else
                                    @if ($data_pegawai->jk == 'Laki-laki')
                                        <img class="profile-user-img img-fluid img-circle"
                                            src="{{ asset('Gambar/avatarman.png') }}">
                                    @else
                                        <img class="profile-user-img img-fluid img-circle"
                                            src="{{ asset('Gambar/avatargirl.png') }}">
                                    @endif
                                @endif

                            </div>

                            <h3 class="profile-username text-center">{{ $data_pegawai->nama }}</h3>

                            <p class="text-muted text-center">{{ ucwords(strtolower($data_pegawai->jab)) }}</p>


                            <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                                data-target="#modal-default">
                                Change Image
                            </button>
                            <div class="modal fade" id="modal-default" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Ubah Photo Profile</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/pegawai/profile/{{ $data_pegawai->id }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group text-center">
                                                    @if ($data_pegawai->foto)
                                                        <img class="profile-img img-fluid img-circle mx-auto"
                                                            src="{{ asset('storage/' . $data_pegawai->foto) }}"
                                                            width="150px" height="150px" style="border-radius: 50%;">
                                                    @else
                                                        @if ($data_pegawai->jk == 'Laki-laki')
                                                            <img class="profile-img img-fluid img-circle"
                                                                src="{{ asset('Gambar/avatarman.png') }}" width="150px"
                                                                height="150px">
                                                        @else
                                                            <img class="profile-img img-fluid img-circle"
                                                                src="{{ asset('Gambar/avatargirl.png') }}" width="150px"
                                                                height="150px">
                                                        @endif
                                                    @endif
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
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header" >
                            <h3 class="card-title">About Me</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> Unit Kerja</strong>

                            <p class="text-muted">
                                {{ $data_pegawai->unit }}
                            </p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Unit Organisasi</strong>

                            <p class="text-muted">{{ $data_pegawai->unit_organisasi }}</p>

                            <hr>

                            <strong><i class="fas fa-pencil-alt mr-1"></i> Jabatan</strong>

                            <p class="text-muted">{{ ucwords(strtolower($data_pegawai->jab)) }}</p>

                            <hr>

                            <strong><i class="far fa-file-alt mr-1"></i> Golongan</strong>

                            <p class="text-muted">{{ $data_pegawai->golongan }}</p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity"
                                        data-toggle="tab">Activity</a></li>
                                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a>
                                </li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="profile-right">
                                    <div class="profile-info">
                                        <div class="table-responsive">
                                            <table class="table table-profile">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <h4>{{ $data_pegawai->nama }}<small><i class="ion-ios-checkmark fa-lg text-success"></i> <br>{{ $data_pegawai->jab }}</small></h4>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="highlight">
                                                        <td class="field">NIP</td>
                                                        <td>{{ $data_pegawai->nip }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="field">Jenis Kelamin</td>
                                                        <td>{{ $data_pegawai->jk }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="field">TTL</td>
                                                        <td>{{ $data_pegawai->tmp_lhr }}, {{ $data_pegawai->tgl_lhr }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="field">Alamat</td>
                                                        <td><i class="fa fa-map-marker fa-lg m-r-5"></i> {{ $data_pegawai->alamat }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="field">No. Telp</td>
                                                        <td>{{ $data_pegawai->telp }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="field">Email</td>
                                                        <td>{{ $data_pegawai->email }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="field">Unit Kerja</td>
                                                        <td>{{ ucwords(strtolower($data_pegawai->unit)) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="field">Jabatan</td>
                                                        <td>{{ ucwords(strtolower($data_pegawai->jab)) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="field">Tgl. Masuk Kerja</td>
                                                        <td>{{ $data_pegawai->tgl_masa }}</td>
                                                    </tr>
                                                    @php
                                                    $start2	=new DateTime($data_pegawai->tgl_lhr);
                                                    $today2	=new DateTime();
                                                    $diff2	=$today2->diff($start2);
                                                        if($data_pegawai->unit!= "STAF AHLI" && $data_pegawai->unit!="SEKRETARIAT DAERAH" && $data_pegawai->unit!="KEPALA DINAS" && $data_pegawai->unit!="ASISTEN")
                                                        {
                                                            if($diff2->y >= 58) 
                                                            {
                                                                $bup="-";
                                                            }
                                                            else 
                                                            {
                                                                $bup="58 Tahun";
                                                            }
                                                        }
                                                        else
                                                        {
                                                            if($diff2->y >= 60) 
                                                            {
                                                                $bup="-";
                                                            }
                                                            else 
                                                            {
                                                                $bup="60 Tahun";
                                                            }
                                                        }
                                                    @endphp
                                                    <tr>
                                                        <td class="field">BUP</td>
                                                        <td>{{ $bup }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- /.tab-pane -->
                                {{-- MAIN CONTENT --}}
                                {{-- <li><b>NIP: </b>{{ $data_pegawai->nip }}</li>
                                <li><b>Nama: </b>{{ $data_pegawai->nama }}</li>
                                <li><b>Jenis Kelamin: </b>{{ $data_pegawai->jk }}</li>
                                <li><b>Tempat Lahir: </b>{{ $data_pegawai->tmp_lhr }}</li>
                                <li><b>Tanggal Lahir: </b>{{ $data_pegawai->tgl_lhr }}</li>
                                <li><b>Alamat: </b>{{ $data_pegawai->alamat }}</li>
                                <li><b>Nomor Telepon: </b>{{ $data_pegawai->telp }}</li>
                                <li><b>Email: </b>{{ $data_pegawai->email }}</li>
                                <li><b>N2: </b>{{ $data_pegawai->n2 }}</li>
                                <li><b>N1: </b>{{ $data_pegawai->n1 }}</li>
                                <li><b>N: </b>{{ $data_pegawai->n }}</li> --}}


                                <!-- /.tab-pane -->


                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->


    </section>
    <script>
        function previewImage() {
            const image = document.querySelector('#foto');
            const imgPreview = document.querySelector('.profile-img');
            imgPreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
