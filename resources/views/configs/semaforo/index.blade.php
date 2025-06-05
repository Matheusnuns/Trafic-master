@extends('gentelella.layouts.app') {{-- ou qualquer outro layout que você já esteja usando no projeto --}}

@section('content')
<div class="x_panel">
    <div class="x_title">
        <h2>Configurações de Semáforo</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <a href="{{ route('config.semaforo.create') }}" class="btn btn-success mb-3">Novo Registro</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>IP</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($semaforos as $semaforo)
                    <tr>
                        <td>{{ $semaforo->controladores }}</td>
                        <td>{{ $semaforo->endereco }}</td>
                        <td>{{ $semaforo->ip }}</td>
                        <td>
                            <a href="{{ route('config.semaforo.edit', $semaforo->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
