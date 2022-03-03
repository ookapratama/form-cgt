<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendaftaran extends Model
{
    protected $fillable = [
        'id_calgot',
        'stambuk',
        'nama',
        'tempat_lahir',
        'tgl_lahir',
        'jkl',
        'agama',
        'no_telp',
        'email',
        'alamat',
        'asal',
        'nama_ayah',
        'nama_ibu',
        'organisasi',
        'alasan',
        'foto',
        'status',
        'reg',
        'angkatan',
        'created_at',
        'updated_at',
        'ket',
        'formulir'
    ];
   
}
