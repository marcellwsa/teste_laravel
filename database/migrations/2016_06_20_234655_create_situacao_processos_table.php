<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSituacaoProcessosTable extends Migration
{
    
    public function up()
    {
        Schema::create('situacao_processos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao_situacao_processo');
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
        Schema::drop('situacao_processos');
    }
}
