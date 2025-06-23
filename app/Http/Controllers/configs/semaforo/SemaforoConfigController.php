<?php

namespace App\Http\Controllers\configs\semaforo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SemaforoConfig;
use App\Models\Semaforo; // Import correto do model Semaforo

class SemaforoConfigController extends Controller
{
    public function index()
    {
        $semaforos = SemaforoConfig::all(); // corrigido
        return view('configs.semaforo.index', compact('semaforos'));
    }

    public function create()
    {
        $configs = SemaforoConfig::all(); // ou ->all()
        return view('configs.semaforo.create', compact('configs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'controladores' => 'required|string|max:255',
            'endereco' => 'required|string|max:255',
            'ip' => 'required|ip',
        ]);

        SemaforoConfig::create([
            'controladores' => $request->input('controladores'),
            'endereco' => $request->input('endereco'),
            'ip' => $request->input('ip'),
        ]);

        return redirect()->route('config.semaforo.index')->with('success', 'Semáforo criado com sucesso!');
            }
public function edit($id)
{
    $semaforo = SemaforoConfig::findOrFail($id);

    return view('configs.semaforo.edit', compact('semaforo'));
}


        public function destroy($id)
        {
            $config = SemaforoConfig::findOrFail($id);
            $config->delete();

            return redirect()->route('config.semaforo.index')->with('success', 'Configuração excluída com sucesso.');
    }
public function update(Request $request, $id)
{
    $semaforo = SemaforoConfig::findOrFail($id);

    $semaforo->update($request->all());

    return redirect()->route('config.semaforo.index')
                     ->with('success', 'Semáforo atualizado com sucesso!');
}
}