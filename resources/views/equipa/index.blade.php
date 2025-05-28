@extends('gentelella.layouts.app')

@section('content')

<div class="x_panel modal-content">
		<div class="x_title">
			<h2 style="width: 200px"><i class="fas fa-tools"></i> Equipamentos </h2>
				
			@can('GERIR EQUIPAMENTO')
                <a href="{{ url('equipa/devolve') }}" class="btn-circulo btn  btn-success btn-md  pull-right " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Devolução de Equipamento"> Devolução </a>
                <a href="{{ url('equipa/acautela') }}" class="btn-circulo btn  btn-success btn-md  pull-right " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Novo Acautelamento"> Acautelamento </a>
				{{-- <vc_botao_adiciona descricao="Devolução de Equipamento" texto="Devolução" url={{ url('equipa/devolve') }}></vc_botao_adiciona>
				<vc_botao_adiciona descricao="Novo Acautelamento" texto="Acautelamento" url={{ url('equipa/acautela') }}></vc_botao_adiciona> --}}
			@endif

			<div class="clearfix"></div> 
		</div>
			
		<div class="x_content">
				<table id="tb_equipamentos" class="table table-hover table-striped compact responsive display nowrap cellspacing=0 width=100%">
			<thead>
				<tr>
					<th>Tipo</th>
					<th>Numeração</th>
					<th>Cautela</th>
					<th>Situação</th>
					<th>Ações</th>
				</tr>						
			</thead>

			<tbody>
				@foreach($equipamentos as $key=> $equipamento)
					<tr>
						<td> {{$equipamento->equipamentotipo->tipo}}</td>
						<td> {{$equipamento->numeracao}}</td>
						<td> 
							@isset($equipamento->agente)
								{{$equipamento->agente->nome_servico}}
							@else
								 --
							@endisset
						</td>
						<td> 
							@switch($equipamento->situacao)
								@case("FUNCIONAL")
									<span class="badge badge-success">FUNCIONAL</span>
									@break
								@case("MANUTENÇÃO")
									<span class="badge badge-warning">MANUTENÇÃO</span>
									@break
								@case("INOPERANTE")
									<span class="badge badge-danger">INOPERANTE</span>
									@break
								@default
									<span class="badge badge-danger">{{$equipamento->situacao}}</span>
							@endswitch
						</td>
						

						<td class="actions">
							@can('GERIR EQUIPAMENTO')
								<a href="{{ url("equipa/historicocautela/$equipamento->id") }}" 
									id="btn_detalhe_equipamento"
									class="btn btn-primary btn-xs action botao_acao btn_vizualizar" 
									data-toggle="tooltip" 
									data-equipamento = {{ $equipamento->id }}
									data-placement="bottom" 
									title="Historico de Utilização">  
									<i class="glyphicon glyphicon-eye-open"></i>
								</a>
							@endcan

							@if ($equipamento->equipamentotipo->bdt == 1 && $equipamento->situacao == 'FUNCIONAL')

							@can('FISCALIZAR BDT')
								@if ($equipamento->bdt_saida_fiscal->count() > 0)
									<a 
										href="{{ url("bdtsaidafiscal/".$equipamento->bdt_saida_fiscal[0]->id) }}" 
										id="btn_detalhe_equipamento"
										class="btn btn-warning btn-xs action botao_acao btn_vizualizar" 
										data-toggle="tooltip" 
										data-placement="bottom" 
										title="Preencher BDT">  
										<i class="glyphicon glyphicon-tags"></i>
									</a>
								@endif

								@if ($equipamento->bdt_ent_fiscal->count() > 0)
									<a 
										href="{{ url("bdtentradafiscal/".$equipamento->bdt_ent_fiscal[0]->id) }}" 
										id="btn_detalhe_equipamento"
										class="btn btn-warning btn-xs action botao_acao btn_vizualizar" 
										data-toggle="tooltip" 
										data-placement="bottom" 
										title="Preencher BDT">  
										<i class="glyphicon glyphicon-tags"></i>
									</a>
								@endif
							@endcan
								
							@can('CRIAR BDT')
								@if ($equipamento->bdt_saida->count() > 0)
									{{-- saida --}}
									<a 
										href="{{ url("bdtsaida/".$equipamento->bdt_saida[0]->id) }}" 
										id="btn_detalhe_equipamento"
										class="btn btn-warning btn-xs action botao_acao btn_vizualizar" 
										data-toggle="tooltip" 
										data-placement="bottom" 
										title="Preencher BDT">  
										<i class="glyphicon glyphicon-tags"></i>
									</a>
								@endif

								@if ($equipamento->bdt_ent->count() > 0)
									<a 
										href="{{ url("bdtentrada/".$equipamento->bdt_ent[0]->id) }}" 
										id="btn_detalhe_equipamento"
										class="btn btn-warning btn-xs action botao_acao btn_vizualizar" 
										data-toggle="tooltip" 
										data-placement="bottom" 
										title="Preencher BDT">  
										<i class="glyphicon glyphicon-tags"></i>
									</a>
								@endif
							@endcan


							{{-- 'bdt_saida','bdt_saida_fiscal','bdt_ent','bdt_ent_fiscal' --}}




											{{-- <a 
												href="{{ url("bdt/$equipamento->id") }}" 
												id="btn_detalhe_equipamento"
												class="btn btn-warning btn-xs action botao_acao btn_vizualizar" 
												data-toggle="tooltip" 
												data-placement="bottom" 
												title="Preencher BDT">  
												<i class="glyphicon glyphicon-tags"></i>
											</a> --}}
							@endif
 
							

											{{-- <a 
												href="{{ url("bdt/$equipamento->id") }}" 
												id="btn_detalhe_equipamento"
												class="btn btn-warning btn-xs action botao_acao btn_vizualizar" 
												data-toggle="tooltip" 
												data-placement="bottom" 
												title="Preencher BDT">  
												<i class="glyphicon glyphicon-tags"></i>
											</a> --}}

																	

								
	

							{{-- @if ($equipamento->equipamentotipo->bdt == 1 && $equipamento->situacao == 'FUNCIONAL')
								@if (isset($equipamento->bdt) && $equipamento->bdt->count() == 0) 
									<a 
										href="{{ url("bdt/$equipamento->id") }}" 
										id="btn_detalhe_equipamento"
										class="btn btn-warning btn-xs action botao_acao btn_vizualizar" 
										data-toggle="tooltip" 
										data-placement="bottom" 
										title="Preencher BDT">  
										<i class="glyphicon glyphicon-tags"></i>
									</a>
								 @endif --}}
								{{-- @isset($equipamento->bdt) --}}
									{{-- @if (isset(Auth::user()->agente->id) == $equipamento->agente->id)
										<a 
											href="{{ url("bdt/$equipamento->id") }}" 
											id="btn_detalhe_equipamento"
											class="btn btn-warning btn-xs action botao_acao btn_vizualizar" 
											data-toggle="tooltip" 
											data-placement="bottom" 
											title="Preencher BDT">  
											<i class="glyphicon glyphicon-tags"></i>
										</a>
									@endif --}}
								{{-- @endisset --}}

							{{-- @endif --}}

							{{-- <a href="#" 
								id="btn_exclui_equipamento"
								class="btn btn-danger btn-xs  action botao_acao  "  
								data-toggle="tooltip" 
								data-equipamento = {{ $equipamento->id }}
								data-placement="bottom" 
								title="Exclui esse Tipo ed Equipamento"> 
								<i class="glyphicon glyphicon-remove "></i>
							</a> --}}
						</td>
					</tr>
				@endforeach
			</tbody>
				</table>
		</div>
		
		{{-- BOTÕES --}}
		<div class="clearfix"></div>
		{{-- <vc_botao_voltar url_voltar="{!! URL::route('home') !!}"></vc_botao_voltar> --}}
		
    </div>
	<!-- /page content -->

@endsection


@push("scripts")

	<script>
		$(document).ready(function(){

			$('.ui-pnotify').remove();

			//botão de voltar
			$("#btn_voltar").click(function(){
            event.preventDefault();
				//window.history.back();
				window.location.href = "{{ URL::route('home') }}";
         });

  			//configuração da tabela		 
			$.fn.dataTable.moment( 'DD/MM/YYYY' );
			
			var tabela_equipamentos = $("#tb_equipamentos").DataTable({
				language : {
					'url' : '{{ asset('js/portugues.json') }}',
					"decimal": ",",
					"thousands": "."
				}, 
				stateSave: true,
				stateDuration: -1,
				responsive: true,
				autoWidth: false,
								
				columnDefs: [
            	{ width: 300, targets: 0,  },
            	{ width: 500, targets: 2 },
            	{ width: 100, targets: 3 },
        		],
        		
							
				
			});


			//botão de edição
			$("table#tb_equipamentos").on("click", "#btn_edita_equipamento",function(){
				let id_equipamento = $(this).data('equipamento');
				let btn = $(this);

				//verifica se o botao está desabilitado por conta da ACL
				if( $(this).data('desabilitado') )
				{ 
					event.preventDefault();
					funcoes.notificationRight("top", "right", "danger", "Esse usuário não tem permissão para executar essa Ação!");
					return
				}

			});

			//botão de exclusão
			$("table#tb_equipamentos").on("click", "#btn_exclui_equipamento",function(){
				event.preventDefault();
				

				let id_equipamento = $(this).data('equipamento');
				let btn = $(this);

				//verifica se o botao está desabilitado por conta da ACL
				if( $(this).data('desabilitado') )
				{ 
					funcoes.notificationRight("top", "right", "danger", "Esse usuário não tem permissão para executar essa Ação!");
					return
				}

				//console.log("botao btn_desativa -> ", $(this).data('equipamento'));
				Swal.fire({
					title: 'Confirma a EXCLUSÃO desse Equipamento?',
					icon: 'question',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Sim',
					cancelButtonText: 'Não'
				}).then((result) => {
					if (result.value) {
						$.post("{{ url('equipamento/') }}/"+id_equipamento, {
							_token  : "{{ csrf_token() }}",
							_method : 'DELETE',
							id: 			id_equipamento,
							},function(data){
								if(data =="ok"){

									//exclui a linha no datatables
									$("table#tb_equipamentos").DataTable().row( btn.parents('tr') ).remove().draw();
									
									Swal.fire(
										'Equipamento EXCLUÍDO',
										' ',
										'success'
									)
								}
			
							})         
						
					} else {
						Swal.fire(
							'Exclusão Cancelada',
							' ',
							'error'
						)
					}
				});
			});
		});
		
		
	</script>

@endpush