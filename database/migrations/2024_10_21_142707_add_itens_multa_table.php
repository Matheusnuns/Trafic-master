<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddItensMultaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('multas', function (Blueprint $table) {
            $table->string('logradouro')->nullable();
            $table->string('numero')->nullable();
            $table->string('matricula_agente')->nullable();
            $table->unsignedBigInteger('agente_id')->nullable();
            $table->string('descricao_multa')->nullable();

            $table->foreign('agente_id')->references('id')->on('agentes');

        });
    }

    public function down()
    {
        //
    }
}
