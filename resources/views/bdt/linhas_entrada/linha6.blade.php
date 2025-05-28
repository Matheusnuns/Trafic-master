                  
					<div class="form-group row">
						{{-- paralama_d_e --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="paralama_d_e">Paralama Dianteiro Esq.</label>
							<select name = "ent_paralama_d_e" id="ent_paralama_d_e" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >
								
									@foreach($paralama_d_e as $ent_paralama_d_e)
										@if ( $bdt->ent_paralama_d_e == $ent_paralama_d_e)
											<option value="{{ $ent_paralama_d_e }}" selected="selected"> {{ $ent_paralama_d_e }} </option>
										@else
											<option value="{{ $ent_paralama_d_e }}"> {{ $ent_paralama_d_e }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>

						{{-- paralama_d_d --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="paralama_d_d">Paralama Dianteiro Dir.</label>
							<select name = "ent_paralama_d_d" id="ent_paralama_d_d" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

								
									@foreach($paralama_d_d as $key => $estado)
										@if ( $bdt->ent_paralama_d_d == $estado)
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
							<select name = "ent_paralama_t_e" id="ent_paralama_t_e" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

								
									@foreach($paralama_t_e as $key => $estado)
										@if ( $bdt->ent_paralama_t_e == $estado)
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
							<select name = "ent_paralama_t_d" id="ent_paralama_t_d" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

								
									@foreach($paralama_t_d as $key => $estado)
										@if ( $bdt->ent_paralama_t_d == $estado)
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
							<select name = "ent_capo" id="ent_capo" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

								
									@foreach($capo as $key => $estado)
										@if ( $bdt->ent_capo == $estado)
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
							<select name = "ent_portamala" id="ent_portamala" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

								
									@foreach($portamala as $key => $estado)
										@if ( $bdt->ent_portamala == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>
					</div>