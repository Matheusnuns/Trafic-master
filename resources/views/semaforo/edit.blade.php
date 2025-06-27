@extends('gentelella.layouts.app')

@section('content')
    <div class="x_panel">
        <div class="x_title">
            <h2>Visualizar Semáforo</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            @foreach($grupo as $semaforo)
                <div class="semaforo-bloco">
                    <div class="form-group row">

                        <div class="form-group col-md-2">
                            <label>Controladores</label>
                            <input type="text" class="form-control" value="{{ $semaforo->controladores }}" readonly>
                        </div>

                        <div class="form-group col-md-2">
                            <label>Modelo</label>
                            <input type="text" class="form-control" value="{{ $semaforo->modelo }}" readonly>
                        </div>

                        <div class="form-group col-md-4">
                            <label>Endereço</label>
                            <input type="text" class="form-control" value="{{ $semaforo->endereco }}" readonly>
                        </div>

                        <div class="form-group col-md-4">
                            <label>IP</label>
                            <input type="text" class="form-control" value="{{ $semaforo->ip }}" readonly>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Relatório</label>
                            <textarea class="form-control" rows="3" readonly>{{ $semaforo->relatorio }}</textarea>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Observações</label>
                            <textarea class="form-control" rows="2" readonly>{{ $semaforo->obs }}</textarea>
                        </div>

                        <div class="form-group col-md-5">
                            <label>Imagem</label>
                            @if ($semaforo->imagem)
                                <p><a href="{{ asset('caminho/para/imagens/' . $semaforo->imagem) }}" target="_blank">{{ $semaforo->imagem }}</a></p>
                            @else
                                <p><em>Sem imagem</em></p>
                            @endif
                        </div>
                    </div>
                    <hr>
                </div>
            @endforeach

            <div class="text-right">
                <a href="{{ route('semaforo.index') }}" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>
@endsection
