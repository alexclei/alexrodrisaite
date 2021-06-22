<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrcamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('email');
            $table->string('conheceu');
            $table->string('telefone', 20);
            $table->string('assunto');
            $table->text('mensagem');
            $table->text('resposta')->nullable();
            $table->unsignedBigInteger('servico_id');
            $table->foreign('servico_id')->references('id')->on('servicos')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('contatos');
    }
}
