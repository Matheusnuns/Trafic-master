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
                <h2> Nova Multa </h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_panel ">
                <div class="x_content">

                    <form id="frm_material" class="form-horizontal form-label-left" enctype="multipart/form-data" method="post"
                        action="{{ route('multa.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <div class=" form-group col-md-4 col-sm-12 col-xs-12">
                                <label class="control-label">Data</label>
                                <input type="date" id="data" class="form-control " name="data" required>
                            </div>
                            <div class=" form-group col-md-4 col-sm-12 col-xs-12">
                                <label class="control-label">Hora</label>
                                <input type="time" id="hora" class="form-control " name="hora" required>
                            </div>
                            <div class=" form-group col-md-4 col-sm-12 col-xs-12">
                                <label class="control-label">Amparo Legal</label>
                                <select name="amparoLegal" id="amparoLegal" autocomplete="off" required>

                                    <option selected value="">Selecione um artigo</option>

                                    @foreach ($leis as $lei)
                                        <option value="{{ $lei->id }}"> {{ $lei->nome_lei }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class=" form-group col-md-4 col-sm-12 col-xs-12">
                                <label class="control-label">Bairro</label>
                                <input type="text" id="bairro" class="form-control " name="bairro" required>
                            </div>
                            <div class=" form-group col-md-4 col-sm-12 col-xs-12">
                                <label class="control-label">Logradouro</label>
                                <input type="text" id="logradouro" class="form-control " name="logradouro" required>
                            </div>
                            <div class=" form-group col-md-4 col-sm-12 col-xs-12">
                                <label class="control-label">Número</label>
                                <input type="text" id="numero" class="form-control " name="numero" required>
                            </div>

                            <hr style="border: 1px solid rgb(216, 216, 216);">

                            <div class=" form-group col-md-6 col-sm-12 col-xs-12">
                                <label class="control-label">Veículo</label>
                                <input type="text" id="veiculo" class="form-control " name="veiculo" required>
                            </div>
                            <div class=" form-group col-md-6 col-sm-12 col-xs-12">
                                <label class="control-label">Placa</label>
                                <input type="text" id="placa" class="form-control " name="placa" minlength="7"
                                    maxlength="7" required>
                            </div>

                            <hr style="border: 1px solid rgb(216, 216, 216);">

                            <div class=" form-group col-md-6 col-sm-12 col-xs-12">
                                <label class="control-label">Agente</label>
                                <select name="Agente" id="Agente" autocomplete="off" required>

                                    <option selected value="">Selecione um agente</option>

                                    <option value="GUARDA">Guarda Municipal</option>

                                    @foreach ($agentes as $agente)
                                        <option value="{{ $agente->user_id }}" data-matricula="{{ $agente->matricula }}">
                                            {{ $agente->nome_servico }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class=" form-group col-md-6 col-sm-12 col-xs-12">
                                <label class="control-label">Matricula</label>
                                <input type="text" id="matricula" class="form-control " name="matricula" required>
                            </div>

                            <div class=" form-group col-md-12 col-sm-12 col-xs-12">
                                <label class="control-label">Descriçao da multa</label>
                                <textarea type="text" id="descricao_multa" class="form-control " name="descricao_multa" cols="30" rows="5"></textarea>
                            </div>
                        </div>


                        {{-- BOTÕES --}}
                        <div class="clearfix"></div>
                        <div class="ln_solid"> </div>
                        <div class="footer text-right"> {{-- col-md-3 col-md-offset-9 --}}
                            <input type="submit" hidden> {{-- INPUT HIDDEN PARA DEIXAR O BTN NA ORDEM DE SALVAR NA DIREITA --}}

                            <button id="btn_voltar" class="botoes-acao btn btn-round btn-primary">
                                <i class='fas fas-tabela fa-backspace'></i>
                                <span class="texto-botoes-acao"> CANCELAR </span>
                                <div class="ripple-container"></div>
                            </button>

                            <button type="submit" id="btn_salvar" class="botoes-acao btn btn-round btn-success ">
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
    <script type="text/javascript">
        $(document).ready(function() {
            //botão de voltar
            $("#btn_voltar").click(function() {
                event.preventDefault();
                window.location.href = "{{ URL::route('multa.index') }}";
            });
        });
    </script>
    {{-- preencher matricula --}}
    <script>
        // Quando o usuário for selecionado no dropdown
        document.getElementById('Agente').addEventListener('change', function() {
            // Pegar a matrícula do usuário selecionado
            var selectedAgente = this.options[this.selectedIndex];
            var matricula = selectedAgente.getAttribute('data-matricula');

            // Preencher o campo da matrícula
            document.getElementById('matricula').value = matricula || '';
        });
    </script>
    {{-- tom-select --}}
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>

    <script>
        new TomSelect("#Agente", {

            create: false,
            sortField: {
                field: "text",
                direction: "asc",
            },
            maxItems: 1,
        });
    </script>

    <script>
        new TomSelect("#amparoLegal", {

            create: false,
            sortField: {
                field: "text",
                direction: "asc",
            },
            maxItems: 1,
        });
    </script>
@endpush
