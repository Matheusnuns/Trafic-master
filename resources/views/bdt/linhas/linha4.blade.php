                  
					<div class="form-group row">
						{{-- pneu_d_d --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="pneu_d_d">Pneu Dianteiro Dir.</label>
							<select name = "sai_pneu_d_d" id="sai_pneu_d_d" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >
								
									@foreach($pneu_d_d as $sai_pneu_d_d)
										@if ( $bdt->sai_pneu_d_d == $sai_pneu_d_d)
											<option value="{{ $sai_pneu_d_d }}" selected="selected"> {{ $sai_pneu_d_d }} </option>
										@else
											<option value="{{ $sai_pneu_d_d }}"> {{ $sai_pneu_d_d }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>

						{{-- pneu_t_e --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="pneu_t_e">Pneu Traseiro Esq.</label>
							<select name = "sai_pneu_t_e" id="sai_pneu_t_e" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

								
									@foreach($pneu_t_e as $key => $estado)
										@if ( $bdt->sai_pneu_t_e == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>

						{{-- pneu_t_d --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="pneu_t_d"> Pneu Traseiro Dir.</label>
							<select name = "sai_pneu_t_d" id="sai_pneu_t_d" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

								
									@foreach($pneu_t_d as $key => $estado)
										@if ( $bdt->sai_pneu_t_d == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>

						{{-- estepe --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="estepe">Estepe</label>
							<select name = "sai_estepe" id="sai_estepe" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

								
									@foreach($estepe as $key => $estado)
										@if ( $bdt->sai_estepe == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>


						{{-- retrovisor_esq --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="retrovisor_esq">Retrovisor Esquerdo</label>
							<select name = "sai_retrovisor_esq" id="sai_retrovisor_esq" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

								
									@foreach($retrovisor_esq as $key => $estado)
										@if ( $bdt->sai_retrovisor_esq == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>

						{{-- retrovisor_dir --}}
						<div class="col-md-2 col-sm-2 col-xs-12">
							<label class="control-label " for="retrovisor_dir">Retrovisor Direito</label>
							<select name = "sai_retrovisor_dir" id="sai_retrovisor_dir" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" @if ($fiscal == true) disabled @endif >

								
									@foreach($retrovisor_dir as $key => $estado)
										@if ( $bdt->sai_retrovisor_dir == $estado)
											<option data-icon="fa fa-check" value="{{ $estado }}" selected="selected"> {{ $estado }} </option>
										@else
											<option value="{{ $estado }}"> {{ $estado }} </option>
										@endif
									@endforeach
								
							</select>	
						</div>
					</div>