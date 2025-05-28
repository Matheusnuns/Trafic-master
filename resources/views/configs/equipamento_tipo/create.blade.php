@extends('gentelella.layouts.app')

@section('htmlheader_title', 'Home')

@section('content')
<div class="x_panel modal-content">

	<div class="x_title">
        
	   <h2> {{$titulo}} </h2>
	   <div class="clearfix"></div>

	</div>

	<div class="x_panel">
	   <div class="x_content">

			@if( isset($equipamentotipo))
			   <form id="frm_equipamentotipo" class="form-horizontal form-label-left" method="post" action="{{ url("equipamentotipo/$equipamentotipo->id")}}">
   				{!! method_field('PUT') !!}
				   <input type="hidden" id="id" class="form-control " name="id" value="{{$equipamentotipo->id}}">	
			@else
	   			<form id="frm_equipamentotipo" class="form-horizontal form-label-left" method="post" action="{{ route('equipamentotipo.store') }}">
			@endif
      		   
				{{ csrf_field()}}

				<div class="form-group row">
					<div class=" form-group col-md-9 col-sm-9 col-xs-12">
						<label class="control-label" >Tipo</label>
						<input type="text" id="tipo" class="form-control " name="tipo" minlength="4" maxlength="100"
						value="{{isset($equipamentotipo) ? $equipamentotipo->tipo : old('tipo')}}" required >	
					</div>

					<div class="form-group col-md-3 col-sm-3 col-xs-3">
						<label class="text-center">BDT</p>
							<input class="form-control" type="checkbox" name="bdt" 
								@if (isset($equipamentotipo))
									@if ($equipamentotipo->bdt) checked @endif
								@else
									value="{{ 1 or old('bdt') }}"
								@endif
							/>
						</label>
					</div>
				</div>

				
				<div class="form-group row">
					<div class="col-md-12">
						<label class="control-label" for="descricao">Descrição</label>
						<textarea class="form-control" name="descricao" id="descricao"
							rows="3">{{ isset($equipamentotipo) ? $equipamentotipo->descricao : old('descricao') }}</textarea>
					</div>
				</div>

   	   
				{{-- BOTÕES --}}
				<div class="clearfix"></div>
				<div class="ln_solid"> </div>
				<div class="footer text-right"> {{-- col-md-3 col-md-offset-9 --}}
					<button id="btn_cancelar" class="botoes-acao btn btn-round btn-primary" >
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

@endsection

@push("scripts")

   {{-- Vanilla Masker --}}
   <script src="{{ asset('js/vanillaMasker.min.js')}}"></script>

   <script>
		$( "#equipamentotipo" ).focus();
		$(document).ready(function(){
			$('input').iCheck({
				checkboxClass: 'icheckbox_square',
				radioClass: 'iradio_square',
				increaseArea: '80%' // optional
			});
			$('input').keyup(function() {
				this.value = this.value.toLocaleUpperCase();
			});
			//botão de cancelar
			$("#btn_cancelar").click(function(){
				event.preventDefault();
				
				Toast.fire({
					icon: 'warning',
					title: 'Cancelado!'
				});
				window.location.href = "{{ URL::route('equipamentotipo.index') }}"; 
				
				//window.history.back();
			});
		});
   </script>

@endpush
