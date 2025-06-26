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
            <table id="tb_semaforo" class="table table-bordered table-striped compact display nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Relatório do Dia</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($semaforos as $semaforo)
                        <tr>
                            <td>{{ \Carbon\Carbon::parse($semaforo->data_relatorio)->format('d/m/Y') }}</td>

                            <td style="display: flex; gap: 5px;">
                                <a href="{{ route('semaforo.edit', $semaforo->id) }}" class="btn btn-info btn-xs" title="Visualizar">
                                    <i class="fa fa-eye"></i>
                                </a>

                                <form method="POST" action="{{ route('semaforo.destroy', $semaforo->id) }}" onsubmit="confirmarDeletar(event)">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-xs" title="Excluir">
                                        <i class="glyphicon glyphicon-remove"></i>
                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                            </div>
                        @endsection

                        @push('styles')
                            {{-- CSS DataTables --}}
                            <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
                        @endpush

                        @push('scripts')
                            {{-- DataTables --}}
                            <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
                            <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

                            {{-- SweetAlert --}}
                            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

                            <script>
                                $(document).ready(function () {
                                    $('#tb_semaforo').DataTable({
                                        language: {
                                            url: '{{ asset('js/portugues.json') }}'
                                        },
                                        responsive: true,
                                        paging: true,
                                        searching: true,
                                        ordering: true,
                                        lengthChange: false // <- remove o seletor "Por página"
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
