@extends('gentelella.layouts.app')

@section('content')
    <div class="x_panel">
        <div class="x_title">
            <h2>Editar Semáforo</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            {{-- Proteção para caso $grupoId não esteja definido --}}
            @php
                $grupoIdForm = $grupoId ?? ($grupo[0]->grupo_id ?? null);
            @endphp

            @if (!$grupoIdForm)
                <div class="alert alert-danger">Grupo não encontrado.</div>
            @else
                <form action="{{ route('semaforo.updateGrupo', $grupoIdForm) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    @if(isset($grupo) && count($grupo) > 0)
                        @foreach($grupo as $index => $semaforo)
                            @php $isMain = $index === 0; @endphp
                            <div class="semaforo-bloco {{ $isMain ? '' : 'clone-bloco d-none' }}">
                                <input type="hidden" name="id[]" value="{{ $semaforo->id }}">

                                <div class="form-group row">
                                    <div class="form-group col-md-4">
                                        <label>Data do Relatório</label>
                                        <input type="date" name="data_relatorio[]" class="form-control"
                                            value="{{ $semaforo->data_relatorio }}" required>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>Controladores</label>
                                        <input type="text" name="controladores[]" class="form-control"
                                            value="{{ $semaforo->controladores }}">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>Modelo</label>
                                        <input type="text" name="modelo[]" class="form-control"
                                            value="{{ $semaforo->modelo }}">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Endereço</label>
                                        <input type="text" name="endereco[]" class="form-control"
                                            value="{{ $semaforo->endereco }}">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>IP</label>
                                        <input type="text" name="ip[]" class="form-control" value="{{ $semaforo->ip }}">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>Relatório</label>
                                        <textarea name="relatorio[]" class="form-control" rows="3">{{ $semaforo->relatorio }}</textarea>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>Observações</label>
                                        <textarea name="obs[]" class="form-control" rows="2">{{ $semaforo->obs }}</textarea>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Imagem</label>
                                        <input type="file" name="imagem[]" class="form-control">
                                        @if ($semaforo->imagem)
                                            <small class="form-text text-muted">Atual: {{ $semaforo->imagem }}</small>
                                        @endif
                                    </div>
                                </div>
                                @if(!$isMain)
                                    <hr>
                                @endif
                            </div>
                        @endforeach

                        @if(count($grupo) > 1)
                            <div class="form-group text-center">
                                <button type="button" id="toggleClones" class="btn btn-outline-primary btn-sm">
                                    Mostrar clones ({{ count($grupo) - 1 }})
                                </button>
                            </div>
                        @endif

                        <div class="text-right">
                            <a href="{{ route('semaforo.index') }}" class="btn btn-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-success">Salvar Grupo</button>
                        </div>
                    @else
                        <div class="alert alert-warning">Nenhum registro no grupo para editar.</div>
                    @endif
                </form>
            @endif
        </div>
    </div>
@endsection

@push('scripts')
<script>
    document.getElementById('toggleClones')?.addEventListener('click', function () {
        const clones = document.querySelectorAll('.clone-bloco');
        clones.forEach(el => el.classList.toggle('d-none'));
        this.textContent = this.textContent.includes('Mostrar')
            ? 'Ocultar clones'
            : 'Mostrar clones ({{ isset($grupo) ? count($grupo) - 1 : 0 }})';
    });
</script>
@endpush
