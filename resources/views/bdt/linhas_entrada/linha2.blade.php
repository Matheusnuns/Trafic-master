
					<div class="form-group row">
						{{-- chave_roda --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="chave_roda">Chave de roda</label>
							<select name = "ent_chave_roda" id="ent_chave_roda" class="form-control selectpicker error bdt" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif>
								
									@foreach($chave_roda as $ent_chave_roda)
										@if ( $bdt->ent_chave_roda == $ent_chave_roda)
											<option value="{{ $ent_chave_roda }}" selected="selected"> {{ $ent_chave_roda }} </option>
										@else
											<option value="{{ $ent_chave_roda }}"> {{ $ent_chave_roda }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>

						{{-- extintor --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="extintor">Extintor</label>
							<select name = "ent_extintor" id="ent_extintor" class="form-control selectpicker error bdt" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif>

								
									@foreach($extintor as $key => $estado)
										@if ( $bdt->ent_extintor == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>

						{{-- limpador_parabrisa --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="limpador_parabrisa"> Limpador de Parabrisa</label>
							<select name = "ent_limpador_parabrisa" id="ent_limpador_parabrisa" class="form-control selectpicker error bdt" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif>

								
									@foreach($limpador_parabrisa as $key => $estado)
										@if ( $bdt->ent_limpador_parabrisa == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>

						{{-- sirene --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="sirene">Sirene</label>
							<select name = "ent_sirene" id="ent_sirene" class="form-control selectpicker error bdt" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif>

								
									@foreach($sirene as $key => $estado)
										@if ( $bdt->ent_sirene == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>


						{{-- luz_lanterna_d --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="luz_lanterna_d">Luz Lanterna Dianteira</label>
							<select name = "ent_luz_lanterna_d" id="ent_luz_lanterna_d" class="form-control selectpicker error bdt" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif>

								
									@foreach($luz_lanterna_d as $key => $estado)
										@if ( $bdt->ent_luz_lanterna_d == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>

						{{-- luz_lanterna_t --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="luz_lanterna_t">Luz Lanterna Traseira</label>
							<select name = "ent_luz_lanterna_t" id="ent_luz_lanterna_t" class="form-control selectpicker error bdt" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif>

								
									@foreach($luz_lanterna_t as $key => $estado)
										@if ( $bdt->ent_luz_lanterna_t == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>
					</div>