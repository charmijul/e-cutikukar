<style>
    #print-area {
        width: 100%;
        justify-content: center;
        justify-items: center;
        font-family: 'Times New Roman', Times, serif;
        font-size: 10px;
    }

    div.document table, div.document tr, div.document td {
        border: 1px solid black;
    }

    @media print {
        #print-area {
            width: 100%;
            margin: 0 auto;
            font-family: 'Times New Roman', Times, serif;
            font-size: 10px;
        }

        div.document table, div.document tr, div.document td {
            border: 1px solid black;
        }
    }
</style>


<header>
    <h1>@yield('header')</h1>
    <nav>
        <div class="card" id="print-area">
            <div class="card-header">

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
                </table><br /><br />
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
                            <td width="35%"> (Isi table)</td>
                            <td width="15%"> NIP</td>
                            <td width="35%"> (Isi table)</td>
                        </tr>
                        <tr>
                            <td> Jabatan</td>
                            <td> (Isi table)</td>
                            <td> Masa Kerja</td>
                            <td> (Isi table)</td>
                        </tr>
                        <tr>
                            <td> Unit Kerja</td>
                            <td colspan="0"> (Isi table)</td>
                            <td> Golongan</td>
                            <td colspan="0"> (Isi table)</td>
                        </tr>
                    </table><br /><br />
                    <table width="100%" cellspacing="0" cellpadding="1">
                        <tr>
                            <td width="100%" colspan="4"> II. JENIS CUTI YANG DIAMBIL**</td>
                        </tr>
                        <tr>
                            <td width="35%"> 1. Cuti Tahunan</td>
                            <td width="15%"></td>
                            <td width="35%"> 2. Cuti Besar</td>
                            <td width="15%"></td>
                        </tr>
                        <tr>
                            <td> 3. Cuti Sakit</td>
                            <td width="15%"></td>
                            <td> 4. Cuti Melahirkan</td>
                            <td width="15%"></td>
                        </tr>
                        <tr>
                            <td> 5. Cuti Karena Alasan Penting</td>
                            <td width="15%"></td>
                            <td> 6. Cuti di Luar Tanggungan Negara</td>
                            <td width="15%"></td>

                        </tr>
                    </table><br /><br />
                    <table width="100%" cellspacing="0" cellpadding="1">
                        <tr>
                            <td width="100%"> III. ALASAN CUTI</td>
                        </tr>
                        <tr>
                            <td><br></td>
                        </tr>
                    </table><br /><br />

                    <table width="100%" cellspacing="0" cellpadding="1">
                        <tr>
                            <td width="100%" colspan="6"> IV. LAMANYA CUTI</td>
                        </tr>
                        <tr>
                            <td width="15%"> Selama</td>
                            <td width="15%" align="center"> HARI</td>
                            <td width="20%"> Mulai Tanggal</td>
                            <td width="20%" align="center"></td>
                            <td width="10%" align="center">S.D</td>
                            <td width="25%" align="center"></td>
                        </tr>
                    </table><br /><br />
                    <table width="100%" cellspacing="0" cellpadding="1">
                        <tr>
                            <td width="610" colspan="3"> V. CATATAN CUTI ***<br></td>
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
                            <td width="270"> </td>
                        </tr>
                        <tr>
                            <td width="310"> </td>
                            <td width="350" colspan="2" align="center">Hormat
                                Saya,<br /><br /><br /><u></u><br />
                            </td>
                        </tr>
                    </table><br /><br />
                    <table width="100%" cellspacing="0" cellpadding="1">
                        <tr>
                            <td width="100%" colspan="4"> VII. PERTIMBANGAN ATASAN LANGSUNG**</td>
                        </tr>
                        <tr>
                            <td width="145"> DISETUJUI</td>
                            <td width="145"> PERUBAHAN****</td>
                            <td width="145"> DITANGGUHKAN****</td>
                            <td width="225"> TIDAK DISETUJUI****</td>
                        </tr>
                        <tr>
                            <td><br></td>
                            <td><br></td>
                            <td><br></td>
                            <td><br></td>
                        </tr>
                        <tr>

                            <td width="135" style="border-bottom: none;">Catatan Kasubbag:</td>

                            <td style="border: none;"></td>
                            <td style="border: none;"></td>
                            <td width="425" style="text-align:center">
                                <b><br /><br /><br /><u></u><br />NIP .</b>
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
                            <td width="126"> DISETUJUI</td>
                            <td width="127"> PERUBAHAN****</td>
                            <td width="127"> DITANGGUHKAN****</td>
                            <td width="280"> TIDAK DISETUJUI****</td>
                        </tr>
                        <tr>

                            <td><br></td>
                            <td><br></td>
                            <td><br></td>
                            <td><br></td>

                        </tr>
                    </table>
                    <table width="100%" cellspacing="0" cellpadding="1" border="0">
                        <tr>
                            <td width="380"></td>
                            <td width="280" style="text-align:center">
                                <strong><br /><br /><br /><u></u><br />NIP .</strong>
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

            </div>

    </nav>
    <button onclick="printDiv('print-area')">Print</button>
</header>

<footer>
    <p></p>
</footer>



<script>
    function printDiv(divId) {
        var printContents = document.getElementById(divId).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        document.body.innerHTML = originalContents;
        window.print();
    }
</script>