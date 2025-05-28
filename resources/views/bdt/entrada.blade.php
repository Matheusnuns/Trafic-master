@extends('gentelella.layouts.app')

@section('content')

<div class="x_panel modal-content ">
    <div class="x_title">
        <h2>BDT ENTRADA</h2>
        {{-- <h2> {{$titulo}}</h2> --}}
        <div class="clearfix"></div>
    </div>

    <div class="x_panel ">
        <div class="x_content">
            {{-- @if( isset($bdt))
                <form id="frm_bdt" class="form-label-left" method="post" action="{{ url("bdt/$bdt->id") }}">
                {!! method_field('PUT') !!}
            @else
                <form id="frm_bdt" class="form-label-left" method="post" action="{{ route('bdt.store')  }}">
            @endif --}}
            <form id="frm_bdt" class="form-label-left" method="post" action="{{ url("bdtentrada")  }}">
                {{ csrf_field() }}
                                
                <div class="form-group row">
                    
                    <input type="hidden" id="bdt_id" name="bdt_id" value="{{$bdt->id}}">

                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <label  for="placa">Placa</label>
                        <input type="text" id="placa" class="form-control" name="placa" required="" value="{{$bdt->equipamento->numeracao}}" readonly>
                        {{-- value="{{ $bdt->veiculo->placa or old('placa') }}"> --}}
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <label class="control-label col-md-1 col-sm-1 col-xs-1" for="odometro">Odometro</label>
                        <input type="number" id="ent_odometro" class="form-control" name="ent_odometro" required="">
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <label  for="placa">Data / Hora</label>
                        <input type="datetime-local" class="form-control" id="ent_data" name="ent_data" required="" value="{{ $data }}" readonly>
                    </div>

                    {{-- MOTORISTA --}}
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <label  for="motorista">Motorista</label>
                        <input type="text" id="motorista" class="form-control" name="motorista" required="" value="{{$bdt->motorista_saida->nome_servico}}" readonly>
                    </div>                
                </div>

                <div class="ln_solid" > </div>

                @include('bdt.linhas_entrada.linha1') 
                @include('bdt.linhas_entrada.linha2')
                @include('bdt.linhas_entrada.linha3')
                @include('bdt.linhas_entrada.linha4')
                @include('bdt.linhas_entrada.linha5')
                @include('bdt.linhas_entrada.linha6')
                @include('bdt.linhas_entrada.linha7')
                @include('bdt.linhas_entrada.linha8')


                <div >
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