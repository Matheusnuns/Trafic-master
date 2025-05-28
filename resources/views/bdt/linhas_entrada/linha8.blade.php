                  
					<div class="form-group row">
						{{-- vidro_d_e --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="vidro_d_e">Vidro Dianteiro Esq.</label>
							<select name = "ent_vidro_d_e" id="ent_vidro_d_e" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif>
								
									@foreach($vidro_d_e as $ent_vidro_d_e)
										@if ( $bdt->ent_vidro_d_e == $ent_vidro_d_e)
											<option value="{{ $ent_vidro_d_e }}" selected="selected"> {{ $ent_vidro_d_e }} </option>
										@else
											<option value="{{ $ent_vidro_d_e }}"> {{ $ent_vidro_d_e }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>

						{{-- vidro_d_d --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="vidro_d_d">Vidro Dianteiro Dir.</label>
							<select name = "ent_vidro_d_d" id="ent_vidro_d_d" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif>

								
									@foreach($vidro_d_d as $key => $estado)
										@if ( $bdt->ent_vidro_d_d == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>

						{{-- vidro_t_e --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="vidro_t_e">Porto Traseiro Esq.</label>
							<select name = "ent_vidro_t_e" id="ent_vidro_t_e" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif>

								
									@foreach($vidro_t_e as $key => $estado)
										@if ( $bdt->ent_vidro_t_e == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>

						{{-- vidro_t_d --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="vidro_t_d">Vidro Traseiro Dir.</label>
							<select name = "ent_vidro_t_d" id="ent_vidro_t_d" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif>

								
									@foreach($vidro_t_d as $key => $estado)
										@if ( $bdt->ent_vidro_t_d == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>


						{{-- vidro_t --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="vidro_t">Vidro Porta-malas</label>
							<select name = "ent_vidro_t" id="ent_vidro_t" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif>

								
									@foreach($vidro_t as $key => $estado)
										@if ( $bdt->ent_vidro_t == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>

						
					</div>