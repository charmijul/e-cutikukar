<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = "tb_pegawai";
    protected $guarded = ['id'];
    public $timestamps = false;

    // relasi one-to-many antara Pegawai dan Mohoncuti
    public function Mohoncuti()
    {
        return $this->hasMany(Mohoncuti::class);
    }

    // relasi one-to-many antara Pegawai dan Atasan
    public function Atasan()
    {
        return $this->hasMany(Atasan::class);
    }

    // relasi one-to-one antara Pegawai dan User
    public function user()
    {
     return $this->hasOne(User::class);   
    }
}
