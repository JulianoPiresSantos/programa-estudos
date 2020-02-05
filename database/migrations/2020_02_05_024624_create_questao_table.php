<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questao', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('enunciado');
            $table->integer('banca_id')->unsigned();
            $table->foreign('banca_id')->references('id')->on('banca');
            $table->integer('orgao_id')->unsigned();
            $table->foreign('orgao_id')->references('id')->on('orgao');
            /*$table->integer('assunto_id')->unsigned();
            $table->foreign('assunto_id')->references('id')->on('banca');*/
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
        Schema::dropIfExists('questao');
    }
}
