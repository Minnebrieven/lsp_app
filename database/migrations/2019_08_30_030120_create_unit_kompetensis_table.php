<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitKompetensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_kompetensis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('apl_id')->unsigned();
            $table->string('kode_unit');
            $table->string('judul_unit');
            $table->string('jenis_standar');
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
        Schema::dropIfExists('unit_kompetensis');
    }
}
