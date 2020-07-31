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
            $table->string("canino")->nullable();
            $table->string("felino")->nullable();
            $table->string("equino")->nullable();
            $table->string("bovino")->nullable();
            $table->string("caprino")->nullable();
            $table->string("suino")->nullable();
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
