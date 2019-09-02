<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuktiKompetensiRelevansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukti_kompetensi_relevans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('apl_id')->unsigned();
            $table->string('rincian');
            $table->timestamps();

            $table->foreign('apl_id')->references('id')->on('apl-01s')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bukti_kompetensi_relevans');
    }
}
