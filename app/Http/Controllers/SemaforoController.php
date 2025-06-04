<?php
namespace App\Http\Controllers;

use App\Models\Semaforo;
use Illuminate\Http\Request;
use App\Models\SemaforoConfig;

class SemaforoController extends Controller
{
    public function index()
    {
        $semaforos = Semaforo::latest()->paginate(10);
        return view('semaforo.index', compact('semaforos'));
    }
public function create()
{
    $controladores = SemaforoConfig::all(['nome']);
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

public function getConfig($nome)
{
    $config = SemaforoConfig::where('nome', $nome)->first();

    if ($config) {
        return response()->json([
            'endereco' => $config->endereco,
            'ip' => $config->ip
        ]);
    }

    return response()->json(['message' => 'Controlador não encontrado'], 404);
}

}
