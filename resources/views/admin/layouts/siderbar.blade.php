

			<!-- start sidebar menu -->
			<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll" class="left-sidemenu">
						<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
							data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li>
							<li class="sidebar-user-panel">
								<div class="sidebar-user">
									<div class="sidebar-user-picture">
										<img alt="image" src="{{asset('admin')}}/assets/img/dp.jpg">
									</div>
									<div class="sidebar-user-details">
										<div class="user-name"> {{ Auth::user()->name }} </div>
										<div class="user-role">Administrator</div>
									</div>
								</div>
							</li>

							<li class="nav-item start active open">
								<a href="#" class="nav-link nav-toggle">
									<i class="fas fa-home"></i>
									<span class="title">Inicio</span>
									<span class="selected"></span>
									<span class="arrow open"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item active">
										<a href="{{ url('auth/inicio') }} " class="nav-link ">
											<span class="title">Visualizar</span>
											<span class="selected"></span>
										</a>
									</li>
									<li class="nav-item ">
										<a href="{{url('auth/inicio/create')}}" class="nav-link ">
											<span class="title"> Cadastrar </span>
										</a>
									</li>


								</ul>
							</li>




							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i data-feather="user"></i>
									<span class="title">Produtos</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href=" {{ url('auth/produto') }} " class="nav-link ">
                                            <span class="title">Visualizar</span>
										</a>
									</li>
									<li class="nav-item">
										<a href=" {{ url('auth/produto/create') }} " class="nav-link ">
                                            <span class="title">Cadastrar</span>
										</a>
									</li>



								</ul>
							</li>


							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"><i data-feather="users"></i>
									<span class="title">Projectos</span><span class="arrow"></span></a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="{{url('auth/projecto')}}" class="nav-link ">
                                             <span class="title"> Visulizar </span>

										</a>
									</li>
									<li class="nav-item">
										<a href="{{url('auth/projecto/create')}}" class="nav-link ">
											<span class="title"> Cadastrar </span>
										</a>
									</li>



								</ul>
							</li>


							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i data-feather="book"></i>
									<span class="title">Contactos</span> <span class="arrow"></span>
									<span class="label label-rouded label-menu label-success">new</span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="{{url('auth/contacto')}}" class="nav-link ">
											<span class="title"> Visualizar  </span>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{url('auth/contacto/create')}}" class="nav-link ">
                                            <span class="title"> Cadastrar </span>
										</a>
									</li>



								</ul>
							</li>


							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i data-feather="book"></i>
									<span class="title">Sobre</span> <span class="arrow"></span>
									<span class="label label-rouded label-menu label-success">new</span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="{{url('auth/sobre')}}" class="nav-link ">
											<span class="title"> Visualizar  </span>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{url('auth/sobre/create')}}" class="nav-link ">
                                            <span class="title"> Cadastrar </span>
										</a>
									</li>



								</ul>
							</li>



						</ul>
					</div>
				</div>
			</div>
			<!-- end sidebar menu -->
