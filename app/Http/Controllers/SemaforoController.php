<?php

namespace App\Http\Controllers;

use App\Models\Semaforo;
use Illuminate\Http\Request;
use App\Models\SemaforoConfig;
use Illuminate\Support\Str;
use Illuminate\Pagination\LengthAwarePaginator;

class SemaforoController extends Controller
{

public function index()
{
    // Seleciona o menor ID de cada grupo
    $ids = \App\Models\Semaforo::selectRaw('MIN(id) as id')
        ->groupBy('grupo_id')
        ->pluck('id');

    // Busca os semáforos com esses IDs
    $allItems = \App\Models\Semaforo::whereIn('id', $ids)
        ->orderBy('created_at', 'desc')
        ->get();

    // Paginação manual
    $perPage = 10;
    $currentPage = request()->get('page', 1);
    $currentItems = $allItems->slice(($currentPage - 1) * $perPage, $perPage)->values();

    $semaforos = new LengthAwarePaginator(
        $currentItems,
        $allItems->count(),
        $perPage,
        $currentPage,
        ['path' => request()->url(), 'query' => request()->query()]
    );

    return view('semaforo.index', compact('semaforos'));
}


    public function create()
    {
        $controladores = SemaforoConfig::all(['controladores']);
        return view('semaforo.create', compact('controladores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'data_relatorio.*' => 'required|date',
            'controladores.*'  => 'required|string|max:255',
            'modelo.*'         => 'nullable|string|max:255',
            'endereco.*'       => 'nullable|string|max:255',
            'ip.*'             => 'nullable|ip',
            'relatorio.*'      => 'nullable|string',
            'obs.*'            => 'nullable|string',
            'imagem.*'         => 'nullable|file|mimes:jpeg,png,jpg,gif,svg,mp4,pdf,doc,docx,xml|max:10240',
        ]);

        $grupoId = Str::uuid(); // grupo único para todos os registros enviados

        $total = count($request->data_relatorio);

        for ($i = 0; $i < $total; $i++) {
            $semaforo = new Semaforo();
            $semaforo->data_relatorio = $request->data_relatorio[$i];
            $semaforo->controladores  = $request->controladores[$i];
            $semaforo->modelo         = $request->modelo[$i] ?? null;
            $semaforo->endereco       = $request->endereco[$i] ?? null;
            $semaforo->ip             = $request->ip[$i] ?? null;
            $semaforo->relatorio      = $request->relatorio[$i] ?? null;
            $semaforo->obs            = $request->obs[$i] ?? null;
            $semaforo->grupo_id       = $grupoId;

            if ($request->hasFile("imagem.$i")) {
                $file = $request->file('imagem')[$i];
                $path = $file->store('semaforos', 'public');
                $semaforo->imagem = $path;
            }

            $semaforo->save();
        }

        return redirect()->route('semaforo.index')->with('success', 'Semáforos salvos com sucesso.');
    }

    public function show(Semaforo $semaforo)
    {
        return view('semaforo.show', compact('semaforo'));
    }
public function edit(Semaforo $semaforo)
{
    $grupo = Semaforo::where('grupo_id', $semaforo->grupo_id)->get();
    $grupoId = $semaforo->grupo_id;

    return view('semaforo.edit', compact('grupo', 'grupoId'));
}


public function updateGrupo(Request $request, $grupoId)
{
    //dd($request->id);
    $total = count($request->id ?? []);
//  $total = count($request->ids);

for ($i = 0; $i < $total; $i++) {
    $semaforo = Semaforo::findOrFail($request->id[$i]);


        $semaforo->data_relatorio = $request->data_relatorio[$i];
        $semaforo->controladores  = $request->controladores[$i] ?? null;
        $semaforo->modelo         = $request->modelo[$i] ?? null;
        $semaforo->endereco       = $request->endereco[$i] ?? null;
        $semaforo->ip             = $request->ip[$i] ?? null;
        $semaforo->relatorio      = $request->relatorio[$i] ?? null;
        $semaforo->obs            = $request->obs[$i] ?? null;

        if ($request->hasFile("imagem.$i")) {
            $file = $request->file('imagem')[$i];
            $path = $file->store('semaforos', 'public');
            $semaforo->imagem = $path;
        }

        $semaforo->save();
    }

    return redirect()->route('semaforo.index')->with('success', 'Grupo de semáforos atualizado com sucesso.');
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

    public function getConfig($controlador)
    {
        $config = SemaforoConfig::where('controladores', $controlador)->first();

        if ($config) {
            return response()->json([
                'endereco' => $config->endereco,
                'ip' => $config->ip
            ]);
        }

        return response()->json(['message' => 'Controlador não encontrado'], 404);
    }
}
