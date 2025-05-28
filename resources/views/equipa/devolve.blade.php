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
			   <form id="frm_equipamento" class="form-horizontal form-label-left" method="post" action="{{ url("equipa/$equipamento->id")}}">
   				{!! method_field('PUT') !!}
				   <input type="hidden" id="id" class="form-control " name="id" value="{{$equipamento->id}}">	
			@else
	   			<form id="frm_equipamento" class="form-horizontal form-label-left" method="post" action="{{ route('equipa.devolve_store') }}">
			@endif
      		   
				{{ csrf_field()}}

				
				<div class="form-group row">
					<div class="form-group col-md-6 col-sm-6 col-xs-12">
						<label class="control-label" for="agente_id">Agente</label>
						<select name = "agente_id" id="agente_id" class="form-control  selectpicker error" 
							data-style="select-with-transition has-dourado">
							<option value="0"> ... </option>
								@if (isset($equipamento))
									@foreach($agentes as $agente)
										@if ( $equipamento->agente == $agente)
											<option value="{{$agente->id}}" selected="selected"> {{$agente->nome_servico}} </option>
										@else
											<option value="{{$agente->id}}"> {{$agente->nome_servico}} </option>
										@endif
									@endforeach
								@else
									@foreach($agentes as $agente)
										@if (old('agente') == $agente)
											<option value="{{$agente->id}}" selected> {{$agente->nome_servico}} </option>
										@else
											<option value="{{$agente->id}}"> {{$agente->nome_servico}} </option>
										@endif
									@endforeach
								@endif
						</select>
					</div>	
				</div>
				<div class="form-group row">
					<div class="form-group col-md-12 col-sm-12 col-xs-12">
						<div class="x_content x_panel">
							<h5>Equipamentos acautelados</h5>
							<table id="tb_equipamentos" class="table table-hover table-striped compact responsive display nowrap cellspacing=0 width=100%">
								<thead>
									<tr>
										<th>Devolver</th>
										<th>Tipo</th>
										<th>Numeração</th>
										<th>Saída</th>
										
									</tr>						
								</thead>
								<tbody>
								</tbody>
							</table>
						</div>
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

			let equipamentos_para_devolver = [];

			//configuração da tabela		 
			$.fn.dataTable.moment( 'DD/MM/YYYY' );
			var tabela_equipamentos = $("#tb_equipamentos").DataTable({
				language : {'url' : '{{ asset('js/portugues.json') }}',"decimal": ",","thousands": "."}, 
				stateSave: true, stateDuration: -1, responsive: true, autoWidth: false, searching: false, paging: false, info: true, serverSide: true, "processing": true,  select: true,
				ajax      : "{{url('/equipa/tabelacautela')}}" + "/" + $("select#agente_id").val(),
				columns   : [
					{ data: 	null,       defaultContent: '' },
					{ data : 'tipo',        name : 'tipo' },
					{ data : 'numeracao',	name : 'numeracao' },
					{ data : 'saida',    	name : 'saida' },
					
				],
				columnDefs: [ 
					{ type: 'date-uk', targets: [3] },
					{ 
						render: function ( data, type, row ){
							if( ! data ) {
								return "";
							}else{
								return (moment(data).format("DD/MM/YYYY HH:mm"));
							}
						},targets: [3]
					},
					{
						orderable: false,
						className: 'select-checkbox',
						targets:   0,
					} 
				],
				select: {
					style: 'multi',
					selector: 'td:first-child'
				}
			

			});

		
			$("select#agente_id").change(function() {
				tabela_equipamentos.ajax.url(
					"{{url('/equipa/tabelacautela')}}" + "/" + $("select#agente_id").val()
				).load();

				if($("#agente_id").val() > 0){
					$('#equipamentotipo_id').prop('disabled', false);
					$('#equipamento_id').prop('disabled', false);
					$('#btn_adiciona').removeAttr('disabled');
				}else{
					//$('select[name="equipamentotipo_id"]').find('option:contains("...")').attr("selected",true);

					$('#equipamentotipo_id').prop('disabled', true);
					$('#equipamento_id').prop('disabled', true);
					$('#btn_adiciona').attr('disabled','disabled');
				}
			});

			//botão de cancelar
			$("#btn_cancelar").click(function(){
				event.preventDefault();
				
				Toast.fire({
					icon: 'warning',
					title: 'Cancelado!'
				});

				window.location.href = "{{ URL::route('equipa.index') }}"; 
				
				//window.history.back();
			});

			//botão de salvar
			$("#btn_salvar").click(function(){
				event.preventDefault();
				var selectedCodOpe = tabela_equipamentos.rows( { selected: true } ).data().toArray();

				selectedCodOpe.forEach(element => {
					equipamentos_para_devolver.push( element['id'] );
					// console.log(element['id']);   //display int value
				});

				$('<input>').attr({
					type: 'hidden',
					id: 'equipamentos_id',
					name: 'equipamentos_id',
					value: equipamentos_para_devolver
				}).appendTo('form');
				
				$( "#frm_equipamento" ).submit();
			
	      });

		});
   </script>

@endpush

