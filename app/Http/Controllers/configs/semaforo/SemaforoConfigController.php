<?php

namespace App\Http\Controllers\configs\semaforo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SemaforoConfig;

class SemaforoConfigController extends Controller
{
    public function index()
    {
        $semaforos = SemaforoConfig::all(); // corrigido
        return view('configs.semaforo.index', compact('semaforos'));
    }

    public function create()
    {
        return view('configs.semaforo.create'); // necessário para o form
    }
public function store(Request $request)
{
    $request->validate([
        'controladores' => 'required|string|max:255',
        'endereco' => 'required|string|max:255',
        'ip' => 'required|ip',
    ]);
    //dd($request->all());
    SemaforoConfig::create([
        'controladores' => $request->input('controladores'),
        'endereco' => $request->input('endereco'),
        'ip' => $request->input('ip'),
    ]);

    return redirect()->route('config.semaforo.index')->with('success', 'Semáforo criado com sucesso!');
}


    public function edit($id)
    {
        $semaforo = SemaforoConfig::findOrFail($id); // corrigido
        return view('configs.semaforo.edit', compact('semaforo'));
    }

    public function update(Request $request, $id)
    {
       $request->validate([
    'controladores' => 'required|string|max:255',
    'endereco' => 'required|string|max:255',
    'ip' => 'required|ip',
      //  $semaforo = SemaforoConfig::findOrFail($id);


]);

$semaforo->update($request->only(['controladores', 'endereco', 'ip']));

        return redirect()->route('config.semaforo.index')->with('success', 'Semáforo atualizado com sucesso!');
    }
}
