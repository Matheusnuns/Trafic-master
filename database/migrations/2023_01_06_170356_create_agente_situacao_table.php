<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgenteSituacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agente_situacao', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('agente_id');
            $table->unsignedBigInteger('situacao_id');
            $table->date('inicio');
            $table->date('termino')->nullable();
            $table->boolean('ativo')->default(true);
            $table->integer('dias')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        
        Schema::table('agente_situacao', function($table){
            $table->foreign('agente_id')->references('id')->on('agentes')->onDelete('cascade');
            $table->foreign('situacao_id')->references('id')->on('situacoes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agente_situacao');
    }
}
