<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoInfracaoDisciplinarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_infracao_disciplinars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao_tipo_infracao_disciplinar');
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
        Schema::drop('tipo_infracao_disciplinars');
    }
}
