@extends('gentelella.layouts.app')

@section('content')
    <div class="x_panel">
        <div class="x_title">
            <h2>Editar Semáforos (Grupo)</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
                        <form method="post" action="{{ route('config.semaforo.update', $semaforo->id) }}">
                        @csrf
                        @method('PUT')

                        <input type="hidden" name="id" value="{{ $semaforo->id }}">

                        <div class="form-group col-md-3">
                            <label>Controladores</label>
                            <input type="text" name="controladores" class="form-control" value="{{ $semaforo->controladores }}">
                        </div>

                        <div class="form-group col-md-3">
                            <label>Endereço</label>
                            <input type="text" name="endereco" class="form-control" value="{{ $semaforo->endereco }}">
                        </div>

                        <div class="form-group col-md-3">
                            <label>IP</label>
                            <input type="text" name="ip" class="form-control" value="{{ $semaforo->ip }}">
                        </div>

                            <div class="form-group col-md-2 d-flex align-items-center justify-content-center">
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                    </form>

                </div>
            </form>
        </div>
    </div>
@endsection
