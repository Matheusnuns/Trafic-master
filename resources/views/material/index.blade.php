@extends('gentelella.layouts.app')

@section('content')

<div class="x_panel modal-content">
		<div class="x_title">
			<h2 style="width: 200px"><i class="fas fa-book"></i> Material de Apoio </h2>
            @can('GERIR MATERIAL')
                <a href="{{ url('material/create') }}" class="btn-circulo btn  btn-success btn-md  pull-right " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Novo Material de Apoio"> Novo Material de Apoio </a>
			@endif
			<div class="clearfix"></div> 
		</div>
			
		<div class="x_content">
				<table id="tb_material" class="table table-hover table-striped compact responsive display nowrap cellspacing=0 width=100%">
			<thead>
				<tr>
					<th>Titulo</th>
					<th>Ações</th>
				</tr>						
			</thead>

			<tbody>
				@foreach ($materiais as $material)
					<tr>
						<td> <a target="_blank" href="{{ url('storage/pdfs/'.$material->pdf) }}">{{$material->titulo}}</a></td>
						<td class="actions">
							<a href="#" 
								id="btn_exclui_material"
								class="btn btn-danger btn-xs action botao_acao btn_exclui_material"  
								data-toggle="tooltip" 
								data-material = {{ $material->id }}
								data-placement="bottom" 
								title="Exclui esse Tipo de Material"> 
								<i class="glyphicon glyphicon-remove "></i>
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
				</table>
		</div>
		{{-- BOTÕES --}}
		<div class="clearfix"></div>
		
		
    </div>

@endsection


@push("scripts")
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script>
		$(document).ready(function(){
			var tb_material = $("#tb_material").DataTable({
				language : {
					'url' : '{{ asset('js/portugues.json') }}',
					"decimal": ",",
					"thousands": "."
				}, 
				stateSave: true,
				stateDuration: -1,
				responsive: true,
				autoWidth: false,
			});
		});
		

		$("table#tb_material").on("click", ".btn_exclui_material", function(e){
                  // Evitar que a página seja recarregada	
          e.preventDefault();
                  let id_material = $(this).data('material');
                  // console.log(id_material);
                  swal({
              title: "Atenção!",
              text: 'Confirma a EXCLUSÃO da Ocorrencia?',
              icon: "warning",
              buttons: {
                    cancel: {
                      text: "Cancelar",
                      value: "cancelar",
                      visible: true,
                      closeModal: true,
                    },
                    ok: {
                      text: "Sim, excluir!",
                      value: 'excluir',
                      visible: true,
                      closeModal: true,
                    }
                  }
            }).then(function(resultado){
              if(resultado === 'excluir'){
                // Chamando a url /usuarios/id usando método DELETE e a token de segurança
                      
                      $.post("{{ url("/material/") }}/"+id_material, {
                        id : id_material,
                        _method : "DELETE",
                        _token : "{{ csrf_token() }}",
                      }).done(function(){
                        //Recarregar a página
                        location.reload();
                      });
                  } 
        });
      });
		
	</script>

@endpush