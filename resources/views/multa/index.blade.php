@extends('gentelella.layouts.app')

@section('content')
    <div class="x_panel modal-content">
        <div class="x_title">
            <h2 style="width: 200px"><i class="fas fa-book"></i> Central de Multas </h2>
            @can('CADASTRAR MULTAS')
                <a href="{{ url('multa/create') }}" class="btn-circulo btn  btn-success btn-md  pull-right " data-toggle="tooltip"
                    data-placement="bottom" title="" data-original-title="Novo Material de Apoio"> Nova Multa
                </a>
            @endcan
            <div class="clearfix"></div>
        </div>

        <div class="x_content">
            <table id="tb_multa"
                class="table table-hover table-striped compact responsive display nowrap cellspacing=0 width=100%">
                <thead>
                    <tr>
                        <th>Data</th>
                        <th>Hora</th>
                        <th>Local</th>
                        <th>Veiculo</th>
                        <th>placa</th>
                        <th>lei</th>
                        @can('GERIR MULTAS')
                            <th>Ações</th>
                        @endcan
                    </tr>
                </thead>

                <tbody>
                    @foreach ($multas as $multa)
                        <tr>
                            <td>
                                {{ optional(\Carbon\Carbon::parse($multa->data))->format('d/m/Y') }}
                            </td>
                            <td>
                                {{ $multa->hora }}
                            </td>
                            <td>
                                {{ $multa->bairro }} - {{ $multa->logradouro }} - {{ $multa->numero }}
                            </td>
                            <td>
                                {{ $multa->veiculo }}
                            </td>
                            <td>
                                {{ $multa->placa }}
                            </td>
                            <td style="white-space: normal;">
                                {{ $multa->lei->nome_lei}}
                            </td>

                            <td class="actions" style="display: flex">
                                @can('GERIR MULTAS')
                                    <a id="btn_edit" href="{{ route('multa.edit', $multa->id) }}" title="Editar" class="btn btn-warning btn-xs action  botao_acao">
                                        <i class="glyphicon glyphicon-pencil "></i>
                                    </a>
                                    <form id="deletarMultaForm" method="POST" action="{{ route('multa.destroy', $multa->id) }}"
                                        onsubmit="confirmarDeletar(event)">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-xs action  botao_acao">
                                            <i class="glyphicon glyphicon-remove "></i>
                                        </button>
                                    </form>
                                @endcan
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- BOTÕES --}}
        <div class="clearfix"></div>


    </div>
@endsection


@push('scripts')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script type="text/javascript">



        $(document).ready(function(){
                   var tb_multa = $("#tb_multa").DataTable({
                      language: {
                            'url' : '{{ asset('js/portugues.json') }}',
                      "decimal": ",",
                      "thousands": "."
                      },
                      stateSave: true,
                      stateDuration: -1,
                      responsive: true,
                   })
                });
           </script>
    <script>
        function confirmarDeletar(event) {
            event.preventDefault(); // Impede o envio do formulário imediato

            Swal.fire({
                title: "Você tem certeza?",
                text: "Você não poderá reverter isso!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sim, delete!",
                cancelButtonText: "Cancelar"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Deletado!",
                        text: "A multa foi deletada.",
                        icon: "success"
                    });
                    event.target.submit();
                }
            });
        }
    </script>
@endpush
