                  
					<div class="form-group row">
						{{-- lanterna_d --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="lanterna_d">Lanterna Dianteira</label>
							<select name = "sai_lanterna_d" id="sai_lanterna_d" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >
								
									@foreach($lanterna_d as $sai_lanterna_d)
										@if ( $bdt->sai_lanterna_d == $sai_lanterna_d)
											<option value="{{ $sai_lanterna_d }}" selected="selected"> {{ $sai_lanterna_d }} </option>
										@else
											<option value="{{ $sai_lanterna_d }}"> {{ $sai_lanterna_d }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>

						{{-- lanterna_t --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="lanterna_t">Lanterna Traseira</label>
							<select name = "sai_lanterna_t" id="sai_lanterna_t" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

								
									@foreach($lanterna_t as $key => $estado)
										@if ( $bdt->sai_lanterna_t == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>

						{{-- placa_d --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="placa_d"> Placa Dianteira</label>
							<select name = "sai_placa_d" id="sai_placa_d" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

								
									@foreach($placa_d as $key => $estado)
										@if ( $bdt->sai_placa_d == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>

						{{-- placa_t --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="placa_t">Placa Traseira</label>
							<select name = "sai_placa_t" id="sai_placa_t" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

								
									@foreach($placa_t as $key => $estado)
										@if ( $bdt->sai_placa_t == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>


						{{-- parachoque_d --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="parachoque_d">Parachoque Dianteiro</label>
							<select name = "sai_parachoque_d" id="sai_parachoque_d" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

								
									@foreach($parachoque_d as $key => $estado)
										@if ( $bdt->sai_parachoque_d == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>

						{{-- parachoque_t --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="parachoque_t">Parachoque Traseiro</label>
							<select name = "sai_parachoque_t" id="sai_parachoque_t" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

								
									@foreach($parachoque_t as $key => $estado)
										@if ( $bdt->sai_parachoque_t == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>
					</div>