@extends('gentelella.layouts.app')

@section('content')
<div class="x_panel ">
    <div class="x_content">
    <div class="x_title" style="display: flex; justify-content: flex-start; align-items: center; gap: 10px;">
        <h2 style="margin: 0;">Novo Semáforo</h2>
        <button id="btn-clonar" type="button" class="btn btn-sm btn-primary" onclick="clonarRegistro()">+ Clonar</button>
        <button id="btn-excluir" type="button" class="btn btn-sm btn-danger" style="display:none;" onclick="excluirUltimoRegistro()">Excluir</button>
    </div>

        <div class="x_panel ">
            <div class="x_content">
                <form class="form-horizontal form-label-left" enctype="multipart/form-data" method="post"
                      action="{{ route('semaforo.store') }}">
                    @csrf
                    <div id="semaforo-form-container">
                        <div class="semaforo-form-item">
                            <div class="form-group row">

                                <div class="form-group col-md-3 mb-2">
                                    <label class="small">Data do Relatório</label>
                                    <input type="date" name="data_relatorio[]" class="form-control form-control-sm" required>
                                </div>

                                <div class="form-group col-md-3 mb-2">
                                    <label class="small">Controladores</label>
                                    <select name="controladores[]" class="form-control form-control-sm controladores" onchange="buscarDadosControlador(this.value, this)">
                                        <option value="">Selecione</option>
                                        @foreach($controladores as $ctrl)
                                            <option value="{{ $ctrl->controladores }}">{{ $ctrl->controladores }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-3 mb-2">
                                    <label class="small">Modelo</label>
                                    <input type="text" name="modelo[]" class="form-control form-control-sm">
                                </div>

                                <div class="form-group col-md-3 mb-2">
                                    <label class="small">Endereço</label>
                                    <input type="text" name="endereco[]" class="form-control form-control-sm endereco">
                                </div>

                                <div class="form-group col-md-3 mb-2">
                                    <label class="small">IP</label>
                                    <input type="text" name="ip[]" class="form-control form-control-sm ip">
                                </div>

                                <div class="form-group col-md-9 mb-2">
                                    <label class="small">Relatório</label>
                                <textarea name="relatorio[]" class="form-control form-control-sm" rows="2" style="max-width: 400px;"></textarea>
                                </div>

                                <div class="form-group col-md-6 mb-2">
                                    <label class="small">Observações</label>
                                <textarea name="obs[]" class="form-control form-control-sm" rows="2" style="max-width: 400px;"></textarea>
                                </div>

                                <div class="form-group col-md-4 mb-2">
                                    <label class="small">Anexar mídia</label>
                                    <input type="file" name="imagem[]" class="form-control form-control-sm"
                                           accept="image/*,video/*,.pdf,.doc,.docx,.xml">
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>

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
function clonarRegistro() {
    const container = document.getElementById('semaforo-form-container');
    const original = container.querySelector('.semaforo-form-item');
    const clone = original.cloneNode(true);

    // Remove o container do Data do Relatório inteiro (label + input)
    const dataRelatorioDiv = clone.querySelector('div.form-group.col-md-3.mb-2');
    if (dataRelatorioDiv && dataRelatorioDiv.querySelector('input[name="data_relatorio[]"]')) {
        dataRelatorioDiv.remove();
    }

    container.appendChild(clone);

    // Mostrar botão "Excluir" caso tenha mais de 1 formulário
    document.getElementById('btn-excluir').style.display = 'inline-block';
}

    function excluirUltimoRegistro() {
        const container = document.getElementById('semaforo-form-container');
        const items = container.querySelectorAll('.semaforo-form-item');

        if(items.length > 1) {
            items[items.length - 1].remove();
        }

        // Se sobrar só 1 formulário, esconder botão Excluir
        if(container.querySelectorAll('.semaforo-form-item').length === 1) {
            document.getElementById('btn-excluir').style.display = 'none';
        }
    }

    function buscarDadosControlador(nome, element) {
        if (!nome) return;

        fetch(`/semaforo/config/${encodeURIComponent(nome)}`)
            .then(response => response.json())
            .then(data => {
                const formItem = element.closest('.semaforo-form-item');
                formItem.querySelector('.endereco').value = data.endereco || '';
                formItem.querySelector('.ip').value = data.ip || '';
            })
            .catch(error => {
                console.error('Erro ao buscar controlador:', error);
            });
    }
</script>
@endpush
