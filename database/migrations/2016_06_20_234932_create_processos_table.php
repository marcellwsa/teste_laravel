<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_processo', 25);
            $table->integer('local_infracao_id')->unsigned();
            $table->integer('tipo_infracao_disciplinar_id')->unsigned();
            $table->integer('situacao_processo_id')->unsigned();
            $table->text('observacoes');
            $table->timestamps();
            
            $table->foreign('local_infracao_id')->references('id')->on('local_infracaos');
            $table->foreign('situacao_processo_id')->references('id')->on('situacao_processos');
            $table->foreign('tipo_infracao_disciplinar_id')->references('id')->on('tipo_infracao_disciplinars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('processos');
    }
}
