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
            $table->string("nome_comercial");
            $table->string("principio_ativo");
            $table->string("grupo_farmacologico");
            $table->text("descricao");
            $table->string("uso_clinico");
            $table->text("indicacao");
            $table->text("contraindicacao");
            $table->text("efeito_adverso");
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
