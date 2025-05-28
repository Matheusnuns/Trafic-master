@extends('gentelella.layouts.app')

@section('content')

<div class="x_panel modal-content">
	<div class="x_title">
		<h2><i class="glyphicon glyphicon-tags"></i> Situação do Agente </h2>
        @can('GERIR AGENTE')
            <a href="{{url('agente/situacao/create')."/".$agente->id }}" class="btn-circulo btn  btn-success btn-md  pull-right " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Nova Situação"> Nova Situação </a>
        @endcan
		
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
                    
                    {{-- <tr v-if="guarda['obito'] == 1"><td><b>Óbito</b></td>		
                        <td v-if="guarda['dt_obito'] != null"> 	{{ guarda['dt_obito'] | moment("DD/MM/YYYY") }} </td>
                        <td v-else-if="guarda['obito'] == 1"> 	Óbito com data não informada </td>
                        <td v-else> --- </td>
                    </tr> --}}
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
			<table id="tb_guardas" class="table table-hover table-striped compact responsive display nowrap cellspacing=0 width=100%">
				<thead>
					<tr>
						<th>Situação</th>
						<th>Início</th>
						<th>Término</th>
						<th>Dias</th>
						<th>Ações</th>
					</tr>						
				</thead>

				<tbody>
					@foreach($agente->situacoes as $key=> $gs)
						<tr>
							<td> {{$gs->situacao->nome}}</td>
							<td> {{$gs->inicio}}</td>
							<td> {{$gs->termino}}</td>
							<td> {{$gs->dias}}</td>

							<td class="actions">

								@can('GERIR AGENTE')
									
									@if($gs->ativo && $agente->atv)
										<a href="{{url("agente/situacao/retorno/$agente->id") }}" 
											id="btn_retorno_situacao"
											class="btn btn-info btn-xs action botao_acao " 
											data-placement="bottom" 
											title="Retorno do Agente">  
											<i class="glyphicon glyphicon-tags"></i>
										</a>
									@endif
									
									<a href="{{url("agente/situacao/$gs->id/edit")}}" 
										id="btn_edita_situacao"
										class="btn btn-warning btn-xs action botao_acao " 
										data-toggle="tooltip" 
										data-placement="bottom" 
										title="Edita esse situacao">  
										<i class="glyphicon glyphicon-pencil "></i>
									</a>
								@endcan
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	
	{{-- BOTÕES --}}
    <div class="clearfix"></div>
			<div class="ln_solid"> </div>
			<div class="footer text-right"> {{-- col-md-3 col-md-offset-9 --}}
				 <button id="btn_voltar" class="botoes-acao btn btn-round btn-primary">
					  <span class="icone-botoes-acao mdi mdi-backburger"></span>
					  <span class="texto-botoes-acao"> VOLTAR </span>
					  <div class="ripple-container"></div>
				 </button>
			</div>
</div>
@endsection


@push("scripts")

	
	{{-- Vanilla Masker --}}
	<script src="{{ asset('js/vanillaMasker.min.js') }}"></script>
	

	<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.20/sorting/date-uk.js"></script>
	
	
	


	<script>
		$(document).ready(function(){
			$('.ui-pnotify').remove();
			//configuração da tabela		 
			$.fn.dataTable.moment( 'DD/MM/YYYY' );
			
			var tabela_guardas = $("#tb_guardas").DataTable({
				language : {
					'url' : '{{ asset('js/portugues.json') }}',
					"decimal": ",",
					"thousands": "."
				}, 
				stateSave: false,
				stateDuration: -1,
				responsive: true,
				order: [[ 1, "desc" ]],
				columnDefs: [
					{ type: 'date-uk', targets: [1,2] },
					{ 
						render: function ( data, type, row )             
						{
							if( ! data ) {
                            	return "";
							}else{
                            	return (moment(data).format("DD/MM/YYYY"));
							}
						},
						targets: [1,2]
					},  
				]
			});
			VMasker ($("#inicio")).maskPattern("99/99/9999"); 
			VMasker ($("#termino")).maskPattern("99/99/9999");
			
			//botão de visualização
			$("table#tb_guardas").on("click", "#btn_visualiza_guarda",function(){
				let id_guarda = $(this).data('guarda');
				let btn = $(this);
				//verifica se o botao está desabilitado por conta da ACL
				if( $(this).data('desabilitado') )
				{ 
					event.preventDefault();
					funcoes.notificationRight("top", "right", "danger", "Esse usuário não tem permissão para executar essa Ação!");
					return
				}
			});
			//botão de edição
			$("table#tb_guardas").on("click", "#btn_edita_guarda",function(){
				let id_guarda = $(this).data('guarda');
				let btn = $(this);
				//verifica se o botao está desabilitado por conta da ACL
				if( $(this).data('desabilitado') )
				{ 
					event.preventDefault();
					funcoes.notificationRight("top", "right", "danger", "Esse usuário não tem permissão para executar essa Ação!");
					return
				}
				$.get("{{ url('api/buscaGUARDA') }}", {
					_token: "{{ csrf_token() }}",
					id:	id_guarda,
				},function(resultado){
					console.log(resultado);
					$("#nome").val();
					$("#matricula").val();
					$("#nome_servico").val();
					$("#situacao_id").val('');
					$("#dias").val('');
					/*  */
					$("#nome").val(resultado['usuario']['nome']);
					$("#matricula").val(resultado['usuario']['matricula']);
					$("#nome_servico").val(resultado['nome_servico']);
					$("#situacao_id").val(resultado['situacao_atual'][0]['id']);
					$("#dias").val(resultado['situacao_atual'][0]['dias']);
					if( resultado['situacao_atual'][0]['pivot']['inicio'] != null ){
						$("#inicio").val(funcoes.formataData(resultado['situacao_atual'][0]['pivot']['inicio'], 'pt-br'));
					}else{
						$("#inicio").val("");
					}
					if( resultado['situacao_atual'][0]['pivot']['termino'] != null){
						$("#termino").val(funcoes.formataData(resultado['situacao_atual'][0]['pivot']['termino'], 'pt-br'));
					}else{
						$("#termino").val("");
					}
					$('#modal_situacao').modal('show');
				});
				
//				$.get("{{ url('api/buscaGUARDA') }}", {
//					id:	id_guarda,
//				},function(resultado){
//					$("#funcionario_id").val(id_guarda);
//					$("#nome").val(id_guarda);
//					$('#modal_situacao').modal('show');
//				});
			});
			//botão de exclusão
			$("table#tb_guardas").on("click", "#btn_exclui_guarda",function(){
				event.preventDefault();
				
				let id_guarda = $(this).data('guarda');
				let btn = $(this);
				//verifica se o botao está desabilitado por conta da ACL
				if( $(this).data('desabilitado') )
				{ 
					funcoes.notificationRight("top", "right", "danger", "Esse usuário não tem permissão para executar essa Ação!");
					return
				}
				//console.log("botao btn_desativa -> ", $(this).data('guarda'));
				swal({
					title: 'Confirma a EXCLUSÃO deste Paciente?',
					type: 'question',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Sim',
					cancelButtonText: 'Não'
				}).then((result) => {
					if (result.value) {
						$.post("{{ url('guarda/') }}/"+id_guarda, {
							_token  : "{{ csrf_token() }}",
							_method : 'DELETE',
							id: 			id_guarda,
							},function(data){
								if(data =="ok"){
									//exclui a linha no datatables
									$("table#tb_guardas").DataTable().row( btn.parents('tr') ).remove().draw();
									
									swal(
										'Paciente EXCLUÍDO',
										' ',
										'success'
									)
								}
			
							})         
						
					} else {
						swal(
							'Exclusão Cancelada',
							' ',
							'error'
						)
					}
				});
			});
		});
		
		//botão de voltar
        $("#btn_voltar").click(function() {
				event.preventDefault();
				window.history.back();
			});
	</script>

@endpush