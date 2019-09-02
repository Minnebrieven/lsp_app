<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuktiKelengkapanPemohonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukti_kelengkapan_pemohons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('apl_id')->unsigned();
            $table->string('bukti_persyaratan');
            $table->timestamps();

            $table->foreign('apl_id')->references('id')->on('apl01s')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bukti_kelengkapan_pemohons');
    }
}
