@extends('gentelella.layouts.app')

@section('content')
    <div class="x_panel modal-content">
        <div class="x_title">
{{-- teste sem restrição --}}
{{-- @can('CADASTRAR SEMAFORO') --}}
<a href="{{ route('semaforo.create') }}" class="btn-circulo btn btn-success btn-md pull-right" data-toggle="tooltip"
data-placement="bottom" title="Adicionar novo registro">
<i class="fa fa-plus"></i> Novo Registro
</a>
{{-- @endcan --}}


            <div class="clearfix"></div>
        </div>

        <div class="x_content">
            <table id="tb_semaforo" class="table table-hover table-striped compact responsive display nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Data</th>
                        <th>Endereço</th>
                        <th>Modelo</th>
                        <th>Controladores</th>
                        <th>IP</th>

                            <th>Ações</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($semaforos as $semaforo)
                        <tr>
                            <td>{{ \Carbon\Carbon::parse($semaforo->data_relatorio)->format('d/m/Y') }}</td>
                            <td>{{ $semaforo->endereco }}</td>
                            <td>{{ $semaforo->modelo }}</td>
                            <td>{{ $semaforo->controladores }}</td>
                            <td>{{ $semaforo->ip }}</td>

                                <td class="actions" style="display: flex">
                                    <a href="{{ route('semaforo.edit', $semaforo->id) }}" class="btn btn-warning btn-xs action botao_acao" title="Editar">
                                        <i class="glyphicon glyphicon-pencil"></i>
                                    </a>
                                    <form method="POST" action="{{ route('semaforo.destroy', $semaforo->id) }}" onsubmit="confirmarDeletar(event)">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-xs action botao_acao" title="Excluir">
                                            <i class="glyphicon glyphicon-remove"></i>
                                        </button>
                                    </form>
                                </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="text-center">
                {{ $semaforos->links() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        $(document).ready(function () {
            $('#tb_semaforo').DataTable({
                language: {
                    url: '{{ asset('js/portugues.json') }}',
                    decimal: ",",
                    thousands: "."
                },
                stateSave: true,
                stateDuration: -1,
                responsive: true,
                paging: false, // Laravel já faz paginação
                searching: false // opcional, já que Laravel pagina com filtro via controller se necessário
            });
        });

        function confirmarDeletar(event) {
            event.preventDefault();

            Swal.fire({
                title: "Você tem certeza?",
                text: "Você não poderá reverter isso!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sim, deletar!",
                cancelButtonText: "Cancelar"
            }).then((result) => {
                if (result.isConfirmed) {
                    event.target.submit();
                }
            });
        }
    </script>
@endpush

