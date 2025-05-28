@extends('gentelella.layouts.app')

@section('content')
    <div class="x_panel modal-content">
		<div class="x_title">
			<h2><i class="fas fa-tools"></i>Equipamentos </h2>
            
            <ul class="nav navbar-right panel_toolbox">
                @can('GERIR EQUIPAMENTO')
                    <a href="{{ url('equipamento/create') }}" class="btn-circulo btn  btn-success btn-md  pull-right " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Novo Equipamento"> Novo Equipamento </a>
                @endif
            </ul>
			<div class="clearfix"></div> 
		</div>
			
        <div class="x_panel">
		    <div class="x_content">
				<table id="tb_equipamentos" class="table table-hover table-striped compact responsive display nowrap cellspacing=0 width=100%">
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Numeração</th>
                            <th>Situação</th>
                            <th>Ações</th>
                        </tr>						
                    </thead>

			        <tbody>
				@foreach($equipamentos as $key=> $equipamento)
					<tr>
						<td> {{$equipamento->equipamentotipo->tipo}}</td>
						<td> {{$equipamento->numeracao}}</td>
						<td> @switch($equipamento->situacao)
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
							<a href="{{ url("equipamento/$equipamento->id/edit") }}" 
								id="btn_edita_equipamento"
								class="btn btn-warning btn-xs action botao_acao " 
								data-toggle="tooltip" 
								data-equipamento = {{ $equipamento->id }}
								data-placement="bottom" 
								title="Edita esse tipo">  
								<i class="glyphicon glyphicon-pencil "></i>
							</a>

							<a href="#" 
								id="btn_exclui_equipamento"
								class="btn btn-danger btn-xs  action botao_acao  "  
								data-toggle="tooltip" 
								data-equipamento = {{ $equipamento->id }}
								data-placement="bottom" 
								title="Exclui esse Tipo ed Equipamento"> 
								<i class="glyphicon glyphicon-remove "></i>
							</a>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
        $("table#tb_equipamentos").on("click", "#btn_exclui_equipamento", function(e){
                  // Evitar que a página seja recarregada	
          e.preventDefault();
                  let id_equipamento = $(this).data('equipamento');
                  let btn 		= $(this);
                  // console.log(id_equipamento);
                  swal({
              title: "Atenção!",
              text: 'Confirma a EXCLUSÃO do Equipamento?',
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
                      $.post("{{ url("/equipamento/") }}/"+id_equipamento, {
                        id : id_equipamento,
                        _method : "DELETE",
                        _token : "{{ csrf_token() }}",
                      },function(resultado){
                        if(resultado =="ok"){
								//exclui a linha no datatables
								$("table#tb_equipamentos").DataTable().row( btn.parents('tr') ).remove().draw();
								Swal.fire('Equipamento EXCLUÍDO',' ','success')
							}else if(resultado =="invalido"){
								Swal.fire('Erro ao excluir, Esse Equipamento esta Acautelado',' ','error')
                            }
                      })

                    //   .done(function(){
                    //     //Recarregar a página
                    //     location.reload();
                    //   });
                  } 
        });
      });

    });
    
    
</script>

@endpush