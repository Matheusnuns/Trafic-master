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
	   			<form id="frm_equipamento" class="form-horizontal form-label-left" method="post" action="{{ route('equipa.acautela_store') }}">
			@endif
      		   
				{{ csrf_field()}}

				
				<div class="form-group row">
					<div class="form-group col-md-4 col-sm-4 col-xs-12">
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
					
					<div class="form-group col-md-8 col-sm-8 col-xs-12">
						<div class="x_content x_panel">
							<h5>Já acautelado</h5>
							<table id="tb_equipamentos" class="table table-hover table-striped compact responsive display nowrap cellspacing=0 width=100%">
								<thead>
									<tr>
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
				<div class="ln_solid"> </div>

				<div class="form-group row">
					<div class="form-group col-md-6 col-sm-6 col-xs-12">
						<label class="control-label" for="equipamentotipo_id">Tipo de Equipamento</label>
						<select name = "equipamentotipo_id" id="equipamentotipo_id" class="form-control  selectpicker error" 
							data-style="select-with-transition has-dourado" disabled>
							<option value="0"> ... </option>
								@foreach($equipamentotipos as $equipamentotipo)
									@if (old('equipamentotipo') == $equipamentotipo)
										<option value="{{$equipamentotipo->id}}" selected> {{$equipamentotipo->tipo}} </option>
									@else
										<option value="{{$equipamentotipo->id}}"> {{$equipamentotipo->tipo}} </option>
									@endif
								@endforeach
						</select>
					</div>	

					<div class="form-group col-md-4 col-sm-4 col-xs-12">
						<label class="control-label" for="equipamento_id">Numeração</label>
						<select name = "equipamento_id" id="equipamento_id" class="form-control  selectpicker error" 
							data-style="select-with-transition has-dourado" disabled>
							<option value="0"> ... </option>
								@foreach($equipamentos as $equipamento)
									@if (old('equipamento') == $equipamento)
										<option value="{{$equipamento->id}}" selected> {{$equipamento->numeracao}} </option>
									@else
										<option value="{{$equipamento->id}}"> {{$equipamento->numeracao}} </option>
									@endif
								@endforeach
						</select>
					</div>	
					<div class="form-group col-md-2 col-sm-2 col-xs-12">
							<a href="#" data-toggle="tooltip" data-placement="bottom" title="Adicionar a lista" 
								id="btn_adiciona" class=" btn btn-primary  btn-adiciona" style="margin-top: 25px;" disabled>
								<span class="fa fas fa-plus-circle cor"></span> 
								<span class="descricao cor"> Adicionar </span>
							</a> 
					</div>
				</div>

				<div class="ln_solid"> </div>
				<div class="form-group row">
					<div class="form-group col-md-8 col-sm-8 col-xs-12">
						<div class="x_content x_panel">
							<h5>Novo Acautelamento</h5>
							<table id="tb_acautelamento" class="table table-hover table-striped compact responsive display nowrap cellspacing=0 width=100%">
								<thead>
									<tr>
										<th>Tipo</th>
										<th>Numeração</th>
										<th>Ações</th>
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

			let equipamentos_para_acautelar = [];

			$.ajax({
				type:       "GET",
				url:        "{{ url('api/buscaAGENTE') }}",
				success:    function(response) {
					$("#agente").autocomplete({ source: response });
					console.log(response);
				}
			});

			//configuração da tabela		 
			$.fn.dataTable.moment( 'DD/MM/YYYY' );
			var tabela_equipamentos = $("#tb_equipamentos").DataTable({
				language : {'url' : '{{ asset('js/portugues.json') }}',"decimal": ",","thousands": "."}, 
				stateSave: true,stateDuration: -1,responsive: true,autoWidth: false,searching: false,paging: false,info: false,serverSide: true, "processing": true,
				ajax      : "{{url('/equipa/tabelacautela')}}" + "/" + $("select#agente_id").val(),
				columns   : [
					{ data : 'tipo',    		name : 'tipo' },
					{ data : 'numeracao',	name : 'numeracao' },
					{ data : 'saida',    	name : 'saida' },
				],
				columnDefs: [
					{ type: 'date-uk', targets: [2] },

					{ 
						render: function ( data, type, row )             
						{
							if( ! data ) {
                            	return "";
							}else{
                            	return (moment(data).format("DD/MM/YYYY HH:mm"));
							}
						},
						targets: [2]
					}  
					
					
					
				]
				
			});

			var tabela_acautelamento = $("#tb_acautelamento").DataTable({
				language : {'url' : '{{ asset('js/portugues.json') }}',"decimal": ",","thousands": "."}, 
				stateSave: false,responsive: true,searching: false,paging: false, "info": false
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

			$("#equipamentotipo_id").change(function(){
				let tipo = $("#equipamentotipo_id").val();

				if(tipo > 0 ){
					axios.get("{{URL('/api/buscaEQUIPAMENTO')}}" +"/" +tipo, {})
						.then(response => {
							$('#equipamento_id').empty();

							$('#equipamento_id').append($('<option>', {value:"", text:"..."}));
							response.data.forEach(element => {
								$('#equipamento_id').append($('<option>', {value:element['id'], text:element['numeracao']}));
								//console.log(element)
								//177.66.0.237
								
							});
						})
						.catch(error => {
								console.log(error)
						})
				}else{
					$('#equipamento_id').empty();
					$('#equipamento_id').append($('<option>', {value:"", text:"..."}));
				}

			});

			//adicionar equipamento na tabela
			$('#btn_adiciona').click(function(){
				
				let excluir = "            <a href='#' id='btn_exclui_acautelamento' "; 
					excluir = excluir + "		class='btn btn-danger btn-xs  action botao_acao  delete'   "; 
					excluir = excluir + "		data-toggle='tooltip'  "; 
					excluir = excluir + "		id = 'btn_remover_acautelamento'  "; 
					excluir = excluir + "		data-placement='bottom'  "; 
					excluir = excluir + "		title='Exclui esse Tipo ed Equipamento'>  "; 
					excluir = excluir + "  		<i class='glyphicon glyphicon-remove '></i> "; 
					excluir = excluir + "	</a>" ;

				let existe =  jQuery.inArray( $('#equipamento_id').val() , equipamentos_para_acautelar );

				console.log( existe);
				if(existe > -1){
					Toast.fire({
						icon: 'warning',
						title: 'Equipamento já incluído!',
						animation: true
					});
				}else{
					equipamentos_para_acautelar.push($('#equipamento_id').val());

					tabela_acautelamento.row.add( [ 
						$('#equipamentotipo_id option:selected' ).text(), 
						$('#equipamento_id option:selected' ).text(), 
						
						excluir 
					]).draw( false );
				};
							
			})

			//remover equipamento na tabela
			$('#tb_acautelamento').on('click', 'a.delete', function (e) {
				e.preventDefault();

				equipamentos_para_acautelar = $.grep(equipamentos_para_acautelar, function(value) {
					return value != $('#equipamento_id').val();
				});
				
				tabela_acautelamento.row($(this).parents('tr')).remove().draw();

				console.log(equipamentos_para_acautelar);
			})

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

				window.location.href = "{{ URL::route('equipa.index') }}"; 
				
				//window.history.back();
			});

			//botão de salvar
			$("#btn_salvar").click(function(){
				event.preventDefault();
				$('<input>').attr({
					type: 'hidden',
					id: 'equipamentos_id',
					name: 'equipamentos_id',
					value: equipamentos_para_acautelar
				}).appendTo('form');
				
				$( "#frm_equipamento" ).submit();
				
	      });

		});
   </script>

@endpush

