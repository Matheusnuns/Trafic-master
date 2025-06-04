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

                    <div id="semaforo-form-container">
                        <div class="semaforo-form-item">
                            <div class="form-group row">
                                <div class="form-group col-md-4">
                                    <label>Data do Relatório</label>
                                    <input type="date" name="data_relatorio[]" class="form-control" required>
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Controladores</label>
                                    <select name="controladores[]" class="form-control controladores" onchange="buscarDadosControlador(this.value, this)">
                                        <option value="">Selecione um controlador</option>
                                        @foreach($controladores as $ctrl)
                                            <option value="{{ $ctrl->nome }}">{{ $ctrl->nome }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Modelo</label>
                                    <input type="text" name="modelo[]" class="form-control">
                                </div>

                                <div class="form-group col-md-3">
                                    <label>Endereço</label>
                                    <input type="text" name="endereco[]" class="form-control endereco">
                                </div>

                                <div class="form-group col-md-3">
                                    <label>IP</label>
                                    <input type="text" name="ip[]" class="form-control ip">
                                </div>

                                <div class="form-group col-md-9">
                                    <label>Relatório</label>
                                    <textarea name="relatorio[]" class="form-control" rows="4"></textarea>
                                </div>

                                <div class="form-group col-md-9">
                                    <label>Observações</label>
                                    <textarea name="obs[]" class="form-control" rows="3"></textarea>
                                </div>

                                <div class="form-group col-md-3">
                                    <label>Anexar mídia (opcional)</label>
                                    <input type="file" name="imagem[]" class="form-control"
                                           accept="image/*,video/*,.pdf,.doc,.docx,.xml">
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4 mb-2">
                            <button type="button" class="btn btn-sm btn-primary" onclick="clonarRegistro()">+ Clonar</button>
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

        // copiar os valores dos inputs
        const originalInputs = original.querySelectorAll('input, textarea, select');
        const cloneInputs = clone.querySelectorAll('input, textarea, select');

        originalInputs.forEach((input, index) => {
            cloneInputs[index].value = input.value;

        });
        // Limpa os valores dos inputs no clone
        // clone.querySelectorAll('input, textarea, select').forEach(el => {
        //     if (el.type === 'file') {
        //         el.value = ''; // arquivos não podem ser programaticamente limpos por segurança
        //     } else {
        //         el.value = '';
        //     }
        // });

        container.appendChild(clone);
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
