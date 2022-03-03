<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulirs', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('nisn')->nullable();
            $table->string('nama');
            $table->string('foto');
            $table->string('no_hp');
            $table->date('tanggal');
            $table->string('tempat');
            $table->string('jenis_kelamin');
            $table->foreignId('jurusan_id');
            // $table->string('alamat');
            $table->string('ortu');
            $table->string('pekerjaan');
            $table->string('nama_sekolah');
            $table->string('alamat_sekolah');
            $table->string('kec_sekolah');
            $table->string('kab_sekolah');
            $table->string('provinsi_sekolah');
            $table->integer('status');
            $table->integer('no_formulir');
            $table->integer('no_tes')->nullable();
            $table->integer('ruangan')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formulirs');
    }
}
