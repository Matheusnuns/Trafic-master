<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipamentos', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('equipamentotipo_id')->unsigned();
            $table->foreign('equipamentotipo_id')	 ->references('id')->on('equipamento_tipos')->onDelete('cascade');

            $table->string('numeracao',50)->nullable();
            $table->enum('situacao',
            [
                'FUNCIONAL', 
                'MANUTENÇÃO',
                'INOPERANTE',
            ])->default('FUNCIONAL');

            
            $table->bigInteger('agente_id')->unsigned()->nullable();
            $table->foreign('agente_id')        ->references('id')->on('agentes');

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
        Schema::dropIfExists('equipamentos');
    }
}
