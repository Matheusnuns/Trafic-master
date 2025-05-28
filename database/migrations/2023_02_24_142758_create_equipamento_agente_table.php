<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipamentoAgenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipamento_agente', function (Blueprint $table) {
            $table->id();

            
            $table->bigInteger('agente_id')->unsigned();
            $table->bigInteger('equipamento_id')->unsigned();
            $table->dateTime('saida');
            $table->dateTime('entrada')->nullable();
            
            
            $table->foreign('agente_id')        ->references('id')->on('agentes');
            $table->foreign('equipamento_id')  ->references('id')->on('equipamentos');
        
            $table->softDeletes();

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
        Schema::dropIfExists('equipamento_agente');
    }
}
