<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaFarmacos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_farmacos', function (Blueprint $table) {
            $table->id();
            $table->string("nome_comercial")->nullable();
            $table->string("principio_ativo")->nullable();
            $table->string("grupo_farmacologico")->nullable();
            $table->text("descricao")->nullable();
            $table->string("uso_clinico")->nullable();
            $table->text("indicacao")->nullable();
            $table->text("contraindicacao")->nullable();
            $table->text("efeito_adverso")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_farmacos');
    }
}
