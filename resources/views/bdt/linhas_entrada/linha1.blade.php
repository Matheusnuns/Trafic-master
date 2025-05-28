        			<div class="form-group row">
						{{-- combustivel --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="combustivel">Combustivel</label>
							<select name = "ent_combustivel" id="ent_combustivel" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif>
									@foreach($combustivel as $ent_combustivel)
										@if ( $bdt->ent_combustivel == $ent_combustivel)
											<option value="{{ $ent_combustivel }}" selected="selected"> {{ $ent_combustivel }} </option>
										@else
											<option value="{{ $ent_combustivel }}"> {{ $ent_combustivel }} </option>
										@endif
									@endforeach
							</select>	
						</div>

						{{-- oleo_motor --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="oleo_motor">Óleo do Motor</label>
							<select name = "ent_oleo_motor" id="ent_oleo_motor" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

							

									@foreach($oleo_motor as $estado)
										@if ( $bdt->ent_oleo_motor == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
							</select>	
						</div>

						{{-- oleo_freio --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="oleo_freio">Óleo do freio</label>
							<select name = "ent_oleo_freio" id="ent_oleo_freio" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

							
									@foreach($oleo_freio as $key => $estado)
										@if ( $bdt->ent_oleo_freio == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
							
							</select>	
						</div>

						{{-- fluido_radiador --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="fluido_radiador">Fluído Radiador</label>
							<select name = "ent_fluido_radiador" id="ent_fluido_radiador" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

							
									@foreach($fluido_radiador as $key => $estado)
										@if ( $bdt->ent_fluido_radiador == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
							
							</select>	
						</div>


						{{-- triangulo --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="triangulo">Triângulo</label>
							<select name = "ent_triangulo" id="ent_triangulo" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

							
									@foreach($triangulo as $key => $estado)
										@if ( $bdt->ent_triangulo == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
							
							</select>	
						</div>

						{{-- macaco --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="macaco">Macaco</label>
							<select name = "ent_macaco" id="ent_macaco" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

							
									@foreach($macaco as $key => $estado)
										@if ( $bdt->ent_macaco == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
							
							</select>	
						</div>

					</div>