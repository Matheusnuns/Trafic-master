                  
					<div class="form-group row">
						{{-- porta_d_e --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="porta_d_e">Porta Dianteira Esq.</label>
							<select name = "sai_porta_d_e" id="sai_porta_d_e" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >
								
									@foreach($porta_d_e as $sai_porta_d_e)
										@if ( $bdt->sai_porta_d_e == $sai_porta_d_e)
											<option value="{{ $sai_porta_d_e }}" selected="selected"> {{ $sai_porta_d_e }} </option>
										@else
											<option value="{{ $sai_porta_d_e }}"> {{ $sai_porta_d_e }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>

						{{-- porta_d_d --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="porta_d_d">Porta Dianteira Dir.</label>
							<select name = "sai_porta_d_d" id="sai_porta_d_d" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

								
									@foreach($porta_d_d as $key => $estado)
										@if ( $bdt->sai_porta_d_d == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>

						{{-- porta_t_e --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="porta_t_e">Porta Traseira Esq.</label>
							<select name = "sai_porta_t_e" id="sai_porta_t_e" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

								
									@foreach($porta_t_e as $key => $estado)
										@if ( $bdt->sai_porta_t_e == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>

						{{-- porta_t_d --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="porta_t_d">Porta Traseira Dir.</label>
							<select name = "sai_porta_t_d" id="sai_porta_t_d" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

								
									@foreach($porta_t_d as $key => $estado)
										@if ( $bdt->sai_porta_t_d == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>


						{{-- teto --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="teto">Teto</label>
							<select name = "sai_teto" id="sai_teto" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

								
									@foreach($teto as $key => $estado)
										@if ( $bdt->sai_teto == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>

						{{-- parabrisa --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="parabrisa">Parabrisa</label>
							<select name = "sai_parabrisa" id="sai_parabrisa" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

								
									@foreach($parabrisa as $key => $estado)
										@if ( $bdt->sai_parabrisa == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>
					</div>