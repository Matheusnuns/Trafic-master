<?php

namespace App\Http\Controllers\configs\equipamento;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Equipamento;
use App\Models\EquipamentoTipo;
use Illuminate\Support\Facades\DB;

class EquipamentoController extends Controller
{
    public function index()
    {

        $equipamentos = Equipamento::with("equipamentotipo")->get();

        return view('configs.equipamento.index',compact('equipamentos'));
    }

    public function create()
    {
        $titulo             = 'Novo Equipamento';
        $equipamentotipos   = EquipamentoTipo::all();
        $situacoes          = pegaValorEnum('equipamentos','situacao');

        return view('configs.equipamento.create', compact('titulo','equipamentotipos','situacoes'));
    }

    public function store(Request $request)
    {

        DB::beginTransaction();
		try {

			$equipamento    = new Equipamento($request->all());
			$equipamento->save();

		} catch (\Throwable $th) {
			DB::rollBack();
			//dd($th);
			return back()->withInput()->with('error', 'Falha ao criar o Equipamento.');    
		}
		DB::commit();

		return redirect('equipamento')->with('sucesso', 'Equipamento criado com sucesso!');
    }

    public function edit(Equipamento $equipamento)
    {
        $titulo             = 'Edição de Equipamento';
        $equipamentotipos   = EquipamentoTipo::all();
        $situacoes          = pegaValorEnum('equipamentos','situacao');

        $retorno = true;

		return view ('configs.equipamento.create', compact('titulo','equipamento','equipamentotipos','situacoes','retorno'));
    }

    public function update(Request $request, Equipamento $equipamento)
    {

		// $this->validate($request,[
		// 	'equipamentotipo_id' => 'required',
		// 	'numeracao'          => 'required|min:1|max:50',
		// 	'situacao'           => 'required|min:1|max:50',
		// ]);
		
        $equipamento = Equipamento::with('equipamentotipo','agente')->find($equipamento->id);

		DB::beginTransaction();
		try {

            if(isset($equipamento->agente)){
            
                // return response('invalido', 201);
                return back()->withInput()->with('error', 'Falha ao alterar o Equipamento. Ele esta Acautelado com um Agente');    

            }else{
			    $equipamento->fill($request->all());
			    $equipamento->save();
            }


		} catch (\Throwable $th) {
			DB::rollBack();
			//dd($th);
			return back()->withInput()->with('error', 'Falha ao alterar o Equipamento.');    
		}
		DB::commit();

		return redirect('equipamento')->with('sucesso', 'Equipamento alterado com sucesso!');
    }

   
    public function destroy(Equipamento $equipamento)
    {

        $equipamento = Equipamento::with('equipamentotipo','agente')->find($equipamento->id);
        

        DB::beginTransaction();
        try {

            if(isset($equipamento->agente)){
                // return back()->withInput()->with('error', 'Falha ao alterar o Equipamento.');  
                return response('invalido', 201);
                // return redirect('equipamento')->with('error', 'Esse equipamento esta acautelado com um Agente!');
            }else{
                $equipamento->delete();
            }
            
        } catch (\Throwable $th) {
            DB::rollBack();
            //dd($th);
            return response('erro', 500);
        }
        DB::commit();
        return response('ok', 200);
        // return redirect('equipamento')->with('sucesso', 'Equipamento alterado com sucesso!');
    }
}
