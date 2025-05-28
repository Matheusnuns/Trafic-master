
					<div class="form-group row">
						{{-- chave_roda --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="chave_roda">Chave de roda</label>
							<select name = "sai_chave_roda" id="sai_chave_roda" class="form-control selectpicker error bdt" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif>
								
									@foreach($chave_roda as $sai_chave_roda)
										@if ( $bdt->sai_chave_roda == $sai_chave_roda)
											<option value="{{ $sai_chave_roda }}" selected="selected"> {{ $sai_chave_roda }} </option>
										@else
											<option value="{{ $sai_chave_roda }}"> {{ $sai_chave_roda }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>

						{{-- extintor --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="extintor">Extintor</label>
							<select name = "sai_extintor" id="sai_extintor" class="form-control selectpicker error bdt" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif>

								
									@foreach($extintor as $key => $estado)
										@if ( $bdt->sai_extintor == $estado)
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
							<select name = "sai_limpador_parabrisa" id="sai_limpador_parabrisa" class="form-control selectpicker error bdt" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif>

								
									@foreach($limpador_parabrisa as $key => $estado)
										@if ( $bdt->sai_limpador_parabrisa == $estado)
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
							<select name = "sai_sirene" id="sai_sirene" class="form-control selectpicker error bdt" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif>

								
									@foreach($sirene as $key => $estado)
										@if ( $bdt->sai_sirene == $estado)
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
							<select name = "sai_luz_lanterna_d" id="sai_luz_lanterna_d" class="form-control selectpicker error bdt" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif>

								
									@foreach($luz_lanterna_d as $key => $estado)
										@if ( $bdt->sai_luz_lanterna_d == $estado)
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
							<select name = "sai_luz_lanterna_t" id="sai_luz_lanterna_t" class="form-control selectpicker error bdt" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif>

								
									@foreach($luz_lanterna_t as $key => $estado)
										@if ( $bdt->sai_luz_lanterna_t == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>
					</div>