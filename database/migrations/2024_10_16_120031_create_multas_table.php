<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multas', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->string('hora');
            $table->string('bairro');
            $table->string('veiculo');
            $table->string('placa');
            $table->unsignedBigInteger('leis_id');
            $table->timestamps();

            $table->foreign('leis_id')->references('id')->on('ctbs');
        });
    }

    public function down()
    {
        Schema::dropIfExists('multas');
    }
}
