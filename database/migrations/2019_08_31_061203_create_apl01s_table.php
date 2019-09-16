<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApl01sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apl01s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('nik');
            $table->string('nisn');
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('kebangsaan');
            $table->longtext('alamat_rumah');
            $table->integer('no_telp')->nullable();
            $table->bigInteger('no_hp');
            $table->integer('no_kantor')->nullable();
            $table->string('email');
            $table->string('pendidikan_terakhir');
            $table->string('judul_sertifikasi');
            $table->string('nomor_sertifikasi');
            $table->string('tujuan_asesmen');
            $table->string('invoice');
            $table->string('status');
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
        Schema::dropIfExists('apl01s');
    }
}
