<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBdtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


     
    public function up()
    {
       
        Schema::create('bdts', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('equipamento_id')            ->unsigned()->nullable();
            

            $table->dateTime('sai_data')                    ->nullable();
            $table->dateTime('ent_data')                    ->nullable();

            $table->bigInteger('sai_motorista_id')            ->unsigned()->nullable();
            $table->bigInteger('ent_motorista_id')            ->unsigned()->nullable();

            $table->bigInteger('sai_fiscal_id')               ->unsigned()->nullable();
            $table->bigInteger('ent_fiscal_id')               ->unsigned()->nullable();

            $table->double('sai_odometro', 10, 1)           ->default(0);
            $table->double('ent_odometro', 10, 1)           ->default(0);

            $table->text('sai_observacoes')                 ->nullable();
            $table->text('ent_observacoes')                 ->nullable();


            //combustivel
            $table->enum('sai_combustivel',         ['RES','1/4','1/2', '3/4','CHEIO'])->default('RES');
            $table->enum('ent_combustivel',         ['RES','1/4','1/2', '3/4','CHEIO'])->default('RES');

            //liquidos
            $table->enum('sai_oleo_motor',          ['OK','BAIXO','ALTO'])->default('OK');
            $table->enum('ent_oleo_motor',          ['OK','BAIXO','ALTO'])->default('OK');

            $table->enum('sai_oleo_freio',          ['OK','BAIXO','ALTO'])->default('OK');
            $table->enum('ent_oleo_freio',          ['OK','BAIXO','ALTO'])->default('OK');

            $table->enum('sai_fluido_radiador',     ['OK','BAIXO','ALTO'])->default('OK');
            $table->enum('ent_fluido_radiador',     ['OK','BAIXO','ALTO'])->default('OK');


            //fisicos
            $table->enum('sai_triangulo',           ['OK','DANIFICADO','AUSENTE'])->default('OK');
            $table->enum('ent_triangulo',           ['OK','DANIFICADO','AUSENTE'])->default('OK');

            $table->enum('sai_macaco',              ['OK','DANIFICADO','AUSENTE'])->default('OK');
            $table->enum('ent_macaco',              ['OK','DANIFICADO','AUSENTE'])->default('OK');

            $table->enum('sai_chave_roda',          ['OK','DANIFICADO','AUSENTE'])->default('OK');
            $table->enum('ent_chave_roda',          ['OK','DANIFICADO','AUSENTE'])->default('OK');

            $table->enum('sai_extintor',            ['OK','DANIFICADO','AUSENTE'])->default('OK');
            $table->enum('ent_extintor',            ['OK','DANIFICADO','AUSENTE'])->default('OK');

            $table->enum('sai_limpador_parabrisa',  ['OK','DANIFICADO','AUSENTE'])->default('OK');
            $table->enum('ent_limpador_parabrisa',  ['OK','DANIFICADO','AUSENTE'])->default('OK');

            $table->enum('sai_sirene',              ['OK','DANIFICADO','AUSENTE'])->default('OK');
            $table->enum('ent_sirene',              ['OK','DANIFICADO','AUSENTE'])->default('OK');
            
            //eletricos
            $table->enum('sai_luz_lanterna_d',      ['OK', 'QUEIMADA'])->default('OK');
            $table->enum('ent_luz_lanterna_d',      ['OK', 'QUEIMADA'])->default('OK');
            
            $table->enum('sai_luz_lanterna_t',      ['OK', 'QUEIMADA'])->default('OK');
            $table->enum('ent_luz_lanterna_t',      ['OK', 'QUEIMADA'])->default('OK');
            
            $table->enum('sai_luz_farol',           ['OK', 'QUEIMADA'])->default('OK');
            $table->enum('ent_luz_farol',           ['OK', 'QUEIMADA'])->default('OK');

            $table->enum('sai_luz_re',              ['OK', 'QUEIMADA'])->default('OK');
            $table->enum('ent_luz_re',              ['OK', 'QUEIMADA'])->default('OK');

            $table->enum('sai_luz_freio',           ['OK', 'QUEIMADA'])->default('OK');
            $table->enum('ent_luz_freio',           ['OK', 'QUEIMADA'])->default('OK');

            $table->enum('sai_luz_alerta',          ['OK', 'QUEIMADA'])->default('OK');
            $table->enum('ent_luz_alerta',          ['OK', 'QUEIMADA'])->default('OK');

            $table->enum('sai_buzina',              ['OK', 'QUEIMADA'])->default('OK');
            $table->enum('ent_buzina',              ['OK', 'QUEIMADA'])->default('OK');

            //pneus
            $table->enum('sai_pneu_d_e',            ['OK', 'CARECA', 'MURCHO', 'VAZIO', 'AUSENTE' ])->default('OK');
            $table->enum('ent_pneu_d_e',            ['OK', 'CARECA', 'MURCHO', 'VAZIO', 'AUSENTE' ])->default('OK');

            $table->enum('sai_pneu_d_d',            ['OK', 'CARECA', 'MURCHO', 'VAZIO', 'AUSENTE' ])->default('OK');
            $table->enum('ent_pneu_d_d',            ['OK', 'CARECA', 'MURCHO', 'VAZIO', 'AUSENTE' ])->default('OK');

            $table->enum('sai_pneu_t_e',            ['OK', 'CARECA', 'MURCHO', 'VAZIO', 'AUSENTE' ])->default('OK');
            $table->enum('ent_pneu_t_e',            ['OK', 'CARECA', 'MURCHO', 'VAZIO', 'AUSENTE' ])->default('OK');

            $table->enum('sai_pneu_t_d',            ['OK', 'CARECA', 'MURCHO', 'VAZIO', 'AUSENTE' ])->default('OK');
            $table->enum('ent_pneu_t_d',            ['OK', 'CARECA', 'MURCHO', 'VAZIO', 'AUSENTE' ])->default('OK');

            $table->enum('sai_estepe',              ['OK', 'CARECA', 'MURCHO', 'VAZIO', 'AUSENTE' ])->default('OK');
            $table->enum('ent_estepe',              ['OK', 'CARECA', 'MURCHO', 'VAZIO', 'AUSENTE' ])->default('OK');

                      
            //externo
            $table->enum('sai_retrovisor_esq',      ['OK','ARRANHADO','DANIFICADO'])->default('OK');
            $table->enum('ent_retrovisor_esq',      ['OK','ARRANHADO','DANIFICADO'])->default('OK');

            $table->enum('sai_retrovisor_dir',      ['OK','ARRANHADO','DANIFICADO'])->default('OK');
            $table->enum('ent_retrovisor_dir',      ['OK','ARRANHADO','DANIFICADO'])->default('OK');
            
            $table->enum('sai_lanterna_d',          ['OK','ARRANHADO','DANIFICADO'])->default('OK');
            $table->enum('ent_lanterna_d',          ['OK','ARRANHADO','DANIFICADO'])->default('OK');

            $table->enum('sai_lanterna_t',          ['OK','ARRANHADO','DANIFICADO'])->default('OK');
            $table->enum('ent_lanterna_t',          ['OK','ARRANHADO','DANIFICADO'])->default('OK');

            $table->enum('sai_placa_d',             ['OK','DANIFICADO','AUSENTE'])->default('OK');
            $table->enum('ent_placa_d',             ['OK','DANIFICADO','AUSENTE'])->default('OK');
            
            $table->enum('sai_placa_t',             ['OK','DANIFICADO','AUSENTE'])->default('OK');
            $table->enum('ent_placa_t',             ['OK','DANIFICADO','AUSENTE'])->default('OK');

            //lataria
            $table->enum('sai_parachoque_d',        ['OK','ARRANHADO','AMASSADO','AUSENTE'])->default('OK');
            $table->enum('ent_parachoque_d',        ['OK','ARRANHADO','AMASSADO','AUSENTE'])->default('OK');

            $table->enum('sai_parachoque_t',        ['OK','ARRANHADO','AMASSADO','AUSENTE'])->default('OK');
            $table->enum('ent_parachoque_t',        ['OK','ARRANHADO','AMASSADO','AUSENTE'])->default('OK');

            $table->enum('sai_paralama_d_e',        ['OK','ARRANHADO','AMASSADO','AUSENTE'])->default('OK');
            $table->enum('ent_paralama_d_e',        ['OK','ARRANHADO','AMASSADO','AUSENTE'])->default('OK');

            $table->enum('sai_paralama_d_d',        ['OK','ARRANHADO','AMASSADO','AUSENTE'])->default('OK');
            $table->enum('ent_paralama_d_d',        ['OK','ARRANHADO','AMASSADO','AUSENTE'])->default('OK');

            $table->enum('sai_paralama_t_e',        ['OK','ARRANHADO','AMASSADO','AUSENTE'])->default('OK');
            $table->enum('ent_paralama_t_e',        ['OK','ARRANHADO','AMASSADO','AUSENTE'])->default('OK');

            $table->enum('sai_paralama_t_d',        ['OK','ARRANHADO','AMASSADO','AUSENTE'])->default('OK');
            $table->enum('ent_paralama_t_d',        ['OK','ARRANHADO','AMASSADO','AUSENTE'])->default('OK');

            $table->enum('sai_capo',                ['OK','ARRANHADO','AMASSADO','AUSENTE'])->default('OK');
            $table->enum('ent_capo',                ['OK','ARRANHADO','AMASSADO','AUSENTE'])->default('OK');

            $table->enum('sai_portamala',           ['OK','ARRANHADO','AMASSADO','AUSENTE'])->default('OK');
            $table->enum('ent_portamala',           ['OK','ARRANHADO','AMASSADO','AUSENTE'])->default('OK');

            $table->enum('sai_porta_d_e',           ['OK','ARRANHADO','AMASSADO','AUSENTE'])->default('OK');
            $table->enum('ent_porta_d_e',           ['OK','ARRANHADO','AMASSADO','AUSENTE'])->default('OK');

            $table->enum('sai_porta_d_d',           ['OK','ARRANHADO','AMASSADO','AUSENTE'])->default('OK');
            $table->enum('ent_porta_d_d',           ['OK','ARRANHADO','AMASSADO','AUSENTE'])->default('OK');

            $table->enum('sai_porta_t_e',           ['OK','ARRANHADO','AMASSADO','AUSENTE'])->default('OK');
            $table->enum('ent_porta_t_e',           ['OK','ARRANHADO','AMASSADO','AUSENTE'])->default('OK');

            $table->enum('sai_porta_t_d',           ['OK','ARRANHADO','AMASSADO','AUSENTE'])->default('OK');
            $table->enum('ent_porta_t_d',           ['OK','ARRANHADO','AMASSADO','AUSENTE'])->default('OK');

            $table->enum('sai_teto',                ['OK','ARRANHADO','AMASSADO'])->default('OK');
            $table->enum('ent_teto',                ['OK','ARRANHADO','AMASSADO'])->default('OK');

            //vidros
            $table->enum('sai_parabrisa',           ['OK','QUEBRADO'])->default('OK');
            $table->enum('ent_parabrisa',           ['OK','QUEBRADO'])->default('OK');

            $table->enum('sai_vidro_t',             ['OK','QUEBRADO'])->default('OK');
            $table->enum('ent_vidro_t',             ['OK','QUEBRADO'])->default('OK');

            $table->enum('sai_vidro_d_e',           ['OK','QUEBRADO'])->default('OK');
            $table->enum('ent_vidro_d_e',           ['OK','QUEBRADO'])->default('OK');

            $table->enum('sai_vidro_d_d',           ['OK','QUEBRADO'])->default('OK');
            $table->enum('ent_vidro_d_d',           ['OK','QUEBRADO'])->default('OK');

            $table->enum('sai_vidro_t_e',           ['OK','QUEBRADO'])->default('OK');
            $table->enum('ent_vidro_t_e',           ['OK','QUEBRADO'])->default('OK');

            $table->enum('sai_vidro_t_d',           ['OK','QUEBRADO'])->default('OK');
            $table->enum('ent_vidro_t_d',           ['OK','QUEBRADO'])->default('OK');
            

            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('bdts', function($table){
            $table->foreign('sai_motorista_id')->references('id')->on('agentes');
            $table->foreign('ent_motorista_id')->references('id')->on('agentes');

            $table->foreign('sai_fiscal_id')->references('id')->on('agentes');
            $table->foreign('ent_fiscal_id')->references('id')->on('agentes');

            $table->foreign('equipamento_id')->references('id')->on('equipamentos');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bdts');
    }
}
