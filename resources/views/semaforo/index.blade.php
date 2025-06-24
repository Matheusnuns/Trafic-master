@extends('gentelella.layouts.app')

@section('content')
    <div class="x_panel modal-content">
        <div class="x_title">
            <a href="{{ route('semaforo.create') }}" class="btn-circulo btn btn-success btn-md pull-right" data-toggle="tooltip"
               data-placement="bottom" title="Adicionar novo registro">
                <i class="fa fa-plus"></i> Novo Registro
            </a>
            <div class="clearfix"></div>
        </div>

        <div class="x_content">
            <table id="tb_semaforo" class="table table-hover table-striped compact responsive display nowrap" cellspacing="0" width="100%">
                <thead style="display: none;"></thead> 

                <tbody>
                    <tr>
                        <td colspan="2" class="pull-left" style="font-size: 18px; font-weight: bold;">
                            Relatório do dia
                        </td>
                    </tr>

                    @foreach ($semaforos as $semaforo)
                        <tr>
                            <td>
                                {{ \Carbon\Carbon::parse($semaforo->data_relatorio)->format('d/m/Y') }}
                            </td>

                            <td class="actions text-right">
                                <div class="btn-group" role="group">
                                    <a href="{{ route('semaforo.edit', $semaforo->id) }}" class="btn btn-info btn-xs action botao_acao" title="Visualizar">
                                        <i class="fa fa-eye"></i>
                                    </a>

                                    <form method="POST" action="{{ route('semaforo.destroy', $semaforo->id) }}" onsubmit="confirmarDeletar(event)" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-xs action botao_acao" title="Excluir">
                                            <i class="glyphicon glyphicon-remove"></i>
                                        </button>
                                    </form>
                                </div>
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
                paging: false,
                searching: false,
                headerCallback: function(thead, data, start, end, display) {
                    $(thead).remove();
                }
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
