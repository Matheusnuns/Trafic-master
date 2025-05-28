@extends('gentelella.layouts.app')

@section('content')

<div class="x_panel ">
    <div class="x_content">

        <div class="x_title">
            <h2> Novo Material de Apoio </h2>
            <div class="clearfix"></div>
        </div>

        <div class="x_panel ">
            <div class="x_content">

                <form id="frm_material" class="form-horizontal form-label-left" enctype="multipart/form-data" method="post" action="{{ route('material.store')}}">
                {{ csrf_field() }}

                <div class="form-group row">
					<div class=" form-group col-md-12 col-sm-12 col-xs-12">
						<label class="control-label" >Titulo</label>
						<input type="text" id="titulo" class="form-control " name="titulo" minlength="4" maxlength="100" required >	
					</div>
				</div>

                <div class="form-group row">
					<div class=" form-group col-md-12 col-sm-12 col-xs-12">
						<label class="control-label" >PDF</label>
                        <input type="file" id="pdf" name="pdf">
						{{-- <input type="text" id="titulo" class="form-control " name="titulo" minlength="4" maxlength="100" required>	 --}}
					</div>
				</div>

                {{-- BOTÕES --}}
                <div class="clearfix"></div>
                <div class="ln_solid"> </div>
                    <div class="footer text-right"> {{-- col-md-3 col-md-offset-9 --}}
                        <input type="submit" hidden> {{-- INPUT HIDDEN PARA DEIXAR O BTN NA ORDEM DE SALVAR NA DIREITA --}}

                        <button id="btn_voltar" class="botoes-acao btn btn-round btn-primary">
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

@push('scripts')
	<script type="text/javascript">
        $(document).ready(function(){
            //botão de voltar
			$("#btn_voltar").click(function(){
				event.preventDefault();
				window.location.href = "{{ URL::route('material.index') }}"; 
			});
        });
	</script>
@endpush