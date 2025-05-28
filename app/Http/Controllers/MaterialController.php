<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MaterialApoio;
use Illuminate\Support\Facades\DB;

class MaterialController extends Controller
{
    public function index()
    {
        $materiais = MaterialApoio::all();

        return view('material.index', compact('materiais'));
    }

    public function create()
    {

        return view('material.create');
    }

    public function store(Request $request)
    {

        DB::beginTransaction();
        try{

        $material = new MaterialApoio;

        $material->titulo = $request->titulo;

        $salva_file = $request->pdf->store('public/pdfs');
        $material->pdf  =  substr($salva_file, 12);

        $material->save();

        } catch (\Throwable $th) {
            return back()->withInput()->with('error', 'Falha ao criar novo material.'); 
        }
        DB::commit();
        
        return redirect('material')->with('sucesso', 'Material Criado com Sucesso!');
    }

    public function destroy($id)
    {
        $material = MaterialApoio::find($id);

        unlink(storage_path('app/public/pdfs/'.$material->pdf));

        $material->delete();

        return redirect(url('/material'));
    }
}
