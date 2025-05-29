<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
	<div class="menu_section">
		<ul class="nav side-menu">
			<li>
				<a href="{{ route('home')}}"><i class="fas fa-home"></i> Principal </a>
			</li>

			<li>
				<a href="{{ url('/dashboard')}}"><i class="fas fa-home"></i> Dashboard </a>
			</li>

			@auth
				@if(auth()->user()->can('GERIR OCORRENCIA') || auth()->user()->can('CRIAR OCORRENCIA'))
					<li>
						<a><i class="fas fa-book-open"></i> Ocorrências <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="{{ url("/ocorrencia") }}"> <i class="fa fa-list"></i> Relação </a></li>
						</ul>
					</li>
				@endif

				@if(auth()->user()->can('CADASTRAR MULTAS') || auth()->user()->can('VER MULTAS'))
					<li>
						<a><i class="fas fa-pen-nib"></i> Multas <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="{{ url("/multa") }}"> <i class="fa fa-list"></i> Multas </a></li>
							<li><a href="{{ url("/semaforos") }}"> <i class="fa fa-list"></i> Semaforo </a></li>
						</ul>
					</li>
				@endif
			@endauth

			<li>
				<a><i class="fas fa-file-pdf"></i> Material de Apoio <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					<li><a href="{{ url("/material") }}"> <i class="fa fa-list"></i> Relação </a></li>
				</ul>
			</li>

			@auth
				@if(auth()->user()->can('GERIR AGENTE') || auth()->user()->can('VER AGENTE'))
					<li>
						<a><i class="fas fa-user-shield"></i> Agentes <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="{{ url("/agente") }}"> <i class="fa fa-list"></i> Relação </a></li>
						</ul>
					</li>
				@endif

				@if(auth()->user()->can('GERIR EQUIPAMENTO') || auth()->user()->can('VER EQUIPAMENTO'))
					<li>
						<a><i class="fas fa-tools"></i> Equipamentos <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="{{ url("/equipa") }}"> <i class="fa fa-list"></i> Equipamento </a></li>
						</ul>
					</li>
				@endif

				@if(auth()->user()->can('VER CONFIGURACAO'))
					<li>
						<a><i class="fas fa-cogs"></i> Configurações <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							@if(auth()->user()->can('CRIAR LEIS'))
								<li><a href="{{ url("/leis") }}"><i class="fas fa-list"></i> Leis </a></li>
							@endif

							@if(auth()->user()->can('CONFIG CARGO'))
								<li><a href="{{ url("/cargo") }}"><i class="fas fa-list"></i> Cargos </a></li>
							@endif

							@if(auth()->user()->can('CONFIG OCORRENCIA'))
								<li>
									<a><i class="fas fa-book-open"></i> Ocorrencia <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="{{url("/atendimento")}}"><i class="fa fa-list"></i> Atendimento </a></li>
										<li><a href="{{url("/categoria")}}"><i class="fa fa-list"></i> Categoria </a></li>
										<li><a href="{{url("/clima")}}"><i class="fa fa-list"></i> Clima </a></li>
										<li><a href="{{url("/conducao")}}"><i class="fa fa-list"></i> Condução </a></li>
										<li><a href="{{url("/setor")}}"><i class="fa fa-list"></i> Setor </a></li>
										<li><a href="{{url("/tipo")}}"><i class="fa fa-list"></i> Tipo </a></li>
										<li><a href="{{url("/transportado")}}"><i class="fa fa-list"></i> Transportado </a></li>
									</ul>
								</li>
							@endif

							@if(auth()->user()->can('CONFIG MATERIAL'))
								<li>
									<a href="{{ url("/materialapoio") }}"><i class="fas fa-file-pdf"></i> Material de Apoio </a>
								</li>
							@endif

							<li>
								<a><i class="fas fa-tools"></i> Equipamentos <span class="fa fa-chevron-down"></span></a>
								<ul class="nav child_menu">
									<li><a href="{{url("/equipamentotipo")}}"><i class="fa fa-list"></i> Tipos </a></li>
									<li><a href="{{url("/equipamento")}}"><i class="fa fa-list"></i> Equipamentos </a></li>
								</ul>
							</li>

							<li>
								<a><i class="fas fa-shield-alt"></i> Permissionamento <span class="fa fa-chevron-down"></span></a>
								<ul class="nav child_menu">
									<li><a href="{{ url("/user") }}"><i class="fa fa-list"></i> Usuários </a></li>
									<li><a href="{{ url("/role") }}"><i class="fa fa-list"></i> Roles </a></li>
									<li><a href="{{ url("/permission") }}"><i class="fa fa-list"></i> Permissões </a></li>
								</ul>
							</li>
						</ul>
					</li>
				@endif
			@endauth

			<li>
				<a href="{{ route('logout')}}"><i class="fa fa-sign-out"></i> Sair do sistema </a>
			</li>
		</ul>
	</div>
</div>
