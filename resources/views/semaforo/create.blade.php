@extends('gentelella.layouts.app')

@section('content')
    <div class="x_panel ">
        <div class="x_content">

            <div class="x_title">
                <h2> Novo Semáforo </h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_panel ">
                <div class="x_content">

                    <form class="form-horizontal form-label-left" enctype="multipart/form-data" method="post"
                          action="{{ route('semaforo.store') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                <label class="control-label">Data do Relatório</label>
                                <input type="date" name="data_relatorio" class="form-control" required>
                            </div>

                            <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                <label class="control-label">Controladores</label>
                                <input type="text" name="controladores" class="form-control">
                            </div>

                            <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                <label class="control-label">Modelo</label>
                                <input type="text" name="modelo" class="form-control">
                            </div>

                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <label class="control-label">Endereço</label>
                                <input type="text" name="endereco" class="form-control">
                            </div>

                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <label class="control-label">IP</label>
                                <input type="text" name="ip" class="form-control">
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <label class="control-label">Relatório</label>
                                <textarea name="relatorio" class="form-control" rows="4"></textarea>
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <label class="control-label">Observações</label>
                                <textarea name="obs" class="form-control" rows="3"></textarea>
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
                            </button>

                            <button type="submit" class="botoes-acao btn btn-round btn-success">
                                <i class="fas fas-tabela fa-save"></i>
                                <span class="texto-botoes-acao"> SALVAR </span>
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
        $("#btn_voltar").click(function (event) {
            event.preventDefault();
            window.location.href = "{{ route('semaforo.index') }}";
        });
    </script>
@endpush
