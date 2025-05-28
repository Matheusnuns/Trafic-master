<?php

namespace App\Http\Controllers\configs\equipamento;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\EquipamentoTipo;

class EquipamentoTipoController extends Controller
{
    public function index()
    {

        $equipamentotipos		    = EquipamentoTipo::all();

        return view('configs.equipamento_tipo.index', compact('equipamentotipos'));
    }

    public function create()
    {
        $titulo = 'Novo Tipo de Equipamento';

        return view('configs.equipamento_tipo.create', compact('titulo'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
		try {

			$equipamentoTipo    = new EquipamentoTipo($request->all());
			$equipamentoTipo->save();

		} catch (\Throwable $th) {
			DB::rollBack();
			//dd($th);
			return back()->withInput()->with('error', 'Falha ao criar o Tipo de Equipamento.');    
		}
		DB::commit();

		return redirect('equipamentotipo')->with('sucesso', 'Tipo de Equipamento criado com sucesso!');
    }
}
