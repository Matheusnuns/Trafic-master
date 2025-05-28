<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Equipamento;
use App\Models\EquipamentoTipo;
use App\Models\Agente;
use App\Models\Bdt;
use DataTables;
use DateTime;
use Auth;

class EquipaController extends Controller
{
    public function index()
    {
		$gerir_equipamento = Auth::user()->can("GERIR EQUIPAMENTO");
        $ver_equipamento = Auth::user()->can("VER EQUIPAMENTO"); 
		// dd($equipamentos);
		// dd($gerir_equipamento);
		if($gerir_equipamento && $ver_equipamento){
			$equipamentos = Equipamento::with('equipamentotipo','agente')->get();
		}else{
			
			// dd(Auth::user()->agente->id);
			$pega_equipamentos = Equipamento::with('equipamentotipo','agente','bdt_saida','bdt_saida_fiscal','bdt_ent','bdt_ent_fiscal')->get();
			// dd($pega_equipamentos[3]);
			$equipamentos = [];

			foreach($pega_equipamentos as $pega_equipamento){
				if(isset($pega_equipamento->agente->id)){
					if(Auth::user()->agente->id == $pega_equipamento->agente->id){
						$a = $pega_equipamento;
						array_push($equipamentos, $a);

					}
				}
			}

			// dd($equipamentos[2]);
		}


        
		// dd($equipamentos);

		return view('equipa.index', compact('equipamentos'));
    }

    public function acautela()
	{
		$titulo            = 'Novo Acautelamento';
		$equipamentos      = Equipamento::where('situacao', 'FUNCIONAL')->where('agente_id', null)->get();
		$equipamentotipos	= DB::table('equipamento_tipos')->distinct()->orderBy('tipo')->get();
		$agentes           = Agente::where('situacao', 'PRONTO')->orderBy('nome_servico')->get();
		return view ('equipa.acautela', compact('titulo','equipamentos','agentes','equipamentotipos'));
	}
	
	public function acautela_store(Request $request)
	{
		// dd($request->all());
		$equipamentos_id = explode(",", $request->equipamentos_id);
	
		$this->validate($request,[
			'equipamentos_id' => 'required',
			'agente_id'       => 'required',
		]);

		DB::beginTransaction();
		try {
			$agente = Agente::findOrFail($request->agente_id);
			foreach ($equipamentos_id as $key => $equipamento_id) {
				$agente->equipamentos()->attach($equipamento_id, [ 'saida' => new DateTime()]);
				$equipamento = Equipamento::with('equipamentotipo')->findOrFail($equipamento_id);
				// dd($equipamento);
				$equipamento->agente_id = $request->agente_id;
				$equipamento->save();

				if($equipamento->equipamentotipo->bdt == 1){
					// equipamento_id
					// sai_motorita_id
					$bdt = new Bdt;

					$bdt->equipamento_id = $equipamento_id;
					$bdt->sai_motorista_id = $request->agente_id;

					$bdt->save();
				}
			}
		} catch (\Throwable $th) {
			DB::rollBack();
			//dd($th);
			return back()->withInput()->with('error', 'Falha ao acautelar o Equipamento.');    
		}
		DB::commit();
		return redirect('equipa')->with('sucesso', 'Equipamento acautelado com sucesso!');
	}

	public function devolve()
	{
		$titulo            	= 'Devolução de Acautelamento';
		$equipamentos      	= Equipamento::where('situacao', 'FUNCIONAL')->where('agente_id', null)->get();
		$equipamentotipos		= DB::table('equipamento_tipos')->distinct()->orderBy('tipo')->get();
		$agentes           = Agente::where('situacao', 'PRONTO')->orderBy('nome_servico')->get();
		return view ('equipa.devolve', compact('titulo','equipamentos','agentes','equipamentotipos'));
	}


	public function devolve_store(Request $request)
	{

		$equipamentos_id = explode(",", $request->equipamentos_id);
		
		$this->validate($request,[
			'equipamentos_id' => 'required',
			'agente_id'       => 'required',
		]);
		DB::beginTransaction();
		try {
			$agente = Agente::findOrFail($request->agente_id);
			foreach ($equipamentos_id as $key => $equipamento_id) {
				$agente->equipamentos()->updateExistingPivot($equipamento_id, [ 'entrada' => new DateTime()]);
				$equipamento = Equipamento::with('bdt_saida','bdt_saida_fiscal','bdt_ent','bdt_ent_fiscal')->findOrFail($equipamento_id);
				$equipamento->agente_id = null;

				if($equipamento->bdt_saida_fiscal->count() > 0 || $equipamento->bdt_ent_fiscal->count() > 0 || $equipamento->bdt_saida->count() > 0 || $equipamento->bdt_ent->count() > 0){
					DB::rollBack();
					return back()->withInput()->with('error', 'Existe um BDT Incompleto.');    
				}

				$equipamento->save();
			}
		} catch (\Throwable $th) {
			DB::rollBack();
			//dd($th);
			return back()->withInput()->with('error', 'Falha ao criar o Equipamento.');    
		}
		DB::commit();
		return redirect('equipa')->with('sucesso', 'Equipamento devolvido com sucesso!');
	}



	public function tabelacautela($agente_id)
	{
		$agente = Agente::find($agente_id);

		// dd($agente);
		$colecao = collect();
		if(isset($agente)){
			$agente->load('equipamentos_cautelados');
			
			// $acoes	= "aaa" ;
			
			foreach($agente->equipamentos_cautelados as $equipamento)
			{
				// $chkb	= "<input class='form-control' type='checkbox' name='chkb_" .$equipamento->id ."' >";
				$colecao->push([
					'tipo'				=> $equipamento->equipamentotipo->tipo,
					'numeracao'			=> $equipamento->numeracao,
					'saida'				=> $equipamento->pivot->saida,
					'id'				=> $equipamento->id,
					//'chkb'  => $chkb,
				]);
			}
		}

		return DataTables::of($colecao)->make(true);
	}

	public function historicocautela($equipa_id)
	{
		// dd($equipa_id);

		$historico_equipamentos = DB::table('equipamento_agente')
															->join('agentes','equipamento_agente.agente_id','=','agentes.id')
																->select('equipamento_agente.saida','equipamento_agente.entrada','agentes.nome_servico')
																	->where('equipamento_id',$equipa_id)
																		->get();
		// dd($historico_equipamentos[0]->saida);

		return view('equipa.historico', compact('historico_equipamentos'));
	}

}
