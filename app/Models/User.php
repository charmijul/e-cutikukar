<?php

namespace App\Models;
use App\Models\Pegawai;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'id_pegawai',
        'username',
        'level',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ]; 

    // Relasi dengan model Pegawai
    public function pegawai(){
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
}
