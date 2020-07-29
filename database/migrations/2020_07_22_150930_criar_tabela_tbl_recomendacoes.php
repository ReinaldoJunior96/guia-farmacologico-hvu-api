<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaTblRecomendacoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_recomendacoes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("id_farmaco")->unsigned();
            $table->string("canino");
            $table->string("felino");
            $table->string("equino");
            $table->string("bovino");
            $table->string("caprino");
            $table->string("suino");
            $table->foreign("id_farmaco")
                    ->references('id')
                    ->on('tbl_farmacos')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_recomendacoes');
    }
}
