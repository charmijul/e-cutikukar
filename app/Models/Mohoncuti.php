<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mohoncuti extends Model
{
    use HasFactory;
    // Menentukan nama tabel yang digunakan
    protected $table = "tb_mohoncuti";
    // Menentukan nama primary key pada tabel
    protected $primaryKey = 'id_mohoncuti';
    // Menentukan field yang bisa diisi pada tabel
    protected $fillable = [
        'peg_id', 
        'tgl', 
        'jenis', 
        'alasan', 
        'catatan', 
        'mulai', 
        'selesai', 
        'jml_hari', 
        'alamat', 
        'telp', 
        'atasan_id',
        'bukti1',
        'bukti2',
        'approval',
        'approval2'];
    // Menonaktifkan timestamps
    public $timestamps = false;

    // Relasi many-to-one ke model Pegawai dengan foreign key 'peg_id'
    public function Pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'peg_id');
    }
    
    // Relasi many-to-one ke model Atasan dengan foreign key 'atasan_id'
    public function Atasan()
    {
        return $this->belongsTo(Atasan::class, 'atasan_id');
    }
}
