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
                            <div class="form-group col-md-4 col-sm-9 col-xs-9">
                                <label class="control-label">Data do Relatório</label>
                                <input type="date" name="data_relatorio" class="form-control" required>
                            </div>

                            <div class="form-group col-md-4 col-sm-9 col-xs-9">
                                <label class="control-label">Controladores</label>
                                <input type="text" name="controladores" class="form-control">
                            </div>

                            <div class="form-group col-md-4 col-sm-9 col-xs-9">
                                <label class="control-label">Modelo</label>
                                <input type="text" name="modelo" class="form-control">
                            </div>

                            <div class="form-group col-md-3 col-sm-9 col-xs-9">
                                <label class="control-label">Endereço</label>
                                <input type="text" name="endereco" class="form-control">
                            </div>

                            <div class="form-group col-md-3 col-sm-9 col-xs-9">
                                <label class="control-label">IP</label>
                                <input type="text" name="ip" class="form-control">
                            </div>

                            <div class="form-group col-md-9 col-sm-9 col-xs-9">
                                <label class="control-label">Relatório</label>
                                <textarea name="relatorio" class="form-control" rows="4"></textarea>
                            </div>

                            <div class="form-group col-md-9 col-sm-9 col-xs-9">
                                <label class="control-label">Observações</label>
                                <textarea name="obs" class="form-control" rows="3"></textarea>
                            </div>

                            <div class="form-group col-md-3 col-sm-9 col-xs-9">
                                <label class="form-control-label">Anexar mídia (opcional)</label>
                                <input class="form-control" type="file" name="midia"
                                    accept="image/*,video/*,.pdf,.doc,.docx,.xml">
                            </div>
                        </div>

                        {{-- CAMPOS CLONÁVEIS --}}
                        <div class="form-group row">
                            <div class="col-md-4 mb-2">
                                <button type="button" class="btn btn-sm btn-primary" onclick="addClonar()">+ Adicionar Clonar</button>
                            </div>

                            <div class="col-md-12" id="clonar-container">
                                <div class="row clonar-item mb-2">
                                    <div class="col-md-10">
                                        <input class="form-control form-control-sm" type="text" name="clonar[]" placeholder="Clonar">
                                    </div>
                                    <div class="col-md-2 d-flex align-items-center">
                                        <button type="button" class="btn btn-sm btn-danger" onclick="removerClonar(this)">Remover</button>
                                    </div>
                                </div>
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

        function addClonar() {
            const container = document.getElementById('clonar-container');
            const item = container.querySelector('.clonar-item');
            const clone = item.cloneNode(true);

            clone.querySelectorAll('input').forEach(input => {
                input.value = '';
            });

            container.appendChild(clone);
        }

        function removerClonar(button) {
            const item = button.closest('.clonar-item');
            const container = document.getElementById('clonar-container');
            if (container.querySelectorAll('.clonar-item').length > 1) {
                item.remove();
            }
        }
    </script>
@endpush
