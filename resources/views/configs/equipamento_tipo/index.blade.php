@extends('gentelella.layouts.app')

@section('content')
    <div class="x_panel modal-content">
		<div class="x_title">
			<h2><i class="fas fa-tools"></i> Tipos de Equipamentos </h2>
            
            <ul class="nav navbar-right panel_toolbox">
                @can('GERIR EQUIPAMENTO')
                    <a href="{{ url('equipamentotipo/create') }}" class="btn-circulo btn  btn-success btn-md  pull-right " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Novo Tipo de Equipamento"> Novo Tipo de Equipamento </a>
                @endif
            </ul>
			<div class="clearfix"></div> 
		</div>
			
        <div class="x_panel">
		    <div class="x_content">
				<table id="tb_equipamentotipos" class="table table-hover table-striped compact responsive display nowrap cellspacing=0 width=100%">
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Descrição</th>
                            <th>Ações</th>
                        </tr>						
                    </thead>

			        <tbody>
				@foreach($equipamentotipos as $key=> $equipamentotipo)
					<tr>
						<td> {{$equipamentotipo->tipo}}</td>
						<td> {{$equipamentotipo->descricao}}</td>

						<td class="actions">
							@can('GERIR EQUIPAMENTO')
								{{-- <a href="{{ url("equipamentotipo/$equipamentotipo->id/edit") }}" 
									id="btn_edita_equipamentotipo"
									class="btn btn-warning btn-xs action botao_acao " 
									data-toggle="tooltip" 
									data-equipamentotipo = {{ $equipamentotipo->id }}
									data-placement="bottom" 
									title="Edita esse tipo">  
									<i class="glyphicon glyphicon-pencil "></i>
								</a>

								<a href="#" 
									id="btn_exclui_equipamentotipo"
									class="btn btn-danger btn-xs  action botao_acao  "  
									data-toggle="tooltip" 
									data-equipamentotipo = {{ $equipamentotipo->id }}
									data-placement="bottom" 
									title="Exclui esse Tipo ed Equipamento"> 
									<i class="glyphicon glyphicon-remove "></i>
								</a> --}}
							@endif
						</td>
					</tr>
				@endforeach
			        </tbody>
				</table>
		    </div>
        </div>
        {{-- BOTÕES --}}
		<div class="clearfix"></div>
        {{-- <div class="ln_solid"> </div> --}}
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

	<script>
		$(document).ready(function(){

			$('.ui-pnotify').remove();

			//botão de voltar
            $("#btn_voltar").click(function() {
				event.preventDefault();
				window.history.back();
			});

  			//configuração da tabela		 
			$.fn.dataTable.moment( 'DD/MM/YYYY' );
			
			var tabela_equipamentotipos = $("#tb_equipamentotipos").DataTable({
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
            	{ width: 500, targets: 1 },
            	{ width: 100, targets: 2 },
        		],
        		
							
				
			});


			//botão de edição
			$("table#tb_equipamentotipos").on("click", "#btn_edita_equipamentotipo",function(){
				let id_equipamentotipo = $(this).data('equipamentotipo');
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
			$("table#tb_equipamentotipos").on("click", "#btn_exclui_equipamentotipo",function(){
				event.preventDefault();
				

				let id_equipamentotipo = $(this).data('equipamentotipo');
				let btn = $(this);

				//verifica se o botao está desabilitado por conta da ACL
				if( $(this).data('desabilitado') )
				{ 
					funcoes.notificationRight("top", "right", "danger", "Esse usuário não tem permissão para executar essa Ação!");
					return
				}

				//console.log("botao btn_desativa -> ", $(this).data('equipamentotipo'));
				Swal.fire({
					title: 'Confirma a EXCLUSÃO desse Tipo de Equipamento?',
					icon: 'question',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Sim',
					cancelButtonText: 'Não'
				}).then((result) => {
					if (result.value) {
						$.post("{{ url('equipamentotipo/') }}/"+id_equipamentotipo, {
							_token  : "{{ csrf_token() }}",
							_method : 'DELETE',
							id: 			id_equipamentotipo,
							},function(data){
								if(data =="ok"){

									//exclui a linha no datatables
									$("table#tb_equipamentotipos").DataTable().row( btn.parents('tr') ).remove().draw();
									
									Swal.fire(
										'Tipo de Equipamento EXCLUÍDO',
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