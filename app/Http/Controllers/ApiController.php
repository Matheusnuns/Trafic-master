<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Situacao;
use App\Models\Agente;
use App\Models\Equipamento;

use Illuminate\Support\Facades\DB;


class ApiController extends Controller
{

    public function buscaSITUACAO(Request $request)
    {
        $situacao = Situacao::find($request->id);
		if( isset($situacao->id)  ){
			return response()->json($situacao, 202);
		}else{
			return response()->json(null, 200);
		}

    }

	public function buscaEQUIPAMENTO($equipamentotipo_id)
	{
		$equipamentos = Equipamento::where('equipamentotipo_id', $equipamentotipo_id)
											->where('agente_id', null)
											->where('situacao', "FUNCIONAL")->get();
		return response()->json($equipamentos, 202);
	}

	public function buscaCAUTELA(Request $request)
	{
		$cautelas = Equipamento::where('agente_id', $request->agente_id)->get();
		return response()->json($cautelas, 202);
	} 

	public function buscaAGENTE(Request $request)
	{
		$agente = Agente::with('situacao_atual','usuario')->find($request->id);
		if( isset($agente->id)  ){
			return response()->json($agente, 202);
		}else{
			return response()->json(null, 200);
		}
	}

	public function buscaAGENTEACAUTELAMENTO(Request $request)
	{
		$recs = DB::table('agentes')->where('situacao','PRONTO')->orderBy('nome_servico')->pluck('nome_servico');
		$agentes = $recs->all();
		return response()->json($agentes, 202);

	}




}
