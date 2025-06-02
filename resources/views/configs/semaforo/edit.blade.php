@extends('gentelella.layouts.app') {{-- ou qualquer outro layout que você já esteja usando no projeto --}}

@section('content')
<div class="x_panel">
    <div class="x_title">
        <h2>Editar Semáforo</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <form action="{{ route('config.semaforo.update', $semaforo->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" value="{{ $semaforo->nome }}" required>
            </div>

            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" name="endereco" class="form-control" value="{{ $semaforo->endereco }}" required>
            </div>

            <div class="form-group">
                <label for="ip">IP</label>
                <input type="text" name="ip" class="form-control" value="{{ $semaforo->ip }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
</div>
@endsection
