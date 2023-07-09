<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atasan extends Model
{
    use HasFactory;
    // Menentukan nama tabel yang digunakan
    protected $table = "tb_atasan";
    // Menentukan nama primary key pada tabel
    protected $primaryKey = 'id_atasan';
    // Menentukan field yang bisa diisi pada tabel
    protected $fillable = ['bagian', 'langsung', 'berwenang'];
    // Menonaktifkan timestamps
    public $timestamps = false;

    // Relasi one-to-one ke model Pegawai dengan foreign key 'langsung'
    public function Pegawai1()
    {
        return $this->belongsTo(Pegawai::class, 'langsung');
    }

    // Relasi one-to-one ke model Pegawai dengan foreign key 'berwenang'
    public function Pegawai2()
    {
        return $this->belongsTo(Pegawai::class, 'berwenang');
    }

    // Relasi one-to-many ke model Mohoncuti
    public function Mohoncuti()
    {
        return $this->hasMany(Mohoncuti::class);
    }
}
