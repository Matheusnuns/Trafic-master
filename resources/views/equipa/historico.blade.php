@extends('gentelella.layouts.app')

@section('content')

<div class="x_panel modal-content">
		<div class="x_title">
			<h2><i class="fas fa-book"></i> Historico do Equipamento  </h2>
			<div class="clearfix"></div> 
		</div>
			
		<div class="x_content">
				<table id="tb_historico_equipamento" class="table table-hover table-striped compact responsive display nowrap cellspacing=0 width=100%">
			<thead>
				<tr>
					<th>Agente</th>
                    <th>Acautelamento</th>
                    <th>Devolução</th>
				</tr>						
			</thead>

			<tbody>
				@foreach ($historico_equipamentos as $historico_equipamento)
					<tr>
						<td>{{$historico_equipamento->nome_servico}}</td>
                        <td>{{ date("d/m/Y", strtotime($historico_equipamento->saida)) }}</td>
                        <td>
                            @if (isset($historico_equipamento->entrada))
                                {{ date("d/m/Y", strtotime($historico_equipamento->entrada)) }}
                                {{-- {{$historico_equipamento->entrada}} --}}

                            @else
                                A C A U T E L A D O
                            @endif    
                        </td>
					</tr>
				@endforeach
			</tbody>
				</table>
		</div>
		
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

	<script>
		$(document).ready(function(){

			//botão de voltar
            $("#btn_voltar").click(function() {
				event.preventDefault();
				window.history.back();
			});



			var tb_material = $("#tb_historico_equipamento").DataTable({
				language : {
					'url' : '{{ asset('js/portugues.json') }}',
					"decimal": ",",
					"thousands": "."
				}, 
				order: [[1, 'desc'], [2,'desc']],

				
				stateSave: false,
				stateDuration: -1,
				responsive: true,
				autoWidth: false,
		
			});
		});
		
		
	</script>

@endpush