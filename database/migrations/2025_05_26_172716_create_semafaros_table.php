<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemaforosTable extends Migration
{
    public function up()
    {
        Schema::create('semaforos', function (Blueprint $table) {
            $table->id();
            $table->dateTime('data_relatorio')->nullable();
            $table->string('controladores')->nullable();
            $table->string('modelo')->nullable();
            $table->string('endereco')->nullable();
            $table->ipAddress('ip')->nullable();
            $table->text('relatorio')->nullable();
            $table->text('obs')->nullable();
            $table->string('imagem')->nullable(); // Caminho para a imagem (pode ser armazenado no storage)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('semaforos');
    }
}
