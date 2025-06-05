<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemaforoConfigsTable extends Migration
{
    public function up()
    {
        Schema::create('semaforoconfigs', function (Blueprint $table) {
            $table->id();
            $table->string('controladores')->nullable(); // se não for obrigatório
            $table->string('endereco');
            $table->ipAddress('ip');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('semaforoconfigs');
    }
}
