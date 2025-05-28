                  
					<div class="form-group row">
						{{-- paralama_d_e --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="paralama_d_e">Paralama Dianteiro Esq.</label>
							<select name = "sai_paralama_d_e" id="sai_paralama_d_e" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >
								
									@foreach($paralama_d_e as $sai_paralama_d_e)
										@if ( $bdt->sai_paralama_d_e == $sai_paralama_d_e)
											<option value="{{ $sai_paralama_d_e }}" selected="selected"> {{ $sai_paralama_d_e }} </option>
										@else
											<option value="{{ $sai_paralama_d_e }}"> {{ $sai_paralama_d_e }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>

						{{-- paralama_d_d --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="paralama_d_d">Paralama Dianteiro Dir.</label>
							<select name = "sai_paralama_d_d" id="sai_paralama_d_d" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

								
									@foreach($paralama_d_d as $key => $estado)
										@if ( $bdt->sai_paralama_d_d == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>

						{{-- paralama_t_e --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="paralama_t_e">Paralama Traseiro Esq.</label>
							<select name = "sai_paralama_t_e" id="sai_paralama_t_e" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

								
									@foreach($paralama_t_e as $key => $estado)
										@if ( $bdt->sai_paralama_t_e == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>

						{{-- paralama_t_d --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="paralama_t_d">Paralama Traseiro Dir.</label>
							<select name = "sai_paralama_t_d" id="sai_paralama_t_d" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

								
									@foreach($paralama_t_d as $key => $estado)
										@if ( $bdt->sai_paralama_t_d == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>


						{{-- capo --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="capo">Capô</label>
							<select name = "sai_capo" id="sai_capo" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

								
									@foreach($capo as $key => $estado)
										@if ( $bdt->sai_capo == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>

						{{-- portamala --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="portamala">Porta-malas</label>
							<select name = "sai_portamala" id="sai_portamala" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

								
									@foreach($portamala as $key => $estado)
										@if ( $bdt->sai_portamala == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>
					</div>