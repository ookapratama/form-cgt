<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftran', function (Blueprint $table) {
            $table->id();
            $table->string('stambuk');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->string('jkl');
            $table->string('agama');
            $table->string('no_telp');
            $table->string('email');
            $table->string('alamat');
            $table->string('asal');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('organisasi');
            $table->string('alasan');
            $table->string('foto');
            $table->string('status');
            $table->string('reg');
            $table->string('angkatan');
            $table->string('ket');
            $table->string('formulir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftran');
    }
}
