@extends('gentelella.layouts.app') {{-- ou qualquer outro layout que você já esteja usando no projeto --}}


@section('content')
    <div class="x_panel ">
        <div class="x_content">

            <div class="x_title">
                <h2>Novo Semáforo</h2>
                <div class="clearfix"></div>
            </div>

            <form class="form-horizontal form-label-left" method="post" action="{{ route('config.semaforo.store') }}">
                @csrf

                <div class="form-group">
                    <label class="control-label">Nome</label>
                    <input type="text" name="nome" class="form-control" required>
                </div>

                <div class="form-group">
                    <label class="control-label">Endereço</label>
                    <input type="text" name="endereco" class="form-control" required>
                </div>

                <div class="form-group">
                    <label class="control-label">IP</label>
                    <input type="text" name="ip" class="form-control" required>
                </div>

                <div class="ln_solid"></div>

                <div class="footer text-right">
                    <button id="btn_voltar" class="botoes-acao btn btn-round btn-primary" type="button">
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
@endsection

@push('scripts')
<script>
    $("#btn_voltar").click(function (event) {
        event.preventDefault();
        window.location.href = "{{ route('config.semaforo.index') }}";
    });
</script>
@endpush
