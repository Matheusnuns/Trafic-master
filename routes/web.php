<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SemaforoController;

Route::get('/',            "AuthController@login")->name('login');
Route::get ("/login", 		"AuthController@login")->name('login');
Route::post('/login', 		"AuthController@entrar");
Route::get ('/logout', 		'AuthController@logout')->name('logout');
Route::resource('semaforo', 'SemaforoController');


Route::prefix('configs/semaforo')->group(function () {
    Route::get('/', [SemaforoController::class, 'index'])->name('semaforo.index');
    Route::get('/create', [SemaforoController::class, 'create'])->name('semaforo.create');
    Route::post('/', [SemaforoController::class, 'store'])->name('semaforo.store');
});

Route::group(['middleware' => ['auth']], function () {

    Route::get ('/', 							'HomeController@index')->name('home');
    Route::get ('/alterasenha',					'UserController@AlteraSenha');
	Route::post('/salvasenha',   				'UserController@SalvarSenha');


    //========================================================================================
	// 										ROLE
	//========================================================================================
    Route::get('role/perm/{id}',					'configs\permissionamento\RoleController@rolePerm');


    //========================================================================================
	// 										AGENTEs
	//========================================================================================
	Route::get('/agente/tabela/{situacao}',        		'AgenteController@tabela');

    //========================================================================================
	// 										USER
	//========================================================================================
    Route::get('user/perm/{id}',					'UserController@perm');
	Route::put('user/perm',							'UserController@permSave');


    //========================================================================================
	// 									SITUACÃO
	//========================================================================================
    Route::get('agente/situacao/{agente_id}',          'AgenteSituacaoController@index')->name('agente_situacao');
    Route::get('agente/situacao/create/{agente_id}',   'AgenteSituacaoController@create')->name("nova_situacao_agente");
    Route::get('agente/situacao/retorno/{agente_id}',  'AgenteSituacaoController@retorno');
    Route::post('/agente/salvaretorno',				   'AgenteSituacaoController@salvaretorno');
    Route::get('/agente/situacao/{gs}/edit',		   'AgenteSituacaoController@edit');


    Route::post('/agente/situacao/',				   'AgenteSituacaoController@store');
    Route::put('/agente/situacao/{agente_id}',		   'AgenteSituacaoController@update');



    //========================================================================================
	// 									API
	//========================================================================================
    Route::get('/api/buscaSITUACAO',						'ApiController@buscaSITUACAO');
    Route::get('/api/buscaEQUIPAMENTO/{tipo}',		        'ApiController@buscaEQUIPAMENTO');
    Route::get('/api/buscaAGENTE',						    'ApiController@buscaAGENTE');
    Route::get('/api/buscaCAUTELA',   					    'ApiController@buscaCAUTELA');
    Route::get('/api/buscaAGENTEACAUTELAMENTO',		'ApiController@buscaAGENTEACAUTELAMENTO');

	//========================================================================================
	// 									OCORRENCIAS
	//========================================================================================
    Route::get('ocorrencia/datatables', 				'OcorrenciaController@dados');
    Route::post('ocorrencia/image',                     'OcorrenciaController@storeImage')->name('ocorrencia.storeImage');
    Route::post('ocorrencia/enviaformulario',			'OcorrenciaController@envia');
    Route::delete('ocorrencia/deleteimg/{id}',          'OcorrenciaController@deleteimg');
    Route::get('ocorrencia/pdf/{id}',					'OcorrenciaController@imprimir');


    //========================================================================================
	// 										CONFIGS OCORRENCIA
	//========================================================================================

    Route::get('atendimento',                   'configs\ocorrencia\OcorrenciaController@atendimento_index')->name('atendimento.index');
    Route::get('atendimento/create',            'configs\ocorrencia\OcorrenciaController@atendimento_create');
    Route::post('atendimento ',                 'configs\ocorrencia\OcorrenciaController@atendimento_store');

    Route::get('tipo',                          'configs\ocorrencia\OcorrenciaController@tipo_index')->name('tipo.index');
    Route::get('tipo/create',                   'configs\ocorrencia\OcorrenciaController@tipo_create');
    Route::post('tipo ',                        'configs\ocorrencia\OcorrenciaController@tipo_store');

    Route::get('clima',                         'configs\ocorrencia\OcorrenciaController@clima_index')->name('clima.index');
    Route::get('clima/create',                  'configs\ocorrencia\OcorrenciaController@clima_create');
    Route::post('clima ',                       'configs\ocorrencia\OcorrenciaController@clima_store');

    Route::get('transportado',                  'configs\ocorrencia\OcorrenciaController@transportado_index')->name('transportado.index');
    Route::get('transportado/create',           'configs\ocorrencia\OcorrenciaController@transportado_create');
    Route::post('transportado ',                'configs\ocorrencia\OcorrenciaController@transportado_store');

    Route::get('conducao',                      'configs\ocorrencia\OcorrenciaController@conducao_index')->name('conducao.index');
    Route::get('conducao/create',               'configs\ocorrencia\OcorrenciaController@conducao_create');
    Route::post('conducao ',                    'configs\ocorrencia\OcorrenciaController@conducao_store');

    Route::get('setor',                         'configs\ocorrencia\OcorrenciaController@setor_index')->name('setor.index');
    Route::get('setor/create',                  'configs\ocorrencia\OcorrenciaController@setor_create');
    Route::post('setor ',                       'configs\ocorrencia\OcorrenciaController@setor_store');

    Route::get('categoria',                     'configs\ocorrencia\OcorrenciaController@categoria_index')->name('categoria.index');
    Route::get('categoria/create',              'configs\ocorrencia\OcorrenciaController@categoria_create');
    Route::post('categoria ',                   'configs\ocorrencia\OcorrenciaController@categoria_store');


    //========================================================================================
	// 										EQUIPAMENTOS
	//========================================================================================

    Route::get('/equipa',									'EquipaController@index')			->name("equipa.index");
	Route::get('/equipa/acautela',							'EquipaController@acautela')		->name("equipa.acautela");
	Route::post('/equipa/acautela',							'EquipaController@acautela_store')	->name("equipa.acautela_store");

	Route::get('/equipa/devolve',							'EquipaController@devolve')			->name("equipa.devolve");
	Route::post('/equipa/devolve',							'EquipaController@devolve_store')	->name("equipa.devolve_store");

	Route::get('/equipa/tabelacautela/{guarda_id}',		    'EquipaController@tabelacautela');

	Route::get('/equipa/printselect/{equipa}',			    'EquipaController@printselect')		->name('equipa.printselect');
	Route::post('/equipa/print',							'EquipaController@print')			->name('equipa.print');

    Route::get('/equipa/historicocautela/{equipa}',         'EquipaController@historicocautela')->name('equipa.historicocautela');



    //========================================================================================
	// 										BDT'S
	//========================================================================================
    Route::get('bdt/{id}',                                    'BdtController@create');
    Route::post('bdt',                                        'BdtController@store')->name('bdt.store');

    Route::get('bdtsaida/{id}',                               'BdtController@edit_bdt_saida');
    Route::post('bdtsaida',                                   'BdtController@update_bdt_saida');

    Route::get('bdtsaidafiscal/{id}',                         'BdtController@edit_bdt_saida_fiscal');
    Route::post('bdtsaidafiscal',                             'BdtController@update_bdt_saida_fiscal');

    Route::get('bdtentrada/{id}',                             'BdtController@edit_bdt_entrada');
    Route::post('bdtentrada',                                 'BdtController@update_bdt_entrada');

    Route::get('bdtentradafiscal/{id}',                       'BdtController@edit_bdt_entrada_fiscal');
    Route::post('bdtentradafiscal',                           'BdtController@update_bdt_entrada_fiscal');

    //========================================================================================
    // 										RESOURCE
	//========================================================================================
    Route::resource('user',                     'UserController');
    Route::resource('agente',                   'AgenteController');
    Route::resource('cargo',                    'CargoController');
    Route::resource('ocorrencia',               'OcorrenciaController');
    Route::resource('material',                 'MaterialController');
    Route::resource('multa',                    'MultaController');
    Route::resource('leis',                     'LeisController');
    Route::resource('dashboard',                'DashboardController');
    // Route::resource('bdt',                   'BdtController');

    Route::resource('role',                     'configs\permissionamento\RoleController');
    Route::resource('permission',               'configs\permissionamento\PermissionController');
    Route::resource('equipamento',     		    'configs\equipamento\EquipamentoController');
    Route::resource('equipamentotipo',          'configs\equipamento\EquipamentoTipoController');


    Route::get('semaforos',                      'SemaforoController@index')->name('semaforo.index');

});