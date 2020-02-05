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
            $table->unsignedBigInteger('banca_id');
            $table->foreign('banca_id')
                ->references('id')
                ->on('banca')
                ->onDelete('cascade');
            $table->unsignedBigInteger('orgao_id');
            $table->foreign('orgao_id')
                ->references('id')
                ->on('orgao')
                ->onDelete('cascade');;
            $table->unsignedBigInteger('assunto_id');
            $table->foreign('assunto_id')
                ->references('id')
                ->on('assunto')
                ->onDelete('cascade');;
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
