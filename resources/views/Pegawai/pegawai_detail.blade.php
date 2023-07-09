<style>
    .modal-dialog {
        max-width: 80%;
    }
    .modal-content .card{
        overflow-y: scroll;
    }
    .card img{
        border-radius: 50%;
        width: 100px;
        height: 100px;
        object-fit: cover;
        margin: auto;
        display: block;
        margin-bottom: 10px;
    }
</style>
<!-- Modal -->
<div class="modal fade" id="Pegawai-Modal-{{ $p->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="card">
                <img src="{{ asset('storage/' . $p->foto) }}" alt="Pegawai">
                <div class="card-body">
                    <h2>{{ $p->name }}</h2>
                    <ul>
                        <li><b>NIP: </b>{{ $p->nip }}</li>
                        <li><b>Nama: </b>{{ $p->nama }}</li>
                        <li><b>Jenis Kelamin: </b>{{ $p->jk }}</li>
                        <li><b>Tempat Lahir: </b>{{ $p->tmp_lhr }}</li>
                        <li><b>Tanggal Lahir: </b>{{ $p->tgl_lhr }}</li>
                        <li><b>Alamat: </b>{{ $p->alamat }}</li>
                        <li><b>Nomor Telepon: </b>{{ $p->telp }}</li>
                        <li><b>Email: </b>{{ $p->email }}</li>
                        <li><b>Unit Kerja: </b>{{ $p->unit }}</li>
                        <li><b>Unit Organisasi: </b>{{ $p->unit_organisasi }}</li>
                        <li><b>Jabatan: </b>{{ $p->jab }}</li>
                        <li><b>Tanggal Masa Kerja: </b>{{ $p->tgl_masa }}</li>
                        <li><b>Golongan Pegawai: </b>{{ $p->golongan }}</li>
                        <li><b>N2: </b>{{ $p->n2 }}</li>
                        <li><b>N1: </b>{{ $p->n1 }}</li>
                        <li><b>N: </b>{{ $p->n }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>