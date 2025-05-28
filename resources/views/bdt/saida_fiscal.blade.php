@extends('gentelella.layouts.app')

@section('content')

<div class="x_panel modal-content ">
    <div class="x_title">
        <h2>BDT SAIDA</h2>
        {{-- <h2> {{$titulo}}</h2> --}}
        <div class="clearfix"></div>
    </div>

    <div class="x_panel ">
        <div class="x_content">
            <form id="frm_bdt" class="form-label-left" method="post" action="{{ url("bdtsaidafiscal")  }}">
                {{ csrf_field() }}
                                
                <div class="form-group row">
                    
                    <input type="hidden" id="bdt_id" name="bdt_id" value="{{$bdt->id}}">

                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <label  for="placa">Placa</label>
                        <input type="text" class="form-control" value="{{$bdt->equipamento->numeracao}}" readonly>
                        {{-- value="{{ $bdt->veiculo->placa or old('placa') }}"> --}}
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <label class="control-label col-md-1 col-sm-1 col-xs-1" for="odometro">Odometro</label>
                        <input type="number" class="form-control" value="{{$bdt->sai_odometro}}" readonly>
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <label  for="placa">Data / Hora</label>
                        <input type="datetime-local" class="form-control" required="" value="{{ $bdt->sai_data }}" readonly>
                    </div>

                    {{-- MOTORISTA --}}
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <label  for="motorista">Motorista</label>
                        <input type="text" class="form-control" required="" value="{{$bdt->motorista_saida->nome_servico}}" readonly>
                    </div>                
                </div>

                <div class="ln_solid" > </div>

                @include('bdt.linhas.linha1') 
                @include('bdt.linhas.linha2')
                @include('bdt.linhas.linha3')
                @include('bdt.linhas.linha4')
                @include('bdt.linhas.linha5')
                @include('bdt.linhas.linha6')
                @include('bdt.linhas.linha7')
                @include('bdt.linhas.linha8')
                
                <div class="row">
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label class="control-label" for="observacao">Observação</label>
                        <textarea name="sai_observacoes" id="sai_observacoes" type="text" class="form-control" rows="3"></textarea>
                    </div>
                </div>
                
                <div>
                    {{-- BOTÃ•ES --}}
                    <div class="ln_solid"> </div>
                    <div class="footer text-center"> {{-- col-md-3 col-md-offset-9 --}}
                        <button type="cancel" id="btn_cancelar" class="botoes-acao btn btn-round btn-primary" >
                            <span class="icone-botoes-acao mdi mdi-backburger"></span>   
                            <span class="texto-botoes-acao"> CANCELAR </span>
                            <div class="ripple-container"></div>
                        </button>
                    
                        <button type="submit" id="btn_salvar" class="botoes-acao btn btn-round btn-success ">
                            <span class="icone-botoes-acao mdi mdi-send"></span>
                            <span class="texto-botoes-acao"> SALVAR </span>
                            <div class="ripple-container"></div>
                        </button>
                    </div>
                </div>
                
            </form>


        </div>
    </div>
</div>

@endsection


@push("scripts")


@endpush