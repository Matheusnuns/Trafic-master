@extends('gentelella.layouts.app')

@section('content')
    <div class="x_panel">
        <div class="x_title">
            <h2>Editar Semáforos (Grupo)</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <form method="post" action="{{ route('semaforo.updateGroup') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                @foreach($grupo as $index => $semaforo)
                    <input type="hidden" name="id[]" value="{{ $semaforo->id }}">

                    <div class="form-group row">
                        <div class="form-group col-md-4">
                            <label>Data do Relatório</label>
                            <input type="date" name="data_relatorio[]" class="form-control" value="{{ $semaforo->data_relatorio }}" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label>Controladores</label>
                            <input type="text" name="controladores[]" class="form-control" value="{{ $semaforo->controladores }}">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Modelo</label>
                            <input type="text" name="modelo[]" class="form-control" value="{{ $semaforo->modelo }}">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Endereço</label>
                            <input type="text" name="endereco[]" class="form-control" value="{{ $semaforo->endereco }}">
                        </div>

                        <div class="form-group col-md-6">
                            <label>IP</label>
                            <input type="text" name="ip[]" class="form-control" value="{{ $semaforo->ip }}">
                        </div>

                        <div class="form-group col-md-12">
                            <label>Relatório</label>
                            <textarea name="relatorio[]" class="form-control" rows="3">{{ $semaforo->relatorio }}</textarea>
                        </div>

                        <div class="form-group col-md-12">
                            <label>Observações</label>
                            <textarea name="obs[]" class="form-control" rows="2">{{ $semaforo->obs }}</textarea>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Imagem</label>
                            <input type="file" name="imagem[]" class="form-control">
                            @if ($semaforo->imagem)
                                <small class="form-text text-muted">Atual: {{ $semaforo->imagem }}</small>
                            @endif
                        </div>
                    </div>
                    @if (!$loop->last)
                        <hr>
                    @endif
                @endforeach

                <div class="text-right">
                    <a href="{{ route('semaforo.index') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-success">Salvar Grupo</button>
                </div>
            </form>
        </div>
    </div>
@endsection
