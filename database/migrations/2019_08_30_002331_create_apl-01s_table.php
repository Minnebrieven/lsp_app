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
        Schema::create('apl-01s', function (Blueprint $table) {
            $table->bigIncrements('id');
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
            $table->integer('no_hp');
            $table->integer('kantor')->nullable();
            $table->string('email');
            $table->string('pendidikan_terakhir');
            $table->string('nama_lembaga/perusahaaan');
            $table->string('jabatan');
            $table->longtext('alamat');
            $table->integer('No_telp');
            $table->string('fax')->nullable();
            $table->string('email');
            $table->string('judul');
            $table->string('nomor');
            $table->string('tujuan_asesmen');
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
        Schema::dropIfExists('apl-01s');
    }
}
