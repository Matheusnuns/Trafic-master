@extends('gentelella.layouts.app')

@section('htmlheader_title', 'Home')

@section('content')
	
	<div class="x_panel modal-content">

		<div class="x_title">
			<h2> {{$titulo}}</h2>
			<div class="clearfix"></div>
		</div>

		<div class="x_panel ">
            <div class="row">
                <div class="col-md-6" >
                    <table class="table table-bordered tabela_compacta_vue">
                        <tr><td><b>Matrícula</b></td> 		<td> {{$agente->matricula}} </td></tr>
                        <tr><td><b>Nome</b></td> 			<td> {{$agente->usuario->name}} </td></tr>
                        <tr><td><b>Nome de serviço</b></td>	<td> {{$agente->nome_servico}} </td></tr>
                        <tr><td><b>Cargo</b></td>			<td> {{$agente->cargo->cargo}} </td></tr>
                        <tr><td><b>Nascimento</b></td>		<td> {{date('d/m/Y', strtotime($agente->nascimento))}} </td></tr>
                    </table>
                </div>
        
                <div class="col-md-6" >
                    <table class="table table-bordered tabela_compacta_vue">
        
                        <tr><td><b>Endereço</b></td> 			<td>{{$agente->logradouro}}, nº 
                                                                    {{$agente->numero}} - 
                                                                    {{$agente->bairro}} - 
                                                                    {{$agente->complemento}}</td></tr>
        
                        <tr><td><b>Tel 1</b></td>			<td>{{$agente->telefone1}}</td></tr>
                        <tr><td><b>Tel 2</b></td>			<td>{{$agente->telefone2}}</td></tr>
                        <tr><td><b>Tel 3</b></td>			<td>{{$agente->telefone3}}</td></tr>
                        <tr><td><b>Sit. atual</b></td>		<td class='sit_atual'> {{$agente->situacao}} </td></tr>
        
                    </table>
                </div>
            </div>
			<div class="x_content">
				<div class="modal-body">
					@if( isset($situacao_atual))
						@isset($retorno)
							<form id="frm_situacao" class="form-horizontal form-label-left" method="post" action="{{ url("/agente/salvaretorno")}}">
								<input type="hidden" id="situacao_id" 	class="form-control " name="situacao_id" 	value="{{$situacao_atual->id}}">	
						@else
							<form id="frm_situacao" class="form-horizontal form-label-left" method="post"  action="{{ url("/agente/situacao/$situacao_atual->id")}}">
								{!! method_field('PUT') !!}
						@endisset
						
						<input type="hidden" id="gs_id" 	class="form-control " name="gs_id" 	value="{{$situacao_atual->id}}">	

					@else
						<form id="frm_situacao" class="form-horizontal form-label-left" method="post" action="{{ url('agente/situacao')  }}">
					@endif
							
							<input type="hidden" id="agente_id" 			class="form-control " name="agente_id" 	value="{{$agente->id}}">	
							
						{{ csrf_field()}}

						<input type="hidden" id="agente_id" 			class="form-control " name="agente_id" 	value="{{$agente->id}}">

						<div class="form-group row">
							<div class="form-group col-md-6 col-sm-6 col-xs-12">
								<label class="control-label" for="situacao">Situação</label>
								<select name = "situacao_id" id="situacao_id" class="form-control  selectpicker error" 
									data-style="select-with-transition has-dourado" @if(isset($retorno)) disabled @endif >
									<option value=""> ... </option>
										@if (isset($situacao_atual))
											@foreach($situacoes as $situacao)
												@if ( $situacao_atual->situacao_id == $situacao->id)
													<option value="{{$situacao->id}}" selected="selected"> {{$situacao->nome}} </option>
												@else
													<option value="{{$situacao->id}}"> {{$situacao->nome}} </option>
												@endif
											@endforeach
										@else 
											@foreach($situacoes as $situacao)
												@if (old('situacao') == $situacao)
													<option value="{{$situacao->id}}" selected> {{$situacao->nome}} </option>
												@else
													<option value="{{$situacao->id}}"> {{$situacao->nome}} </option>
												@endif
											@endforeach
										@endif
								</select>
							</div>
							<div class="form-group col-md-2 col-sm-2 col-xs-12 ">
								<label class="control-label" for="dias">Dias</label>
								<input type="number" id="dias" class="form-control" name="dias"  
									value="{{isset($situacao_atual) ? $situacao_atual->dias : old('dias')}}" @if(isset($retorno)) disabled @endif>	
							</div>
						
							<div class="form-group col-md-2 col-sm-2 col-xs-12 ">
								<label class="control-label" for="inicio">Início</label>

								@if(isset($retorno))
									<input type="text" id="inicio_ret" 	class="form-control datas_input" name="inicio_ret" 
										value="{{isset($situacao_atual->inicio) 
												? date("d/m/Y", strtotime($situacao_atual->inicio)) 
												: old('inicio')}}" v-mask="'##/##/####'" disabled>
									
									<input type="hidden" id="inicio" 	class="form-control datas_input" name="inicio" 
										value="{{isset($situacao_atual->inicio) 
												? date("d/m/Y", strtotime($situacao_atual->inicio)) 
												: old('inicio')}}" v-mask="'##/##/####'" >
								@else
									<input type="text" id="inicio" 	class="form-control datas_input" name="inicio" 
									value="{{isset($situacao_atual->inicio) 
											? date("d/m/Y", strtotime($situacao_atual->inicio)) 
											: old('inicio')}}" v-mask="'##/##/####'">
								@endif

							</div>
							<div class="form-group col-md-2 col-sm-2 col-xs-12 ">
								<label class="control-label" for="termino">Término</label>
								<input type="text" id="termino" 	class="form-control datas_input" name="termino" 
								value="{{isset($situacao_atual->termino) ? date("d/m/Y", strtotime($situacao_atual->termino)) : old('termino')}}" v-mask="'##/##/####'">
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
	</div>

@endsection

@push("scripts")

   {{-- Vanilla Masker --}}
   <script src="{{ asset('js/vanillaMasker.min.js')}}"></script>


	<script>

		if( $("select#situacao_id option:selected").index() > 0)
		{
			let id_situacao = $("select#situacao_id option:selected").val();
			$.get("{{ url('api/buscaSITUACAO') }}", {
				_token: "{{ csrf_token() }}",
				id:	id_situacao,
			},function(resultado){
				//console.log(resultado);
				let dias = resultado['qtd_dias_padrao']
				if (dias < 0) {
					$("input#dias").val("");
					$("input#dias").prop('disabled', true);
					$("input#termino").prop('disabled', true);

				}else{
					$("input#dias").prop('disabled', false);
					$("input#termino").prop('disabled', false);
					$("#dias").val(dias);
				}
			});
		}

		$(document).ready(function(){

			$("#situacao_id").focus();

			//botão de voltar
			$("#btn_voltar").click(function(){
				event.preventDefault();
				window.history.back();
				
			});

			//botão de cancelar
			$("#btn_cancelar").click(function(){
				event.preventDefault();
				console.log("cancela");
				Toast.fire({
					icon: 'warning',
					title: 'Cancelado!'
				});
				window.history.back();

			});
			
			$( ".datas_input" ).datepicker({
				dateFormat: 'dd/mm/yy',
				altFormat: "dd/mm/yy",
				dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
				dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
				dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
				monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
				monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
			});

			$("select#situacao_id").change(function() {
				if( $("select#situacao_id option:selected").index() > 0)
				{
					let id_situacao = $("select#situacao_id option:selected").val();
					
					$.get("{{ url('api/buscaSITUACAO') }}", {
						_token: "{{ csrf_token() }}",
						id:	id_situacao,
					},function(resultado){
						//console.log(resultado);
						let dias = resultado['qtd_dias_padrao']
						if (dias < 0) {
							$("input#dias").val("");
							$("input#dias").prop('disabled', true);
							$("input#termino").prop('disabled', true);

						}else{
							$("input#dias").prop('disabled', false);
							$("input#termino").prop('disabled', false);
							$("#dias").val(dias);
						}
					});
				}else{
					//limpa os campos
					$("input#dias").val("");
				}
  			})

			$("input#inicio").focusin(function() {
				$("input#termino").val("");
			});
			
			$("input#termino").focusin(function() {
				let dias 	= parseInt($("input#dias").val());
				let inicio 	= new Date($("input#inicio").datepicker('getDate'));
				let termino = new Date(inicio);
				termino.setDate(termino.getDate() + dias);
				$('#termino').datepicker('setDate', termino );
			});


		});
   </script>

@endpush

