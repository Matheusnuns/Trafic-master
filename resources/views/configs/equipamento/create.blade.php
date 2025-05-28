@extends('gentelella.layouts.app')

@section('htmlheader_title', 'Home')

@section('content')
<div class="x_panel modal-content">

	<div class="x_title">
	   <h2> {{$titulo}} </h2>
	   <div class="clearfix"></div>
	</div> 

	<div class="x_panel ">
	   <div class="x_content">

			@if( isset($equipamento))
			   <form id="frm_equipamento" class="form-horizontal form-label-left" method="post" action="{{ url("equipamento/$equipamento->id")}}">
   				{!! method_field('PUT') !!}
				   <input type="hidden" id="id" class="form-control " name="id" value="{{$equipamento->id}}">	
			@else
	   			<form id="frm_equipamento" class="form-horizontal form-label-left" method="post" action="{{ route('equipamento.store') }}">
			@endif
      		   
				{{ csrf_field()}}

				<div class="form-group row">
					<div class="form-group col-md-6 col-sm-6 col-xs-12">
						<label class="control-label" for="equipamentotipo_id">Tipo</label>
						<select name = "equipamentotipo_id" id="equipamentotipo_id" class="form-control  selectpicker error" 
							data-style="select-with-transition has-dourado" @if(isset($retorno)) disabled @endif >
							<option value=""> ... </option>
								@if (isset($equipamento))
									@foreach($equipamentotipos as $equipamentotipo)
										@if ( $equipamento->equipamentotipo == $equipamentotipo)
											<option value="{{$equipamentotipo->id}}" selected="selected"> {{$equipamentotipo->tipo}} </option>
										@else
											<option value="{{$equipamentotipo->id}}"> {{$equipamentotipo->tipo}} </option>
										@endif
									@endforeach
								@else
									@foreach($equipamentotipos as $equipamentotipo)
										@if (old('equipamentotipo') == $equipamentotipo)
											<option value="{{$equipamentotipo->id}}" selected> {{$equipamentotipo->tipo}} </option>
										@else
											<option value="{{$equipamentotipo->id}}"> {{$equipamentotipo->tipo}} </option>
										@endif
									@endforeach
								@endif
						</select>
					</div>

					<div class=" form-group col-md-3 col-sm-3 col-xs-12">
						<label class="control-label" >Numeração</label>
						<input type="text" id="numeracao" class="form-control " name="numeracao" minlength="4" maxlength="100"
						value="{{isset($equipamento) ? $equipamento->numeracao : old('numeracao')}}" @if(isset($retorno)) disabled @endif required >	
					</div>

					<div class="form-group col-md-3 col-sm-3 col-xs-12">
						<label class="control-label" for="situacao">Situação</label>
						<select name = "situacao" id="situacao" class="form-control  selectpicker error" 
							data-style="select-with-transition has-dourado">
							<option value=""> ... </option>
								@if (isset($equipamento))
									@foreach($situacoes as $situacao)
										@if ( $equipamento->situacao == $situacao)
											<option value="{{$situacao}}" selected="selected"> {{$situacao}} </option>
										@else
											<option value="{{$situacao}}"> {{$situacao}} </option>
										@endif
									@endforeach
								@else
									@foreach($situacoes as $situacao)
										@if (old('situacao') == $situacao)
											<option value="{{$situacao}}" selected> {{$situacao}} </option>
										@else
											<option value="{{$situacao}}"> {{$situacao}} </option>
										@endif
									@endforeach
								@endif
						</select>
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
		$( "#equipamento" ).focus();

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

				window.location.href = "{{ URL::route('equipamento.index') }}"; 
				
				//window.history.back();
			});

		});
   </script>

@endpush

