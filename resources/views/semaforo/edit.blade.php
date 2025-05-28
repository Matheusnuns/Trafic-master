@extends('gentelella.layouts.app')

<head>
    <style>
        .ts-wrapper .option .title {
            display: block;
        }

        .ts-wrapper .ts-control {
            height: 40px;
            border-radius: 10px;
            text-align: center;
        }
    </style>
</head>

@section('content')
    <div class="x_panel ">
        <div class="x_content">
            <div class="x_title">
                <h2> Editar Semáforo </h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_panel ">
                <div class="x_content">

                    <form class="form-horizontal form-label-left" enctype="multipart/form-data" method="post"
                        action="{{ route('semaforo.update', $semaforo->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                <label class="control-label">Data do Relatório</label>
                                <input type="date" name="data_relatorio" class="form-control"
                                    value="{{ $semaforo->data_relatorio }}" required>
                            </div>

                            <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                <label class="control-label">Controladores</label>
                                <input type="text" name="controladores" class="form-control"
                                    value="{{ $semaforo->controladores }}">
                            </div>

                            <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                <label class="control-label">Modelo</label>
                                <input type="text" name="modelo" class="form-control"
                                    value="{{ $semaforo->modelo }}">
                            </div>

                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <label class="control-label">Endereço</label>
                                <input type="text" name="endereco" class="form-control"
                                    value="{{ $semaforo->endereco }}">
                            </div>

                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <label class="control-label">IP</label>
                                <input type="text" name="ip" class="form-control"
                                    value="{{ $semaforo->ip }}">
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <label class="control-label">Relatório</label>
                                <textarea name="relatorio" class="form-control" rows="4">{{ $semaforo->relatorio }}</textarea>
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <label class="control-label">Observações</label>
                                <textarea name="obs" class="form-control" rows="3">{{ $semaforo->obs }}</textarea>
                            </div>

                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <label class="control-label">Imagem</label>
                                <input type="file" name="imagem" class="form-control">
                            </div>
                        </div>

                        {{-- BOTÕES --}}
                        <div class="clearfix"></div>
                        <div class="ln_solid"> </div>
                        <div class="footer text-right">
                            <input type="submit" hidden>

                            <button id="btn_voltar" class="botoes-acao btn btn-round btn-primary">
                                <i class='fas fas-tabela fa-backspace'></i>
                                <span class="texto-botoes-acao"> CANCELAR </span>
                                <div class="ripple-container"></div>
                            </button>

                            <button type="submit" class="botoes-acao btn btn-round btn-success">
                                <i class="fas fas-tabela fa-save"></i>
                                <span class="texto-botoes-acao"> SALVAR </span>
                                <div class="ripple-container"></div>
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $("#btn_voltar").click(function (event) {
                event.preventDefault();
                window.location.href = "{{ route('semaforo.index') }}";
            });
        });
    </script>
@endpush
