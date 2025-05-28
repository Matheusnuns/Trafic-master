        			<div class="form-group row">
						{{-- combustivel --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="combustivel">Combustivel</label>
							<select name = "sai_combustivel" id="sai_combustivel" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif>
									@foreach($combustivel as $sai_combustivel)
										@if ( $bdt->sai_combustivel == $sai_combustivel)
											<option value="{{ $sai_combustivel }}" selected="selected"> {{ $sai_combustivel }} </option>
										@else
											<option value="{{ $sai_combustivel }}"> {{ $sai_combustivel }} </option>
										@endif
									@endforeach
							</select>	
						</div>

						{{-- oleo_motor --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="oleo_motor">Óleo do Motor</label>
							<select name = "sai_oleo_motor" id="sai_oleo_motor" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

							

									@foreach($oleo_motor as $estado)
										@if ( $bdt->sai_oleo_motor == $estado)
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
							<select name = "sai_oleo_freio" id="sai_oleo_freio" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

							
									@foreach($oleo_freio as $key => $estado)
										@if ( $bdt->sai_oleo_freio == $estado)
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
							<select name = "sai_fluido_radiador" id="sai_fluido_radiador" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

							
									@foreach($fluido_radiador as $key => $estado)
										@if ( $bdt->sai_fluido_radiador == $estado)
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
							<select name = "sai_triangulo" id="sai_triangulo" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

							
									@foreach($triangulo as $key => $estado)
										@if ( $bdt->sai_triangulo == $estado)
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
							<select name = "sai_macaco" id="sai_macaco" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

							
									@foreach($macaco as $key => $estado)
										@if ( $bdt->sai_macaco == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
							
							</select>	
						</div>

					</div>