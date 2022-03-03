<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $fillable = [
        'nama',
        'status'
    ];
    public function Formulir()
    {
        return $this->hasMany('App\Models\Formulir');
    }
}
