<style>
    div.konten div.card {
        /* background-color: rgb(139, 240, 240); */
        width: 100%;
        justify-content: center;
        justify-items: center;
        font-family: 'Times New Roman', Times, serif;
        font-size: 12px;
        padding: 10px;
    }

    div.document table {
        border: none;
    }

    div.document tr,
    div.document td {
        border: 1px solid black;
    }

    @media print {

        body * {
            margin: 0;
            visibility: hidden;
        }

        .card-primary.card-outline {
            display: none;
        }

        div.konten div.card,
        div.konten div.card * {
            visibility: visible;
        }

        @page {
            /* size: A4 landscape; */
            size: A4 portrait;
        }

        div.konten {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #print-area {
            justify-content: center;
            align-items: center;
            border-style: none;
            font-size: 12px;
            font-family: 'Times New Roman', Times, serif;
            margin-left: 100px;
            padding: 0;
            left: 0;
            top: 0;
            width: 793.7px;
            position: absolute;
        }

        div.card table {
            font-size: 11.8px;
            width: 100%;
            border-collapse: collapse;
            margin: 0;
            padding: 0;
        }

        div.document table {
            border: none;
        }

        div.document tr,
        div.document td {
            font-family: 'Times New Roman', Times, serif;
            border: 1px solid black;
        }
    }
</style>

<div class="konten">

    <div class="card" id="print-area">
        {{-- <div class="card-body"> --}}
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td width="1"></td>
                <td width="320">ANAK LAMPIRAN 1.B</td>
                <td width="100"></td>
                <td width="320" colspan="2"></td>
            </tr>
            <tr>
                <td></td>
                <td>PERATURAN BADAN KEPEGAWAIAN DAERAH</td>
                <td width="500"></td>
                <td width="260">Kepada</td>
            </tr>
            <tr>
                <td></td>
                <td>REPUBLIK INDONESIA</td>
                <td width="77"></td>
                <td width="260">Yth. Sekretaris Daerah</td>
            </tr>
            <tr>
                <td></td>
                <td>NOMOR 24 TAHUN 2017</td>
                <td width="100"></td>
                <td>Kabupaten Kutai Kartanegara</td>
            </tr>
            <tr>
                <td></td>
                <td>TENTANG TATA CARA PEMBERIAN CUTI</td>
                <td width="100"></td>
                <td width="260">di-</td>
            </tr>
            <tr>
                <td></td>
                <td>PEGAWAI NEGERI SIPIL</td>
                <td width="130"></td>
                <td width="260"><u>Tempat</u></td>
            </tr>
        </table>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td align="center">FORMULIR PERMINTAAN DAN PEMBERIAN CUTI</td>
            </tr>
        </table>

        <div class="document">
            <table width="100%" cellspacing="0" cellpadding="1">
                <tr>
                    <td width="100%" colspan="4"> I. DATA PEGAWAI</td>
                </tr>
                <tr>
                    <td width="15%"> Nama</td>
                    <td width="35%"> {{ $data_mohoncuti->Pegawai->nama }}</td>
                    <td width="15%"> NIP</td>
                    <td width="35%"> {{ $data_mohoncuti->Pegawai->nip }}</td>
                </tr>
                <tr>
                    <td> Jabatan</td>
                    <td> {{ $data_mohoncuti->Pegawai->jab }}</td>
                    <td> Masa Kerja</td>
                    <td> {{ $data_mohoncuti->Pegawai->tgl_masa }}</td>
                </tr>
                <tr>
                    <td> Unit Kerja</td>
                    <td colspan="0"> {{ $data_mohoncuti->Pegawai->unit }}</td>
                    <td> Golongan</td>
                    <td colspan="0"> {{ $data_mohoncuti->Pegawai->golongan }}</td>
                </tr>
            </table><br /><br />
            <table width="100%" cellspacing="0" cellpadding="1">
                <tr>
                    <td width="100%" colspan="4"> II. JENIS CUTI YANG DIAMBIL**</td>
                </tr>
                <tr>
                    <td width="35%"> 1. Cuti Tahunan</td>
                    <td width="15%" align="center">
                        @if ($data_mohoncuti->jenis == 'Cuti Tahunan')
                            <div style="display: flex; justify-content: center;"><img
                                    src="{{ asset('/gambar/cek.png') }}" width="9" height="9" /></div>
                        @else
                        @endif
                    </td>
                    <td width="35%"> 2. Cuti Besar</td>
                    <td width="15%" align="center">
                        @if ($data_mohoncuti->jenis == 'Cuti Besar')
                            <div style="display: flex; justify-content: center;"><img
                                    src="{{ asset('/gambar/cek.png') }}" width="9" height="9" /></div>
                        @else
                        @endif
                    </td>
                </tr>
                <tr>
                    <td> 3. Cuti Sakit</td>
                    <td width="15%" align="center">
                        @if ($data_mohoncuti->jenis == 'Cuti Sakit')
                            <div style="display: flex; justify-content: center;"><img
                                    src="{{ asset('/gambar/cek.png') }}" width="9" height="9" /></div>
                        @else
                        @endif
                    </td>
                    <td> 4. Cuti Melahirkan</td>
                    <td width="15%" align="center">
                        @if ($data_mohoncuti->jenis == 'Cuti Melahirkan')
                            <div style="display: flex; justify-content: center;"><img
                                    src="{{ asset('/gambar/cek.png') }}" width="9" height="9" /></div>
                        @else
                        @endif
                    </td>
                </tr>
                <tr>
                    <td> 5. Cuti Karena Alasan Penting</td>
                    <td width="15%" align="center">
                        @if ($data_mohoncuti->jenis == 'Cuti karena Alasan Penting')
                            <div style="display: flex; justify-content: center;"><img
                                    src="{{ asset('/gambar/cek.png') }}" width="9" height="9" /></div>
                        @else
                        @endif
                    </td>
                    <td> 6. Cuti di Luar Tanggungan Negara</td>
                    <td width="15%" align="center">
                        @if ($data_mohoncuti->jenis == 'Cuti di Luar tanggungan Negara')
                            <div style="display: flex; justify-content: center;"><img
                                    src="{{ asset('/gambar/cek.png') }}" width="9" height="9" /></div>
                        @else
                        @endif
                    </td>

                </tr>
            </table><br /><br />
            <table width="100%" cellspacing="0" cellpadding="1">
                <tr>
                    <td width="100%"> III. ALASAN CUTI</td>
                </tr>
                <tr>
                    <td>{{ $data_mohoncuti->alasan }}<br><br></td>
                </tr>
            </table><br /><br />

            <table width="100%" cellspacing="0" cellpadding="1">
                <tr>
                    <td width="100%" colspan="6"> IV. LAMANYA CUTI</td>
                </tr>
                <tr>
                    <td width="15%"> Selama</td>
                    <td width="15%" align="center"> {{ $data_mohoncuti->jml_hari }} HARI</td>
                    <td width="20%"> Mulai Tanggal</td>
                    <td width="20%" align="center">{{ $data_mohoncuti->mulai }}</td>
                    <td width="10%" align="center">S.D</td>
                    <td width="25%" align="center">{{ $data_mohoncuti->selesai }}</td>
                </tr>
            </table><br /><br />
            <table width="100%" cellspacing="0" cellpadding="1">
                <tr>
                    <td width="610" colspan="3"> V. CATATAN CUTI ***<br>{{ $data_mohoncuti->catatan }}</td>
                </tr>
                <tr>
                    <td width="270" colspan="3"> 1. CUTI TAHUNAN</td>
                    <td width="250"> 2. CUTI BESAR</td>
                    <td width="140"></td>
                </tr>
                <tr>
                    <td width="90" align="center"> TAHUN</td>
                    <td width="50" align="center"> SISA</td>
                    <td width="130"align="center"> KETERANGAN</td>
                    <td width="250"> 3. CUTI SAKIT</td>
                    <td width="140"></td>
                </tr>
                <tr>
                    <td> N.2</td>
                    <td align="center"></td>
                    <td></td>
                    <td> 4. CUTI MELAHIRKAN</td>
                    <td></td>
                </tr>
                <tr>
                    <td> N.1</td>
                    <td align="center"></td>
                    <td></td>
                    <td> 5. CUTI KARENA ALASAN PENTING</td>
                    <td></td>
                </tr>
                <tr>
                    <td> N</td>
                    <td align="center"></td>
                    <td align="center">Tahap : hari kerja</td>
                    <td> 6. CUTI DI LUAR TANGGUNGAN NEGARA</td>
                    <td></td>
                </tr>
            </table><br /><br />
            <table width="100%" cellspacing="0" cellpadding="1">
                <tr>
                    <td width="100%" colspan="3"> VI. ALAMAT SELAMA MENJALANKAN CUTI</td>
                </tr>
                <tr>
                    <td width="310"></td>
                    <td width="80"> TELP</td>
                    <td width="270"> {{ $data_mohoncuti->telp }}</td>
                </tr>
                <tr>
                    <td width="310">{{ $data_mohoncuti->alamat }}</td>
                    <td width="350" colspan="2" align="center">Hormat
                        Saya,<br /><br /><br /><u>{{ $data_mohoncuti->Pegawai->nama }}</u><br />
                        NIP. {{ $data_mohoncuti->Pegawai->nip }}
                    </td>
                </tr>
            </table><br /><br />
            <table width="100%" cellspacing="0" cellpadding="1" style="border: none;">
                <tr>
                    <td width="100%" colspan="4"> VII. PERTIMBANGAN ATASAN LANGSUNG**</td>
                </tr>
                <tr>
                    <td width="20%"> DISETUJUI</td>
                    <td width="20%"> PERUBAHAN****</td>
                    <td width="20%"> DITANGGUHKAN****</td>
                    <td width="40%"> TIDAK DISETUJUI****</td>
                </tr>
                <tr>
                    <td>
                        @if ($data_mohoncuti->approval == 'Y')
                            <div style="display: flex; justify-content: center;"><img
                                    src="{{ asset('/gambar/cek.png') }}" width="9" height="9" /></div>
                        @else
                            <br>
                        @endif
                    </td>
                    <td>
                        @if ($data_mohoncuti->approval == 'perubahan')
                            <div style="display: flex; justify-content: center;"><img
                                    src="{{ asset('/gambar/cek.png') }}" width="9" height="9" /></div>
                        @else
                        @endif
                    </td>
                    <td>
                        @if ($data_mohoncuti->approval == 'ditangguhkan')
                            <div style="display: flex; justify-content: center;"><img
                                    src="{{ asset('/gambar/cek.png') }}" width="9" height="9" /></div>
                        @else
                        @endif
                    </td>
                    <td>
                        @if ($data_mohoncuti->approval == 'N')
                            <div style="display: flex; justify-content: center;"><img
                                    src="{{ asset('/gambar/cek.png') }}" width="9" height="9" /></div>
                        @else
                        @endif
                    </td>
                </tr>
                <tr>

                    <td width="20%" style="border: none;">Catatan Kasubbag:</td>
                    <td style="border: none;"></td>
                    <td style="border: none;"></td>
                    <td width="40%" style="text-align:center">
                        <b><br /><br /><br /><u>
                                {{ $data_mohoncuti->Atasan->pegawai1->nama }}</u><br />NIP .
                            {{ $data_mohoncuti->Atasan->pegawai1->nip }}</b>
                    </td>
                </tr>
            </table>
            <table width="100%" cellspacing="0" cellpadding="1">
                {{-- kosong?? --}}
            </table><br /><br />
            <table width="100%" cellspacing="0" cellpadding="1">
                <tr>
                    <td width="100%" colspan="4"> VIII. PERTIMBANGAN PEJABAT YANG BERWENANG MEMBERIKAN
                        CUTI**</td>
                </tr>
                <tr>
                    <td width="20%"> DISETUJUI</td>
                    <td width="20%"> PERUBAHAN****</td>
                    <td width="20%"> DITANGGUHKAN****</td>
                    <td width="40%"> TIDAK DISETUJUI****</td>
                </tr>
                <tr>
                    <td>
                        @if ($data_mohoncuti->approval2 == 'Y')
                            <div style="display: flex; justify-content: center;"><img
                                    src="{{ asset('/gambar/cek.png') }}" width="9" height="9" /></div>
                        @else
                            <br>
                        @endif
                    </td>
                    <td>
                        @if ($data_mohoncuti->approval2 == 'perubahan')
                            <div style="display: flex; justify-content: center;"><img
                                    src="{{ asset('/gambar/cek.png') }}" width="9" height="9" /></div>
                        @else
                        @endif
                    </td>
                    <td>
                        @if ($data_mohoncuti->approval2 == 'ditangguhkan')
                            <div style="display: flex; justify-content: center;"><img
                                    src="{{ asset('/gambar/cek.png') }}" width="9" height="9" /></div>
                        @else
                        @endif
                    </td>
                    <td>
                        @if ($data_mohoncuti->approval2 == 'N')
                            <div style="display: flex; justify-content: center;"><img
                                    src="{{ asset('/gambar/cek.png') }}" width="9" height="9" /></div>
                        @else
                        @endif
                    </td>

                </tr>
            </table>
            <table width="100%" cellspacing="0" cellpadding="1">
                <tr>
                    <td width="60%"></td>
                    <td width="40%" style="text-align:center">
                        <strong><br /><br /><br /><u>
                                {{ $data_mohoncuti->Atasan->pegawai2->nama }}
                            </u><br />NIP . {{ $data_mohoncuti->Atasan->pegawai2->nip }}</strong>
                    </td>
                </tr>
            </table><br />
        </div>

        <table width="100%" border="0" cellspacing="0" cellpadding="1">
            <tr>
                <td>Catatan:</td>
            </tr>
            <tr>
                <td>* Coret yang tidak perlu</td>
            </tr>
            <tr>
                <td>** Pilih salah satu dengan memberi tanda centang ( <img src="../../../assets/img/cek.png"
                        width="9" height="9" /> )</td>
            </tr>
            <tr>
                <td>*** Diisi oleh pejabat yang menangani bidang kepegawaian sebelum PNS mengajukan cuti
                </td>
            </tr>
            <tr>
                <td>**** Diberi tanda centang dan alasannya...</td>
            </tr>
            <tr>
                <td>N = Cuti tahun berjalan</td>
            </tr>
            <tr>
                <td>N-1 = Sisa Cuti 1 Tahun Sebelumnya</td>
            </tr>
            <tr>
                <td>N-2 = Sisa Cuti Tahunan Sebelumnya</td>
            </tr>
        </table>
        {{-- </div> --}}
    </div>
    <button onclick="printPDF()">Print</button>

</div>
<script>
    function printPDF() {
        window.print();
    }
</script>
