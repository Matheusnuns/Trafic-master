<div class="top_nav">
	<div class="nav_menu">
		<nav>
			<div class="nav toggle">
				<a id="menu_toggle"><i class="fa fa-bars"></i></a>
			</div>

			<div id="app">
				<ul class="nav navbar-nav navbar-right">
					<li class="">
						<a href="#" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							@auth
								{{ Auth::user()->name }}
							@else
								Visitante
							@endauth
							<span class="fa fa-angle-down"></span>
						</a>
						<ul class="dropdown-menu dropdown-usermenu pull-right">
							@auth
								<li>
									<a href="{{ url('/alterasenha') }}">
										<i class="material-icons pull-right">lock_outline</i> Alterar Senha
									</a>
								</li>
								<li>
									<a class="dropdown-item" href="{{ route('logout') }}">
										<i class="fa fa-sign-out pull-right"></i> Sair do sistema
									</a>
								</li>
							@else
								<li>
									<a href="{{ route('login') }}">
										<i class="fa fa-sign-in pull-right"></i> Entrar
									</a>
								</li>
							@endauth
						</ul>
					</li>
					{{-- <Notificacoes></Notificacoes> --}}
				</ul>
			</div>
		</nav>
	</div>
</div>
