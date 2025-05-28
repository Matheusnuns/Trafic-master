<?php
namespace App\Http\Controllers;

use App\Models\Semaforo;
use Illuminate\Http\Request;


class SemaforoController extends Controller
{
    public function index()
    {
        $semaforos = Semaforo::latest()->paginate(10);
        return view('semaforo.index', compact('semaforos'));
    }

    public function create()
    {
        return view('semaforo.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'data_relatorio' => 'required|date',
            'controladores' => 'nullable|string|max:255',
            'modelo' => 'nullable|string|max:255',
            'endereco' => 'nullable|string|max:255',
            'ip' => 'nullable|ip',
            'relatorio' => 'nullable|string',
            'obs' => 'nullable|string',
            'imagem' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('imagem')) {
            $data['imagem'] = $request->file('imagem')->store('semaforos', 'public');
        }

        Semaforo::create($data);

        return redirect()->route('semaforo.index')->with('success', 'Semáforo criado com sucesso.');
    }

    public function show(Semaforo $semaforo)
    {
        return view('semaforo.show', compact('semaforo'));
    }

    public function edit(Semaforo $semaforo)
    {
        return view('semaforo.edit', compact('semaforo'));
    }

    public function update(Request $request, Semaforo $semaforo)
    {
        $request->validate([
            'data_relatorio' => 'required|date',
            'controladores' => 'nullable|string|max:255',
            'modelo' => 'nullable|string|max:255',
            'endereco' => 'nullable|string|max:255',
            'ip' => 'nullable|ip',
            'relatorio' => 'nullable|string',
            'obs' => 'nullable|string',
            'imagem' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('imagem')) {
            $data['imagem'] = $request->file('imagem')->store('semaforo', 'public');
        }

        $semaforo->update($data);

        return redirect()->route('semaforo.index')->with('success', 'Semáforo atualizado com sucesso.');
    }

    public function destroy(Semaforo $semaforo)
    {
        $semaforo->delete();
        return redirect()->route('semaforo.index')->with('success', 'Semáforo excluído com sucesso.');
    }
}
