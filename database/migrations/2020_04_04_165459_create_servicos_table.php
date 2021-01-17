<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('status')->default(1);
            $table->string('icon');
            $table->string('titulo');
            $table->string('resumo');
            $table->string('alt');
            $table->string('imagem');
            $table->longText('codigo');
            $table->string('tag');
            $table->string('plano1');
            $table->string('plano2');
            $table->string('plano3');
            $table->string('plano4');
            $table->string('views');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicos');
    }
}
