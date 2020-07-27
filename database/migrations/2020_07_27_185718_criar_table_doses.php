<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTableDoses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_doses', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('tbl_doses');
    }
}
