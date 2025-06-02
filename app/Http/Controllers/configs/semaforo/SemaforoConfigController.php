<?php

namespace App\Http\Controllers\configs\semaforo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Semaforo;

class SemaforoConfigController extends Controller
{
    public function index()
    {
        $semaforos = Semaforo::all();
        return view('configs.semaforo.index', compact('semaforos'));
    }

    public function create()
    {
        return view('configs.semaforo.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'endereco' => 'required|string',
            'ip' => 'required|ip',
        ]);

        Semaforo::create($request->only(['nome', 'endereco', 'ip']));

        return redirect()->route('config.semaforo.index')->with('success', 'Semáforo criado com sucesso!');
    }

    public function edit($id)
    {
        $semaforo = Semaforo::findOrFail($id);
        return view('configs.semaforo.edit', compact('semaforo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string',
            'endereco' => 'required|string',
            'ip' => 'required|ip',
        ]);

        $semaforo = Semaforo::findOrFail($id);
        $semaforo->update($request->only(['nome', 'endereco', 'ip']));

        return redirect()->route('config.semaforo.index')->with('success', 'Semáforo atualizado com sucesso!');
    }
}
