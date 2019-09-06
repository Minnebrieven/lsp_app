<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftarPertanyaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_pertanyaans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('apl02_id')->unsigned();
            $table->integer('unit_id')->unsigned();
            $table->string('elemen_kompetensi');
            $table->string('pertanyaan');
            $table->timestamps();

            $table->foreign('apl2_id')->references('id')->on('apl02s')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('unit_id')->references('id')->on('unit_kompetensis')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftar_pertanyaans');
    }
}
