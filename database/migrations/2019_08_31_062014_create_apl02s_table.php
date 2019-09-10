<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApl02sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apl02s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('judul');
            $table->string('nomor');
            $table->string('tuk');
            $table->string('nama_asesor');
            $table->string('nama_peserta');
            $table->date('tanggal');
            $table->string('kompetensi1')->nullable();
            $table->string('kompetensi2')->nullable();
            $table->string('kompetensi3')->nullable();
            $table->string('kompetensi4')->nullable();
            $table->string('kompetensi5')->nullable();
            $table->string('kompetensi6')->nullable();
            $table->string('kompetensi7')->nullable();
            $table->string('kompetensi8')->nullable();
            $table->string('kompetensi9')->nullable();
            $table->string('kompetensi10');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apl02s');
    }
}
