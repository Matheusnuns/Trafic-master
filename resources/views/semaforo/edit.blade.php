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
                        <label>Mídia Anexada</label>
                        @if ($semaforo->imagem)
                            @php
                                $extensao = pathinfo($semaforo->imagem, PATHINFO_EXTENSION);
                                $url = asset('storage/' . $semaforo->imagem);
                                $nomeArquivo = basename($semaforo->imagem);
                            @endphp

                            <div class="d-flex align-items-start flex-column gap-2">
                                @if(in_array(strtolower($extensao), ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp', 'svg']))
                                    <img src="{{ $url }}" alt="Imagem" class="img-thumbnail mb-2" width="200">
                                @elseif(in_array(strtolower($extensao), ['mp4', 'webm']))
                                    <video width="300" controls class="mb-2">
                                        <source src="{{ $url }}" type="video/{{ strtolower($extensao) }}">
                                        Seu navegador não suporta vídeo.
                                    </video>
                                @else
                                    <a href="{{ $url }}" target="_blank" class="btn btn-sm btn-outline-info mb-2">Ver arquivo</a>
                                @endif

                                <a href="{{ $url }}" download="{{ $nomeArquivo }}" class="btn btn-sm btn-success">
                                    <i class="fa fa-download"></i>Baixar Arquivo</a>
                            </div>
                        @else
                            <p><em>Sem mídia anexada</em></p>
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
