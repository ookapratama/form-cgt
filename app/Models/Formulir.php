<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulir extends Model
{
    protected $fillable = [
            'nik',
            'nisn',
            'foto',
            'nama',
            'no_hp',
            'tanggal',
            'tempat',
            'jenis_kelamin',
            'jurusan_id',
            // 'alamat',
            'ortu',
            'pekerjaan',
            'nama_sekolah',
            'alamat_sekolah',
            'kec_sekolah',
            'kab_sekolah',
            'provinsi_sekolah',
            'status',
            'no_formulir',
            'no_tes',
            'ruangan',
            'user_id',
    ];
    public function Jurusan()
    {
        return $this->belongsTo('App\Models\Jurusan');
    }
    public function User()
    {
        return $this->belongsTo('App\Models\User');
    }
}
