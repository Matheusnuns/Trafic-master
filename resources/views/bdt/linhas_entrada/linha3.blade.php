                  
					<div class="form-group row">
						{{-- luz_farol --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="luz_farol">Luz Farol</label>
							<select name = "ent_luz_farol" id="ent_luz_farol" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >
								
									@foreach($luz_farol as $ent_luz_farol)
										@if ( $bdt->ent_luz_farol == $ent_luz_farol)
											<option value="{{ $ent_luz_farol }}" selected="selected"> {{ $ent_luz_farol }} </option>
										@else
											<option value="{{ $ent_luz_farol }}"> {{ $ent_luz_farol }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>

						{{-- luz_re --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="luz_re">Luz de re</label>
							<select name = "ent_luz_re" id="ent_luz_re" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

								
									@foreach($luz_re as $key => $estado)
										@if ( $bdt->ent_luz_re == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>

						{{-- luz_freio --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="luz_freio"> Luz de Freio</label>
							<select name = "ent_luz_freio" id="ent_luz_freio" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

								
									@foreach($luz_freio as $key => $estado)
										@if ( $bdt->ent_luz_freio == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>

						{{-- luz_alerta --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="luz_alerta">Luz de Alerta</label>
							<select name = "ent_luz_alerta" id="ent_luz_alerta" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

								
									@foreach($luz_alerta as $key => $estado)
										@if ( $bdt->ent_luz_alerta == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>


						{{-- buzina --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="buzina">Buzina</label>
							<select name = "ent_buzina" id="ent_buzina" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

								
									@foreach($buzina as $key => $estado)
										@if ( $bdt->ent_buzina == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>

						{{-- pneu_d_e --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="pneu_d_e">Pneu Dianteiro Esq.</label>
							<select name = "ent_pneu_d_e" id="ent_pneu_d_e" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

								
									@foreach($pneu_d_e as $key => $estado)
										@if ( $bdt->ent_pneu_d_e == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>
					</div>