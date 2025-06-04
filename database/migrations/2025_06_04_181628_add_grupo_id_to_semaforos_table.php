<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGrupoIdToSemaforosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('semaforos', function (Blueprint $table) {
    $table->uuid('grupo_id')->nullable()->index();
    });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::table('semaforos', function (Blueprint $table) {
    $table->dropColumn('grupo_id');
});

    }
}
