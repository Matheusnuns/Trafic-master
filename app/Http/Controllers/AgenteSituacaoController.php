<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agente;
use App\Models\Situacao;
use App\Models\AgenteSituacao;

use Illuminate\Support\Facades\DB;

class AgenteSituacaoController extends Controller
{
    public function index($id)
    {

        $agente = Agente::with('situacoes','usuario','cargo')->find($id);

        // dd($agente);
        return view('agente.situacao.index', compact('agente'));
    }

    public function create($id)
    {
        $agente = Agente::with('usuario','cargo')->find($id);
        $situacoes = Situacao::all();
        $titulo     = "Nova Situação de Guarda";

        return view('agente.situacao.create', compact('agente','situacoes','titulo'));
    }

    public function store(Request $request)
    {
         

        // dd($request->all());

        if($request->inicio){
            $inicio         = str_replace('/', '-', $request->inicio);
            $inicioConvert  = date("Y-m-d", strtotime($inicio));
            $request->merge(['inicio'   => $inicioConvert]);
        }

        if($request->termino){
            $termino           = str_replace('/', '-', $request->termino);
            $terminoConvert    = date("Y-m-d", strtotime($termino));
            $request->merge(['termino'     => $terminoConvert]);
        }



        $this->validate($request,[
			'situacao_id'   => 'required',
			'inicio'        => 'required|date',
			'termino'       => 'nullable|date',
		]);


        DB::beginTransaction();
		try {
			$agenteSituacao 			= new AgenteSituacao($request->all());
			$agenteSituacao->ativo 	    = true;

         
			$agenteSituacao->save();

			$agente 					= Agente::find($request->agente_id);
			$agente->situacao 	        = Situacao::find($request->situacao_id)->nome;

            switch ($agente->situacao) {
                case 'ÓBITO':           $agente->atv = 0; break;
                case 'DEMISSÃO':        $agente->atv = 0; break;
                case 'APOSENTADORIA':   $agente->atv = 0; break;
                default:                $agente->atv = 1; break;
            }

            $agente->save();
		} catch (\Throwable $th) {
			DB::rollBack();
			//dd($th);
			return back()->withInput()->with('error', 'Falha ao Editar o Agente.');    
		}
		DB::commit();
		return redirect('agente')->with('sucesso', 'Agente Editado com sucesso!');
    }

    public function edit($gs)
    {
        $situacao_atual = AgenteSituacao::find($gs);
        $agente         = Agente::with('situacao_atual','situacoes','usuario','cargo')->find($situacao_atual->agente_id);
        $situacoes      = Situacao::all();
        $titulo         = "Edição de Situação de Guarda";
        $edicao         = true;
      
        return view('agente.situacao.create', compact('agente','situacoes','titulo','situacao_atual','edicao'));
    }

    public function update(Request $request, Situacao $situacao)
    {
        if($request->inicio){
            $inicio         = str_replace('/', '-', $request->inicio);
            $inicioConvert  = date("Y-m-d", strtotime($inicio));
            $request->merge(['inicio'   => $inicioConvert]);
        }

        if($request->termino){
            $termino           = str_replace('/', '-', $request->termino);
            $terminoConvert    = date("Y-m-d", strtotime($termino));
            $request->merge(['termino'     => $terminoConvert]);
        }

        $this->validate($request,[
			'situacao_id'   => 'required',
			'inicio'        => 'required|date',
			'termino'       => 'nullable|date',
		]);


        $agente             = Agente::find($request->agente_id);  
        $agenteSituacao     = AgenteSituacao::find($request->gs_id);

        DB::beginTransaction();
		try {
			$agenteSituacao->fill($request->all());
			$agenteSituacao->save();

			$agente 					    = Agente::find($request->agente_id);

            switch ($agente->situacao) {
                case 'ÓBITO':           $agente->atv = 0; break;
                case 'DEMISSÃO':        $agente->atv = 0; break;
                case 'APOSENTADORIA':   $agente->atv = 0; break;
                default:                $agente->atv = 1; break;
            }


            if($agente->situacao != "PRONTO"){
                $agente->situacao 	        = Situacao::find($request->situacao_id)->nome;
                $agente->save();
            }
		} catch (\Throwable $th) {
			DB::rollBack();
			//dd($th);
			return back()->withInput()->with('error', 'Falha ao Editar o Agente.');    
		}
		DB::commit();
        return redirect('agente')->with('sucesso', 'Agente Editado com sucesso!');
    }

    public function retorno($agente_id)
    {
        $agente         = Agente::with('situacao_atual','situacoes','usuario','cargo')->find($agente_id);
        $situacoes      = Situacao::all();
        $titulo         = "Retorno do Agente";
        $retorno        = true;
        $situacao_atual = $agente->situacao_atual;
       

        return view('agente.situacao.create', compact('agente','situacoes','titulo','situacao_atual','retorno'));
    }

    public function salvaretorno(Request $request)
    {
        if($request->termino){
            $termino           = str_replace('/', '-', $request->termino);
            $terminoConvert    = date("Y-m-d", strtotime($termino));
            $request->merge(['termino'     => $terminoConvert]);
        }

        $this->validate($request,[
			'termino'       => 'required|date',
		]);

		DB::beginTransaction();
		try {
            $agenteSituacao = AgenteSituacao::find($request->gs_id);

            //dd($agenteSituacao);
            //dd($request->all());
            $agenteSituacao->termino    = $request->termino;
            $agenteSituacao->dias       = $request->dias;
			$agenteSituacao->ativo      = false;
			$agenteSituacao->save();
            //dd($agenteSituacao);

			$agente 					= Agente::find($request->agente_id);
			$agente->situacao 	        = "PRONTO";

            switch ($agente->situacao) {
                case 'ÓBITO':           $agente->atv = 0; break;
                case 'DEMISSÃO':        $agente->atv = 0; break;
                case 'APOSENTADORIA':   $agente->atv = 0; break;
                default:                $agente->atv = 1; break;
            }

			$agente->save();
		} catch (\Throwable $th) {
			DB::rollBack();
			dd($th);
			return back()->withInput()->with('error', 'Falha ao Editar o Agente.');    
		}
		DB::commit();
		return redirect('agente')->with('sucesso', 'Agente Editado com sucesso!');
    }



}
