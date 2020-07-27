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
            $table->
            $table->string("canino");
            $table->string("felino");
            $table->string("equino");
            $table->string("bovino");
            $table->string("caprino");
            $table->string("suino");
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
