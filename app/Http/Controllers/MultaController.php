<?php

namespace App\Http\Controllers;

use App\Models\Multa;
use App\Models\Agente;
use App\Models\ctb;
use Illuminate\Http\Request;

class MultaController extends Controller
{

    public function index()
    {
        $multas = Multa::with('lei')->get();

        return view("multa.index",compact('multas'));
    }

    public function create()
    {
        $agentes = Agente::all();
        $leis = ctb::all();
        // dd($leis);

        return view('multa.create', compact('agentes', 'leis'));
    }


    public function store(Request $request)
    {

        $multas = new Multa;

        $multas->data              = strtoupper($request->data);
        $multas->hora              = strtoupper($request->hora);
        $multas->bairro            = strtoupper($request->bairro);
        $multas->veiculo           = strtoupper($request->veiculo);
        $multas->placa             = strtoupper($request->placa);
        $multas->leis_id           = strtoupper($request->amparoLegal);
        $multas->logradouro        = strtoupper($request->logradouro);
        $multas->numero            = strtoupper($request->numero);
        $multas->matricula_agente  = strtoupper($request->matricula);

        if($request->Agente !== 'GUARDA'){
            $multas->agente_id     = strtoupper($request->Agente);
        }else{
            $multas->agente_id =NULL;
        }

        $multas->descricao_multa   = strtoupper($request->descricao_multa);

        $multas->save();

        return redirect('multa');
    }

    public function edit($id){

        $multa = Multa::with('lei','agente')->find($id);
        $agentes = Agente::all();
        $leis = ctb::all();


        return view('multa.edit', compact('multa', 'agentes', 'leis'));
    }

    public function update(Request $request ,$id){
        // dd($request);

        $multas = Multa::FindOrFail($id);

        $multas->data              = strtoupper($request->data);
        $multas->hora              = strtoupper($request->hora);
        $multas->bairro            = strtoupper($request->bairro);
        $multas->veiculo           = strtoupper($request->veiculo);
        $multas->placa             = strtoupper($request->placa);
        $multas->leis_id           = strtoupper($request->amparoLegal);
        $multas->logradouro        = strtoupper($request->logradouro);
        $multas->numero            = strtoupper($request->numero);
        $multas->matricula_agente  = strtoupper($request->matricula);


        if($request->Agente !== 'GUARDA'){
            $multas->agente_id     = strtoupper($request->Agente);
        }else{
            $multas->agente_id = NULL;
        }
        // dd($multas->agente_id);

        $multas->descricao_multa   = strtoupper($request->descricao_multa);

        $multas->save();

        return redirect('multa');
    }

    public function show(){

        return redirect('multa');
    }

    public function destroy($id)
    {
        $multa = Multa::findorfail($id);
        $multa->delete();

        return redirect()->back();
    }
}
