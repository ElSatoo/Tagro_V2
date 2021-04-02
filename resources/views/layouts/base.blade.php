  
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trackitagro</title>
	<link href="css/estilos.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!-- Bootstrap CSS -->

	<style>

		@media (min-width: 768px) {
			.modal-xl {
				width: 98%;
				max-width:1900px;
			}
		}
		.center {
			margin: auto;
			width: 50%;
			padding: 10px;
		}
	</style>
</head>
<body>

	<!-- Header -->
	<header style="background-color: #1fc772; padding-bottom: 10px;"> 


		<!-- Boton para abrir el sidemenu -->

		<button class="btnn successe toggle-btn" id="menu-toggle" style="border: #fff solid 1px; position: relative; left: 5px; top: 7px;">
			<i class="fa fa-bars" aria-hidden="true"></i>
		</button>

		<a class="logo-home" href="{{ url('dashboard') }}" >
			<img src="/images/Trackitagro-Logo.png" >
		</a>
		<!-- end region button side menu -->
		<!--menu-->
		<div class="dropdown float-md-right">
			<span class="username" style="color: white; position: relative; right: 15px; top: 10px;">
				<i class="material-icons" style="color: white; position: relative; right: 5px; top: 5px; " >person</i>Bienvenido {{ auth()->user()->name }}
			</span>
			<button type="button" class="btnn successe dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="border: #fff solid 1px; position: relative; right: 10px; top: 8px;">
			</button>
			<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform;  top: 0px; left: 0px; transform: translate3d(50px, 43px, 0px);">
				<a class="principal dropdown-item" style="color:#1fc772;">Volver</a>
				<a href="#" class="principal dropdown-item" data-toggle="modal" data-target="#modal_cerrar_sesion" style="color: #1fc772;">Cerra Session</a>


			</div>
		</div> 

		<!--clima-->
		<div class="dropdown float-md-right icono-admin" style="color: white; position: relative; right: 27px; top: 14px;">          
			<a id="nube" data-toggle="dropdown">
				<i class="material-icons">cloud</i>
			</a>
			<div data-toggle="modal" data-target="#modal-detalle-clima"   id="dropdownMenuClima"   class="dropdown-menu">   

			</div>
		</div> 

		<div class="dropdown float-md-right icono-admin" style="color: white; position: relative; right: 37px; top: 14px;">
			<!--cultia-->
			<a href="{{ url('cultia') }}" style="color:white;" ><i class="material-icons">satellite</i></a>

			<!--<button class="btn btn-secondary"  type="button" onclick="cargarModulo('modulos/admin/iframe_cultiia.php')">
			</button> -->
		</div> 
		
		

		
	</header>

	<div class="page-content active d-flex toggled" id="wrapper" style="position: relative; " >
		<div class="aside-left" id="sidebar-wrapper" style="position: relative; " >
			<ul class="nav flex-column" style="position: relative; top: 20px;">
				<li class="nav-item">
					<a class="nav-link selected collpase" href="#submenuEmpresa1" data-toggle="collapse" data-target="#submenuEmpresa1" style="color: #666666;"><i class="material-icons" >storage</i><span>Empresas</span></a>
					<div class="collapse" id="submenuEmpresa1" aria-expanded="false" style="background-color: #3DD96F; position: relative; bottom: 20px;">
						<ul class="flex-column nav">
							<li class="nav-item">
								<a href="#" class="submenu1" data-toggle="modal" data-target="#modal-agregar-cliente" style="background-color: #1fc772; color: white; ">
									<i class="fa fa-fw fa-clock-o"></i> Nueva Empresa
								</a>
							</li>
							<li class="nav-item">
								<a class="submenu1" href="#" data-toggle="modal" data-target="#modal-habilitar-empresa" style="background-color: #1fc772; color: white;">
									<i class="fa fa-fw fa-dashboard"></i> Habilitar Empresa
								</a>		
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link collpase" href="#submenuEmpresa2" data-toggle="collapse" data-target="#submenuEmpresa2" style="color: #666666;"><i class="material-icons" >dashboard</i><span>Sucursal</span></a>
					<div class="collapse" id="submenuEmpresa2" aria-expanded="false" style="background-color: #3DD96F; position: relative; bottom: 20px;">
						<ul class="flex-column nav">
							<li class="nav-item">
								<a href="#" class="submenu1" data-toggle="modal" data-target="#modal-agregar-sucursal" style="background-color: #1fc772; color: white; ">
									<i class="fa fa-fw fa-clock-o"></i> Agregar Sucursal
								</a>
							</li>
							<li class="nav-item">
								<a class="submenu1" href="#" data-toggle="modal" data-target="#modal-habilitar-sucursal" style="background-color: #1fc772; color: white;">
									<i class="fa fa-cog" aria-hidden="true"></i> Modificar Sucursal
								</a>		
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link collpase" href="#submenuEmpresa3" data-toggle="collapse" data-target="#submenuEmpresa3" style="color: #666666;"><i class="material-icons" >dashboard</i><span>Usuarios</span></a>
					<div class="collapse" id="submenuEmpresa3" aria-expanded="false" style="background-color: #3DD96F; position: relative; bottom: 20px;">
						<ul class="flex-column nav">
							<li class="nav-item">
								<a class="submenu1" href="#" data-toggle="modal" data-target="#modal-agregar-usuario"  style="background-color: #1fc772; color: white; ">
									<i class="fa fa-fw fa-clock-o"></i> Agregar Usuario
								</a>
							</li>
							<li class="nav-item">
								<a class="submenu1" href="#" data-toggle="modal" data-target="#modal-listar-usuario"   style="background-color: #1fc772; color: white;">
									<i class="fa fa-fw fa-clock-o"></i><span>Listar Usuarios</span>
								</a>		
							</li>
							<li class="nav-item">
								<a class="submenu1" href="#" data-toggle="modal" data-target="#modal-habilitar-usuario" style="background-color: #1fc772; color: white;">
									<i class="fa fa-cog" aria-hidden="true"></i> Modificar Usuario
								</a>		
							</li>
							<li class="nav-item">
								<a class="submenu1" href="#" data-toggle="modal" data-target="#modal-asignar-usuario"   style="background-color: #1fc772; color: white;">
									<i class="material-icons">dashboard</i><span style="position: relative; left: 5px;">Asignar Usuarios</span>
								</a>		
							</li>
						</ul>
					</div>
				</li>
				<!--<li class="nav-item" data-toggle="modal" data-target="#modal-agregar-sucursal" >
					<a class="nav-link" href="#" style="color: #666666;">
						<i class="material-icons">dashboard</i><span style="position: relative; left: 5px;">Agregar Sucursal</span>

					</a>					
				</li>
				<li class="nav-item">
					<a class="nav-link" style="color: #666666;" href="{{ url('buscar_usuario') }}">
						<i class="material-icons">dashboard</i><span style="position: relative; left: 5px;">Usuarios</span>

					</a>					
				</li>
				<li class="nav-item">
					<a class="nav-link" style="color: #666666;" href="{{ url('asignar_usuario') }}">
						<i class="material-icons">dashboard</i><span style="position: relative; left: 5px;">Asignar Usuarios</span>

					</a>					
				</li> -->
				<li class="nav-item"  data-toggle="modal" data-target="#modal-agregar-region">
					<a class="nav-link" style="color: #666666;" href="#">
						<i class="material-icons">dashboard</i><span style="position: relative; left: 5px;">Crear Region</span>

					</a>					
				</li>
				<li class="nav-item" data-toggle="modal" data-target="#modal-ver-dispositivos">
					<a class="nav-link" style="color: #666666;" href="#">
						<i class="material-icons">dashboard</i><span style="position: relative; left: 5px;">Dispositivos</span>

					</a>					
				</li>
				<li class="nav-item" data-toggle="modal" data-target="#modal-variable-linea">
					<a class="nav-link" style="color: #666666;" href="#">
						<i class="material-icons">dashboard</i><span style="position: relative; left: 5px;">Variables en linea</span>

					</a>					
				</li>
				<li class="nav-item" data-toggle="modal" data-target="#modal-tiempo-carga">
					<a class="nav-link" style="color: #666666;" href="#">
						<i class="material-icons">dashboard</i><span style="position: relative; left: 5px;">Tiempo de Carga</span>

					</a>					
				</li>
				<li class="nav-item" data-toggle="modal" data-target="#modal-definir-limites">
					<a class="nav-link" style="color: #666666;" href="#">
						<i class="material-icons">dashboard</i><span style="position: relative; left: 5px;">Definir Limites</span>

					</a>					
				</li>
			</ul>
		</div>
		<!-- Page Content -->
		
		<div class="aside-right " >
			<h2 class="main-heading" style="color: #1fc772;">
				<i class="material-icons medium">business_center</i>
				Dashboard
			</h2>
			<div class="container-fluid" >
				@yield('content')
			</div>
		</div>
		

		<!-- /#page-content-wrapper -->

	</div>

	
	<!-- Modal para Habilitar Empresa -->
	<!-- Modal -->
	<div class="modal fade" id="modal-habilitar-usuario" role="dialog">
		<div class="modal-dialog modal-lg">
			<!-- Modal content-->
			<div class="modal-content" style="border: none;">
				<div class="modal-header color-header-sensor centrar">
					<!-- Titulo del Modal - Header -->
					<h2 class="main-heading-session" style="font-size: 24px; color: #2bcc41;"> Habilitar/Deshabilitar Usuario</h2>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body fondo-glass">

					<!--Modal Body - Para poner lo que quiero dentro del modal-->
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="form-group">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<!--Aqui no habra form ya que solo tendra la funcion de select option, no dropdown list-->
										<select class="form-control" id="drop_down1" >
											<option hidden selected>Seleccione Usuario</option>
											@foreach($users as $user)
											<option value="{{ $user->id }}" >{{ $user->name }}</option>

											@endforeach


											<!-- Aqui despues de esta opcion predeterminada, se hara una consulta sql de todas los nombre de las empresas que hay en la misma tabla -->
										</select>



										@foreach($users as $user)
										<div class="get_started1 text-center" style="display: none;"  id="{{ $user->id }}">
											<label>¿Que quieres hacer con el usuario </label>
											<strong>{{ $user->name }}</strong>
											<label>?</label>
											<br/>
											<button class="btnn daark" data-toggle="modal" data-target="#edittUsuario{{$user->id}}" >Modificar</button>
											<!-- modal de continuacion de habilitar  -->
											<!-- modal modificar -->
											<div class="modal fade" id="edittUsuario{{$user->id}}" role="dialog" style="/* position: relative; */top: -18px;height: 402%;">
												<div class="modal-dialog modal-lg">
													<!-- Modal content-->
													<div class="modal-content" style="border: none;">
														<div class="modal-header color-header-sensor centrar">
															<!-- Titulo del Modal - Header -->
															<h2 class="main-heading-session" style="color: #2bcc41;font-size: 24px;"> Modificar Usuario</h2>
															<button type="button" class="close" data-dismiss="modal">&times;</button>
														</div>
														<div class="modal-body fondo-glass">
															<div class="row ">
																<!-- form, aqui comenzaria un form-->
																<form method="POST" action="{{ route('usuario.editar',   $user->id ) }}">
																		{{ csrf_field() }}
																		{{ method_field('PATCH') }}
																	<div class="form-group row">
																		<label for="nombre" class="col-sm-3 col-form-label">Nombre: </label>
																		<div class="col-sm-9">
																			<input class="form-control"
																			type="text"
																			name="nombre"
																			value="{{$user->nombre}}">
																		</div>
																	</div>
																	<div class="form-group row">
																		<label for="apellido" class="col-sm-3 col-form-label">Apellidos: </label>
																		<div class="col-sm-9">
																			<input class="form-control"
																			type="text"
																			name="apellido"
																			value="{{$user->apellidos}}">
																		</div>
																	</div>
																	<div class="form-group row">
																		<label for="cedula" class="col-sm-3 col-form-label">Cedula: </label>
																		<div class="col-sm-9">
																			<input class="form-control"
																			type="text"
																			name="celuda"
																			value="{{$user->cedula}}">
																		</div>
																	</div>
																	<div class="form-group row">
																		<label for="telefono" class="col-sm-3 col-form-label">Telefono: </label>
																		<div class="col-sm-9">
																			<input class="form-control"
																			type="text"
																			name="telefono"
																			value="{{$user->telefono}}">
																		</div>
																	</div>
																	<div class="form-group row">
																		<label for="email" class="col-sm-3 col-form-label">Email: </label>
																		<div class="col-sm-9">
																			<input class="form-control"
																			type="email"
																			name="email"
																			value="{{$user->email}}">
																		</div>
																	</div>
																	<div class="form-group row">
																		<label for="tipousu" class="col-sm-3 col-form-label">Tipo Usuario:</label>
																		<div class="col-sm-9">
																			<select class="form-control" name="tipousu" id="tipousu" >
																				<option hidden selected value="{{$user->id}}">{{ $user->tipo_usuario_id }}</option>
																				@foreach($tipo_user as $tipo_usu)
																				<option value="{{ $tipo_usu->id }}">{{ $tipo_usu->nombre }}</option>
																				@endforeach
																			</select>
																		</div>	
																	</div>
																	<div class="form-group row">
																		<label for="name" class="col-sm-3 col-form-label">Login: </label>
																		<div class="col-sm-9">
																			<input class="form-control"
																			type="text"
																			name="name"
																			value="{{$user->name}}">
																		</div>
																	</div>
																	<div class="form-group row">
																		<label for="password" class="col-sm-3 col-form-label">Contraseña: </label>
																		<div class="col-sm-9">
																			<input class="form-control"
																			type="password"
																			name="password"
																			value="{{$user->password}}">
																		</div>
																	</div>
																	<div class="form-group row">
																		<label for="recontra" class="col-sm-3 col-form-label">Repita Contraseña: </label>
																		<div class="col-sm-9">
																			<input class="form-control"
																			type="password"
																			name="recontra"
																			value="{{$user->password}}">
																		</div>
																	</div>

																	<div class="row">
																		<div class="col-lg-12 col-md-12 col-sm-12">
																			<div class="form-group inline">
																				<input type="checkbox" id="habilitar" name="habilitar" value="{{$user->habilitar}}" {{ $user->habilitar == 1 ? 'true' : 'false' }}>
																				<label for="habilitar">¿Deseas Habilitar El Usuario? </label>
																			</div>
																		</div>
																	</div>

																	<div class="text-center">
																		<button class="btnn daark">Modificar</button>
																	</div>
																	<br/>
																</form>
															</div>
														</div>
													</div>

												</div>
											</div>
											<!-- endregion modal modificar -->

											<button class="btnn daark" data-toggle="modal" data-target="#bloquearUsuario{{ $user->id }}">Bloquear</button>

											<!-- modal de continuacion de habilitar  -->
											<!-- modal bloquear -->
											<div class="modal fade" id="bloquearUsuario{{ $user->id }}" role="dialog" style="/* position: relative; */top: -18px;height: 252%;">
												<div class="modal-dialog modal-lg">
													<!-- Modal content-->
													<div class="modal-content" style="border: none;">
														<div class="modal-header color-header-sensor centrar">
															<!-- Titulo del Modal - Header -->
															<h2 class="main-heading-session" style="font-size: 24px; color: #2bcc41;"> Bloquear/Desbloquear Usuario</h2>
															<button type="button" class="close" data-dismiss="modal">&times;</button>
														</div>
														<div class="modal-body fondo-glass">

															<!--Modal Body - Para poner lo que quiero dentro del modal-->
															<div class="panel panel-default">
																<div class="panel-body">
																	<div class="form-group">
																		<div class="row">
																			<div class="col-sm-12 col-xs-12">

																				<button class="btnn daark" data-backdrop="false" data-dismiss="modal">Volver</button>

																				<label>El usuario <strong> {{ $user->name }}</strong>  se encuentra actualmente: </label>
																				<form method="POST" action="{{ route('usuario.bloquear', $user->id) }}">
																					{{ csrf_field() }}
																					@if($user->habilitar == 'false')
																					<strong>Deshabilitado</strong>
																					<br/>
																					<div class="text-center col-sm-3 col-md-12 col-lg-12">
																						<button class="btnn daark">Desbloquear</button>
																					</div>
																					@else
																					<strong>Habilitado</strong>
																					<br/>
																					<div class="text-center col-sm-3 col-md-12 col-lg-12">
																						<button class="btnn daark">Bloquear</button>
																					</div>
																					@endif
																				</form>


																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- endregion modal bloquear -->
											<!-- modal de continuacion de habilitar  -->


											<button class="btnn daark" data-toggle="modal" data-target="#deleteUsuario{{ $user->id }}" >Eliminar</button>

											<!-- modal eliminar -->
											<div class="modal fade" id="deleteUsuario{{ $user->id }}" role="dialog" style="/* position: relative; */top: -18px;height: 252%;">
												<div class="modal-dialog modal-lg">
													<!-- Modal content-->
													<div class="modal-content" style="border: none;">
														<div class="modal-header color-header-sensor centrar">
															<!-- Titulo del Modal - Header -->
															<h2 class="main-heading-session" style="font-size: 24px; color: #2bcc41;"> Eliminar Usuario</h2>
															<button type="button" class="close" data-dismiss="modal">&times;</button>
														</div>
														<div class="modal-body fondo-glass">

															<!--Modal Body - Para poner lo que quiero dentro del modal-->
															<div class="panel panel-default">
																<div class="panel-body">
																	<div class="form-group">
																		<div class="row">
																			<div class="col-sm-12 col-xs-12">
																				<form action="{{ route('usuario.eliminar', $user->id) }}" method="POST">
																					{{ csrf_field() }}
																					{{ method_field('DELETE') }}

																					<br/>
																					<label>¿Estas Seguro de Eliminar el Usuario: </label>
																					<strong>{{ $user->name }}</strong>
																					<label>?</label>
																					<br/><br/>

																					<button class="btnn daark" type="submit">Si</button>
																					<button class="btnn daark" data-backdrop="false" data-dismiss="modal">No</button>
																				</form>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- endregion eliminar -->
											<!-- enregion modal habilitar 3 opciones -->



										</div>
										@endforeach





									</div>

								</div>

							</div>

						</div>
					</div>


				</div>
			</div>

		</div>
	</div>
	<!-- end region modal (mensaje emergente) -->



	<!-- Modal para Agregar Clientes (Empresa) -->
	<!-- Modal -->
	<div class="modal fade" id="modal-agregar-cliente" role="dialog">
		<div class="modal-dialog modal-lg">
			<!-- Modal content-->
			<div class="modal-content" style="border: none;">
				<div class="modal-header color-header-sensor centrar">
					<!-- Titulo del Modal - Header -->
					<h2 class="main-heading-session" style="color: #2bcc41;font-size: 24px;"> Nuevo Cliente</h2>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body fondo-glass">
					<div class="row ">
						<div class="col-md-2">
							<label style="font-size: 15px;">Datos Empresa</label>
						</div>

						<div class="col-md-10">
							<!-- mensaje -->
							@if (session('exito'))
							<div class="alert alert-success">
								<span><strong>Exito</strong></span>
								<br/>
								{{ session('mensaje') }}
							</div>
							@endif
							<!-- end region mensaje -->
							<!-- form -->
							<form method="POST" action="{{ route('empresa.crear') }}">
								{{ csrf_field() }}
								<div class="form-control">
									<div class="form-group row">
										<label for="inputPassword" class="col-sm-4 col-form-label">Nombre: </label>
										<div class="col-sm-8">
											<input type="text" class="form-control"
											name="nombre" >
										</div>
									</div>

									<!-- telefono -->
									<div class="form-group row">
										<label for="telefono" class="col-sm-4">Telefono: </label>
										<div class="col-sm-8">
											<input class="form-control"
											type="number"
											name="telefono">	
										</div>

									</div>

									<!-- email -->
									<div class="form-group row">
										<label for="email" class="col-sm-4">Email: </label>
										<div class="col-sm-8">
											<input class="form-control"
											type="email"
											name="email">
										</div>

									</div>

									<!-- direccion web -->
									<div class="form-group row">
										<label for="direccion_web" class="col-sm-4">Direccion Web:</label>
										<div class="col-sm-8">
											<input class="form-control"
											type="text"
											name="direccion_web">
										</div>
									</div>

									<!-- direccion -->
									<div class="form-group row">
										<label for="direccion" class="col-sm-4">Direccion:</label>
										<div class="col-sm-8">
											<input class="form-control"
											type="text"
											name="direccion">
										</div>
									</div>
									<div class="form-group row">
										<div class="col-sm-6">
											<input type="checkbox" id="habilitar" name="habilitar" >
											<label for="habilitar">¿Deseas Habilitar La Empresa? </label>
										</div>
										<button class="btnn daark col-sm-2"
										style="position: relative; left: 140px;">Guardar</button>
									</div>
								</div>
							</form>
							<!-- end region form -->
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>
	<!-- end region modal (mensaje emergente) -->

	<!-- Modal para Habilitar Empresa -->
	<!-- Modal -->
	<div class="modal fade" id="modal-habilitar-empresa" role="dialog">
		<div class="modal-dialog modal-lg">
			<!-- Modal content-->
			<div class="modal-content" style="border: none;">
				<div class="modal-header color-header-sensor centrar">
					<!-- Titulo del Modal - Header -->
					<h2 class="main-heading-session" style="font-size: 24px; color: #2bcc41;"> Habilitar/Deshabilitar Empresas</h2>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body fondo-glass">

					<!--Modal Body - Para poner lo que quiero dentro del modal-->
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="form-group">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<!--Aqui no habra form ya que solo tendra la funcion de select option, no dropdown list-->
										<select class="form-control" id="drop_down" >
											<option hidden selected>Seleccione Empresa</option>
											@foreach($empresas as $empresa)
											<option value="{{ $empresa->id }}" >{{ $empresa->nombre }}</option>
											
											@endforeach
											
											
											<!-- Aqui despues de esta opcion predeterminada, se hara una consulta sql de todas los nombre de las empresas que hay en la misma tabla -->
										</select>
										
										

										@foreach($empresas as $empresa)
										<div class="get_started text-center" style="display:none;" id="{{ $empresa->id }}">
											<label>¿Que quieres hacer con la empresa </label>
											<strong>{{ $empresa->nombre }}</strong>
											<label>?</label>
											<br/>
											<button class="btnn daark" data-toggle="modal" data-target="#editEmpresa{{ $empresa->id }}" >Modificar</button>

											<!-- modal de continuacion de habilitar  -->
											<!-- modal modificar -->
											<div class="modal  fade" id="editEmpresa{{ $empresa->id }}" role="dialog" style="/* position: relative; */top: -18px;height: 252%;">
												<div class="modal-dialog modal-lg">
													<!-- Modal content-->
													<div class="modal-content" style="border: none;">
														<div class="modal-header color-header-sensor centrar">
															<!-- Titulo del Modal - Header -->
															<h2 class="main-heading-session" style="color: #2bcc41;font-size: 24px;"> Modificar Cliente</h2>
															<button type="button" class="close" data-dismiss="modal">&times;</button>
														</div>
														<div class="modal-body fondo-glass">
															<div class="row ">
																<div class="col-md-2">
																	<label style="font-size: 15px;">Datos Empresa</label>
																</div>

																<div class="col-md-10">
																	<!-- mensaje --> 
																	@if (session('exito'))
																	<div class="alert alert-success">
																		<span><strong>Exito</strong></span>
																		<br/>
																		{{ session('mensaje') }}
																	</div>
																	@endif
																	<!-- end region mensaje -->
																	<!-- form -->
																	<!-- Aqui tendre que poner la ruta del upgrate -->
																	<form method="POST" action="{{ route('empresa.editar',   $empresa->id ) }}">
																		{{ csrf_field() }}
																		{{ method_field('PATCH') }}
																		<div class="form-control">
																			<div class="form-group row">
																				<label for="inputPassword" class="col-sm-4 col-form-label">Nombre: </label>
																				<div class="col-sm-8">
																					<input type="text" 
																					class="form-control"
																					name="nombre" 
																					value="{{ $empresa->nombre }}" >
																				</div>
																			</div>

																			<!-- telefono -->
																			<div class="form-group row">
																				<label for="telefono" class="col-sm-4">Telefono: </label>
																				<div class="col-sm-8">
																					<input class="form-control"
																					type="number"
																					name="telefono"
																					value="{{ $empresa->telefono }}">	
																				</div>

																			</div>

																			<!-- email -->
																			<div class="form-group row">
																				<label for="email" class="col-sm-4">Email: </label>
																				<div class="col-sm-8">
																					<input class="form-control"
																					type="email"
																					name="email"
																					value="{{ $empresa->email }}">
																				</div>

																			</div>

																			<!-- direccion web -->
																			<div class="form-group row">
																				<label for="direccion_web" class="col-sm-4">Direccion Web:</label>
																				<div class="col-sm-8">
																					<input class="form-control"
																					type="text"
																					name="direccion_web"
																					value="{{ $empresa->direccion_web }}">
																				</div>
																			</div>

																			<!-- direccion -->
																			<div class="form-group row">
																				<label for="direccion" class="col-sm-4">Direccion:</label>
																				<div class="col-sm-8">
																					<input class="form-control"
																					type="text"
																					name="direccion"
																					value="{{ $empresa->direccion }}">
																				</div>
																			</div>
																			<div class="form-group row">
																				<div class="col-sm-6">
																					<input type="checkbox" id="habilitar" name="habilitar" value="{{$empresa->habilitar}}" {{ $empresa->habilitar == 1 ? 'true' : 'false' }}>
																					<label for="habilitar">¿Deseas Habilitar La Empresa? </label>
																				</div>
																				<button class="btnn daark col-sm-2"
																				style="position: relative; left: 140px;">Modificar</button>
																			</div>
																		</div>
																	</form>
																	<!-- end region form -->
																</div>
															</div>

														</div>
													</div>

												</div>
											</div>
											<!-- endregion modal modificar -->


											<button class="btnn daark" data-toggle="modal"  data-target="#bloquearEmpresa{{ $empresa->id }}" >Bloquear</button>

											<!-- modal de continuacion de habilitar  -->
											<!-- modal bloquear -->
											<div class="modal fade" id="bloquearEmpresa{{ $empresa->id }}" role="dialog" style="/* position: relative; */top: -18px;height: 252%;">
												<div class="modal-dialog modal-lg">
													<!-- Modal content-->
													<div class="modal-content" style="border: none;">
														<div class="modal-header color-header-sensor centrar">
															<!-- Titulo del Modal - Header -->
															<h2 class="main-heading-session" style="font-size: 24px; color: #2bcc41;"> Bloquear/Desbloquear Empresas</h2>
															<button type="button" class="close" data-dismiss="modal">&times;</button>
														</div>
														<div class="modal-body fondo-glass">

															<!--Modal Body - Para poner lo que quiero dentro del modal-->
															<div class="panel panel-default">
																<div class="panel-body">
																	<div class="form-group">
																		<div class="row">
																			<div class="col-sm-12 col-xs-12">

																				<label>La empresa </label>
																				<strong>{{ $empresa->nombre }}</strong>
																				<label> se encuentra actualmente: </label>

																				<!-- implementar un if aqui de 
																					$empresa->habilitar == 'false'  -->
																				<form method="POST" action="{{ route('empresa.bloquear', $empresa->id) }}">
																					{{ csrf_field() }}
																				@if($empresa->habilitar == 'false')
																					<strong>Deshabilitada</strong>
																					<br/>
																					<div class="text-center col-sm-3 col-md-12 col-lg-12">
																						<button class="btnn daark">Desbloquear</button>
																					</div>
																				@else
																					<strong>Habilitada</strong>
																					<br/>
																					<div class="text-center col-sm-3 col-md-12 col-lg-12">
																						<button class="btnn daark">Bloquear</button>
																					</div>
																				@endif
																				</form>


																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- endregion modal bloquear -->


												<button class="btnn daark" data-toggle="modal" data-target="#deleteEmpresa{{ $empresa->id }}" >Eliminar</button>


												<!-- modal de continuacion de habilitar  -->
												<!-- modal eliminar -->
												<div class="modal fade" id="deleteEmpresa{{ $empresa->id }}" role="dialog" style="/* position: relative; */top: -18px;height: 252%;">
													<div class="modal-dialog modal-lg">
														<!-- Modal content-->
														<div class="modal-content" style="border: none;">
															<div class="modal-header color-header-sensor centrar">
																<!-- Titulo del Modal - Header -->
																<h2 class="main-heading-session" style="font-size: 24px; color: #2bcc41;"> Eliminar Empresas</h2>
																<button type="button" class="close" data-dismiss="modal">&times;</button>
															</div>
															<div class="modal-body fondo-glass">

																<!--Modal Body - Para poner lo que quiero dentro del modal-->
																<div class="panel panel-default">
																	<div class="panel-body">
																		<div class="form-group">
																			<div class="row">
																				<div class="col-sm-12 col-xs-12">
																					<form action="{{ route('empresa.eliminar', $empresa->id) }}" method="POST">
																						{{ csrf_field() }}
																						{{ method_field('DELETE') }}

																						<br/>
																						<label>¿Estas Seguro de Eliminar la empresa: </label>
																						<strong>{{ $empresa->nombre }}</strong>
																						<label>?</label>
																						<br/><br/>

																						<button class="btnn daark" type="submit">Si</button>
																						<button class="btnn daark" data-backdrop="false" data-dismiss="modal">No</button>
																					</form>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- endregion eliminar -->
												<!-- enregion modal habilitar 3 opciones -->


											</div>
											@endforeach





										</div>

									</div>

								</div>

							</div>
						</div>


					</div>
				</div>

			</div>
		</div>
		<!-- end region modal (mensaje emergente) -->


		


		<!-- Modal para Agregar SUCURSAL -->
		<!-- Modal -->
		<div class="modal fade" id="modal-agregar-sucursal" role="dialog">
			<div class="modal-dialog modal-lg">
				<!-- Modal content-->
				<div class="modal-content" style="border: none;">
					<div class="modal-header color-header-sensor centrar">
						<!-- Titulo del Modal - Header -->
						<h2 class="main-heading-session" style="color: #2bcc41;font-size: 24px;"> Nuevo Sucursal</h2>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body fondo-glass">
						<form method="POST" action="{{ route('sucursal.crear') }}">
							{{ csrf_field() }}
							<div class="row div-contenedor-agregar-cliente ">
								<div class="col-md-2">
									<label>Datos Local</label>
								</div>

								<div class="col-md-10">
									<div class="form-control"  >

										<div class="form-group row">
											<label for="empresa" class="col-sm-4 col-form-label">Empresa: </label>
											<div class="col-sm-8">
												<select class="form-control" name="empresa" id="empresa" >
													<option hidden selected>Seleccione </option>
													@foreach($empresas as $empresa)
													<option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>

													@endforeach
												</select>
											</div>
										</div>

										<!-- telefono -->
										<div class="form-group row">
											<label for="region" class="col-sm-4 col-form-label">Region: </label>
											<div class="col-sm-8">
												<select class="form-control" name="region" id="region" >
													<option hidden selected>Seleccione </option>
													@foreach($regions as $region)
													<option value="{{ $region->codigo_region }}">{{ $region->nombre_region }}</option>

													@endforeach
												</select>
											</div>
										</div>

										<div class="form-group row">
											<label for="empresa" class="col-sm-4 col-form-label">Sucursal: </label>
											<div class="col-sm-8">
												<input class="form-control"
												type="text">
											</div>
										</div>
									</div>
									<br/>
								</div>

								<div class="col-md-2">
									<label>Datos Sensor</label>
								</div>

								<div class="col-md-10">
									<div class="form-control ">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Descripcion: </label>
											<div class="col-sm-8">
												<input class="form-control"
												type="text">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Serial: </label>
											<div class="col-sm-8">
												<input class="form-control"
												type="text">
											</div>
										</div>
									</div>	
								</div>
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12 text-center">
										<div class="form-group inline">
											<input type="checkbox" id="habilitar" name="habilitar">
											<label for="habilitar">¿Deseas Habilitar La Sucursal? </label>
										</div>
									</div>
								</div>
								<div class="text-center">
									<button class="btnn daark" >Guardar</button>
								</div>			
							</div>
						</form>



					</div>
				</div>
			</div>
		</div>
		<!-- end region modal (mensaje emergente) -->

		<!-- CRUD PARA SUCURSAL -->
		<!-- Modal para Modificar Sucursal -->
		<!-- Modal -->
		<div class="modal fade" id="modal-habilitar-sucursal" role="dialog">
			<div class="modal-dialog modal-lg">
				<!-- Modal content-->
				<div class="modal-content" style="border: none;">
					<div class="modal-header color-header-sensor centrar">
						<!-- Titulo del Modal - Header -->
						<h2 class="main-heading-session" style="font-size: 24px; color: #2bcc41;"> Sucursales </h2>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body fondo-glass">

						<!--Modal Body - Para poner lo que quiero dentro del modal-->
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="form-group">
									<div class="row">
										<div class="col-sm-12 col-xs-12">
											<!--Aqui puede ser una tabla o un dropdown-->
											<!--Aqui no habra form ya que solo tendra la funcion de select option, no dropdown list-->
											<select class="form-control" name="empresa" id="" >
												<option hidden selected>Seleccione Sucursal</option>
												@foreach($sucursals as $sucu)
												<option value="{{ $sucu->id }}" >{{ $sucu->sucursal }}</option>
											
												@endforeach
												<!-- Aqui despues de esta opcion predeterminada, se hara una consulta sql de todas los nombre de las empresas que hay en la misma tabla -->
											</select>

											<!--SE DEBEN HACER 3 FORMS PARA CADA FUNCION-->
										<div class="text-center ">
											
										@foreach($sucursals as $sucu)
										<div class=" text-center"  id="{{ $sucu->id }}">
											<label>¿Que quieres hacer con la empresa </label>
											<strong>{{ $sucu->sucursal }}</strong>
											<label>?</label>
											<br/>
											<button class="btnn daark" data-toggle="modal" data-target="#editSucursal{{ $sucu->id }}" >Modificar</button>

											<div class="modal fade" id="editSucursal{{ $sucu->id }}" role="dialog" style="/* position: relative; */top: -18px;height: 402%;">
												<div class="modal-dialog modal-lg">
													<!-- Modal content-->
													<div class="modal-content" style="border: none;">
														<div class="modal-header color-header-sensor centrar">
															<!-- Titulo del Modal - Header -->
															<h2 class="main-heading-session" style="color: #2bcc41;font-size: 24px;"> Nuevo Sucursal</h2>
															<button type="button" class="close" data-dismiss="modal">&times;</button>
														</div>
														<div class="modal-body fondo-glass">
															<form method="POST" action="{{ route('sucursal.editar', $sucu->id) }}">
																{{ csrf_field() }}
																{{ method_field('PATCH') }}
																<div class="row div-contenedor-agregar-cliente ">
																	<div class="col-md-2">
																		<label>Datos Local</label>
																	</div>

																	<div class="col-md-10">
																		<div class="form-control"  >

																			<div class="form-group row">
																				<label for="empresa" class="col-sm-4 col-form-label">Empresa: </label>
																				<div class="col-sm-8">
																					<select class="form-control" name="empresa" id="empresa" >
																						<option hidden selected>Seleccione </option>
																						@foreach($empresas as $empresa)
																						<option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>

																						@endforeach
																					</select>
																				</div>
																			</div>

																			<!-- telefono -->
																			<div class="form-group row">
																				<label for="region" class="col-sm-4 col-form-label">Region: </label>
																				<div class="col-sm-8">
																					<select class="form-control" name="region" id="region" >
																						<option hidden selected>Seleccione </option>
																						@foreach($regions as $region)
																						<option value="{{ $region->codigo_region }}">{{ $region->nombre_region }}</option>

																						@endforeach
																					</select>
																				</div>
																			</div>

																			<div class="form-group row">
																				<label for="empresa" class="col-sm-4 col-form-label">Sucursal: </label>
																				<div class="col-sm-8">
																					<input class="form-control"
																					type="text">
																				</div>
																			</div>
																		</div>
																		<br/>
																	</div>

																	<div class="col-md-2">
																		<label>Datos Sensor</label>
																	</div>

																	<div class="col-md-10">
																		<div class="form-control ">
																			<div class="form-group row">
																				<label class="col-sm-4 col-form-label">Descripcion: </label>
																				<div class="col-sm-8">
																					<input class="form-control"
																					type="text">
																				</div>
																			</div>
																			<div class="form-group row">
																				<label class="col-sm-4 col-form-label">Serial: </label>
																				<div class="col-sm-8">
																					<input class="form-control"
																					type="text">
																				</div>
																			</div>
																		</div>	
																	</div>
																	<div class="row">
																		<div class="col-lg-12 col-md-12 col-sm-12 text-center">
																			<div class="form-group inline">
																				<input type="checkbox" id="habilitar" name="habilitar">
																				<label for="habilitar">¿Deseas Habilitar La Sucursal? </label>
																			</div>
																		</div>
																	</div>
																	<div class="text-center">
																		<button class="btnn daark">Guardar</button>
																	</div>			
																</div>
															</form>



														</div>
													</div>
												</div>
											</div>
											<!-- end region modal (mensaje emergente) -->

											<button class="btnn daark" data-toggle="modal"  data-target="#bloquearSucursal{{ $sucu->id }}" >Bloquear</button>

											<!-- modal de continuacion de habilitar  -->
											<!-- modal bloquear -->
											<div class="modal fade" id="bloquearSucursal{{ $sucu->id }}" role="dialog" style="/* position: relative; */top: -18px;height: 252%;">
												<div class="modal-dialog modal-lg">
													<!-- Modal content-->
													<div class="modal-content" style="border: none;">
														<div class="modal-header color-header-sensor centrar">
															<!-- Titulo del Modal - Header -->
															<h2 class="main-heading-session" style="font-size: 24px; color: #2bcc41;"> Bloquear/Desbloquear Sucursal</h2>
															<button type="button" class="close" data-dismiss="modal">&times;</button>
														</div>
														<div class="modal-body fondo-glass">

															<!--Modal Body - Para poner lo que quiero dentro del modal-->
															<div class="panel panel-default">
																<div class="panel-body">
																	<div class="form-group">
																		<div class="row">
																			<div class="col-sm-12 col-xs-12">

																				<label>La Sucursal </label>
																				<strong>{{ $sucu->sucursal }}</strong>
																				<label> se encuentra actualmente: </label>

																				<!-- implementar un if aqui de 
																					$empresa->habilitar == 'false'  -->
																				<form method="POST" action="{{ route('sucursal.bloquear', $sucu->id) }}">
																					{{ csrf_field() }}
																				@if($sucu->habilitar == 'false')
																					<strong>Deshabilitada</strong>
																					<br/>
																					<div class="text-center col-sm-3 col-md-12 col-lg-12">
																						<button class="btnn daark">Desbloquear</button>
																					</div>
																				@else
																					<strong>Habilitada</strong>
																					<br/>
																					<div class="text-center col-sm-3 col-md-12 col-lg-12">
																						<button class="btnn daark">Bloquear</button>
																					</div>
																				@endif
																				</form>


																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- endregion modal bloquear -->


												<button class="btnn daark" data-toggle="modal" data-target="#deleteSucursal{{ $sucu->id }}" >Eliminar</button>


												<!-- modal de continuacion de habilitar  -->
												<!-- modal eliminar -->
												<div class="modal fade" id="deleteSucursal{{ $sucu->id }}" role="dialog" style="/* position: relative; */top: -18px;height: 252%;">
													<div class="modal-dialog modal-lg">
														<!-- Modal content-->
														<div class="modal-content" style="border: none;">
															<div class="modal-header color-header-sensor centrar">
																<!-- Titulo del Modal - Header -->
																<h2 class="main-heading-session" style="font-size: 24px; color: #2bcc41;"> Eliminar Empresas</h2>
																<button type="button" class="close" data-dismiss="modal">&times;</button>
															</div>
															<div class="modal-body fondo-glass">

																<!--Modal Body - Para poner lo que quiero dentro del modal-->
																<div class="panel panel-default">
																	<div class="panel-body">
																		<div class="form-group">
																			<div class="row">
																				<div class="col-sm-12 col-xs-12">
																					<form action="{{ route('empresa.eliminar', $sucu->id) }}" method="POST">
																						{{ csrf_field() }}
																						{{ method_field('DELETE') }}

																						<br/>
																						<label>¿Estas Seguro de Eliminar la Sucursal: </label>
																						<strong>{{ $sucu->sucursal }}</strong>
																						<label>?</label>
																						<br/><br/>

																						<button class="btnn daark" type="submit">Si</button>
																						<button class="btnn daark" data-backdrop="false" data-dismiss="modal">No</button>
																					</form>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- endregion eliminar -->
												<!-- enregion modal habilitar 3 opciones -->


											</div>
											@endforeach


										</div>


										</div>
										
									</div>

								</div>

							</div>
						</div>


					</div>
				</div>

			</div>
		</div>
		<!-- end region modal (mensaje emergente) -->
		






		<!-- Modal para Nuevo Usuarios -->
		<!-- Modal -->
		<div class="modal fade" id="modal-agregar-usuario" role="dialog">
			<div class="modal-dialog modal-lg">
				<!-- Modal content-->
				<div class="modal-content" style="border: none;">
					<div class="modal-header color-header-sensor centrar">
						<!-- Titulo del Modal - Header --> 
						<h3 class="main-heading-session" style="font-size: 24px; color: #2bcc41;"> Usuarios </h3>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body fondo-glass">

						<!--Modal Body - Para poner lo que quiero dentro del modal-->
						<div class="text-center"> <!-- Para centrar todo dentro del div -->

							<div class="panel panel-default">
								<div class="panel-body">
									<form method="POST" action="{{ route('usuario.crear') }}">
										{{ csrf_field() }}
										<!-- form, aqui comenzaria un form-->
										<div class="form-group row">
											<label for="nombre" class="col-sm-3 col-form-label">Nombre: </label>
											<div class="col-sm-9">
												<input class="form-control"
												type="text"
												name="nombre">
											</div>
										</div>
										<div class="form-group row">
											<label for="apellido" class="col-sm-3 col-form-label">Apellidos: </label>
											<div class="col-sm-9">
												<input class="form-control"
												type="text"
												name="apellido">
											</div>
										</div>
										<div class="form-group row">
											<label for="cedula" class="col-sm-3 col-form-label">Cedula: </label>
											<div class="col-sm-9">
												<input class="form-control"
												type="text"
												name="celuda">
											</div>
										</div>
										<div class="form-group row">
											<label for="telefono" class="col-sm-3 col-form-label">Telefono: </label>
											<div class="col-sm-9">
												<input class="form-control"
												type="text"
												name="telefono">
											</div>
										</div>
										<div class="form-group row">
											<label for="email" class="col-sm-3 col-form-label">Email: </label>
											<div class="col-sm-9">
												<input class="form-control"
												type="email"
												name="email">
											</div>
										</div>
										<div class="form-group row">
											<label for="tipousu" class="col-sm-3 col-form-label">Tipo Usuario:</label>
											<div class="col-sm-9">
												<select class="form-control" name="tipousu" id="tipousu" >
													<option hidden selected> Seleccione Tipo de Usuario </option>
													@foreach($tipo_user as $tipo_usu)
														<option value="{{ $tipo_usu->id }}">{{ $tipo_usu->nombre }}</option>
													@endforeach
												</select>
											</div>	
										</div>
										<div class="form-group row">
											<label for="login" class="col-sm-3 col-form-label">Login: </label>
											<div class="col-sm-9">
												<input class="form-control"
												type="text"
												name="login">
											</div>
										</div>
										<div class="form-group row">
											<label for="contra" class="col-sm-3 col-form-label">Contraseña: </label>
											<div class="col-sm-9">
												<input class="form-control"
												type="password"
												name="contra">
											</div>
										</div>
										<!--<div class="form-group row">
											<label for="recontra" class="col-sm-3 col-form-label">Repita Contraseña: </label>
											<div class="col-sm-9">
												<input class="form-control"
												type="password"
												name="recontra">
											</div>
										</div> -->

										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group inline">
													<input type="checkbox" id="habilitar" name="habilitar" >
													<label for="habilitar">¿Deseas Habilitar El Usuario? </label>
												</div>
											</div>
										</div>

										<div class="text-center">
											<button class="btnn daark" type="submit">Registrar</button>
										</div>
										<br/>

									</form>
									<!-- end form -->

								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- end region modal (mensaje emergente) -->

		<!-- Modal para Modificar Usuario -->
		<!-- Modal -->
		<div class="modal fade" id="modal-asignar-usuario" role="dialog">
			<div class="modal-dialog modal-lg">
				<!-- Modal content-->
				<div class="modal-content" style="border: none;">
					<div class="modal-header color-header-sensor centrar">
						<!-- Titulo del Modal - Header -->
						<h2 class="main-heading-session" style="font-size: 24px; color: #2bcc41;"> Asignar Usuario</h2>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body fondo-glass">

						<!--Modal Body - Para poner lo que quiero dentro del modal-->
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12">
										<!-- form -->

										<div class="form-group row ">
											<label for="sucursal" class="col-sm-4 col-form-label">Usuario: </label>
											<div class="col-sm-8">
												<select class="form-control" name="usuario" id="usuario" >
													<option hidden selected>Select Usuario</option>
													@foreach($users as $user)
													<option value="{{ $user->id }}">{{ $user->name }}</option>

													@endforeach
												</select>
											</div>	
										</div>


										<div class="form-group row">
											<label for="sucursal" class="col-sm-4 col-form-label">Tipo de Cuenta: </label>
											<div class="col-sm-8">
												<select class="form-control" name="tipo_usuario" id="tipo_usuario" >
													<option hidden selected>
														Select Tipo de Usuario
													</option>
												</select>
											</div>	
										</div>
										<div class="form-group row">
											<label for="sucursal" class="col-sm-4 col-form-label">Seleccione Empresa: </label>
											<div class="col-sm-8">
												<select class="form-control" name="empresa" id="empresa" >
													<option hidden selected>
													</option>
												</select>
											</div>	
										</div>
										<div class="form-group row">
											<label for="sucursal" class="col-sm-4 col-form-label">Indique Región: </label>
											<div class="col-sm-8">
												<select class="form-control" name="region" id="region" >
													<option hidden selected>

													</option>
												</select>
											</div>	
										</div>
										<div class="form-group row">
											<label for="sucursal" class="col-sm-4 col-form-label">Asignar Sucursal: </label>
											<div class="col-sm-8">
												<select class="form-control" name="sucursal" id="sucursal" >
													<option hidden selected>
													</option>
												</select>
											</div>	
										</div>
										<div class="text-center">
											<button class="btnn daark">Guardar</button>
										</div>
										<!-- end region form -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end region modal (mensaje emergente) -->


		<!-- Modal para Listar Usuario -->
		<!-- Modal -->
		<div class="modal fade" id="modal-listar-usuario" role="dialog">
			<div class="modal-dialog modal-xl">
				<!-- Modal content-->
				<div class="modal-content" style="border: none;">
					<div class="modal-header color-header-sensor centrar">
						<!-- Titulo del Modal - Header -->
						<h2 class="main-heading-session" style="font-size: 24px; color: #2bcc41;"> Buscar Usuario</h2>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body fondo-glass">

						<!--Modal Body - Para poner lo que quiero dentro del modal-->
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="form-group">
									<div class="row">
										<div class="col-lg-5 col-md-12 col-sm-12">
											<div class="input-group rounded">
												<input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
												aria-describedby="search-addon" />
												<span class="input-group-text border-1" id="search-addon">
													<i class="material-icons">search</i>
												</span>
											</div>
										</div>

									</div>


									<div class="col-lg-12 col-md-12 col-sm-12" id="contenedor_user">
										<div class="row">
											<div class="form-control">
												<div class="widgets">
													<table class="table table-striped">
														<thead>
															<th></th>
															<th>Login</th>
															<th>Tipo</th>
															<th>Nombre y Apellidos</th>
															<th>Email</th>
															<th>Registro</th>
															<th>Ultima Visita</th>
														
															
														</thead>
														<tbody>
															@foreach($users as $user)
															<tr>
																<td>{{ $user->id }}</td>
																<td>{{ $user->name }}</td>
																<td>{{ $user->tipo_usuario_id }}</td>
																<td>{{ $user->nombre}} {{$user->apellidos }}</td>
																<td>{{ $user->email }}</td>
																<td>{{ $user->created_at }}</td>
																<td>{{ $user->updated_at }}</td>
																
																	
																
															</tr>
															@endforeach
														</tbody>
													</table>

												</div>
											</div>
										</div>
									</div>



								</div>

							</div>

						</div>
					</div>


				</div>
			</div>

		</div>

		<!-- end region modal (mensaje emergente) -->



		<!-- Modal para crear regiones -->
		<!-- Modal -->
		<div class="modal fade" id="modal-agregar-region" role="dialog">
			<div class="modal-dialog modal-full">
				<!-- Modal content-->
				<div class="modal-content" style="border: none;">
					<div class="modal-header color-header-sensor centrar">
						<!-- Titulo del Modal - Header -->
						<h3 class="main-heading-session" style="font-size: 24px; color: #2bcc41;"> Nueva Region</h3>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body fondo-glass">

						<!--Modal Body - Para poner lo que quiero dentro del modal-->
						<div class="text-center"> <!-- Para centrar todo dentro del div -->

							<div class="panel panel-default">
								<div class="panel-body">
									<!-- form, aqui comenzaria un form-->
									<form method="POST" action="{{ route('region.crear') }}">
										{{ csrf_field() }}
										<div class="form-group row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-group">
													<input class="form-control" 
													type="text" 
													id="codigo_region"
													name="codigo_region" 
													placeholder="Codigo de la region">
												</div>
												<div class="form-group">
													<input class="form-control" 
													type="text"
													id="nombre_region" 
													name="nombre_region" 
													placeholder="Nombre de la region">
												</div>
												<div class="form-group">
													<input class="form-control" 
													type="text"
													id="pais" 
													name="pais" 
													placeholder="Nombre del pais">
												</div>		
											</div>
										</div>
										<div class="text-center">
											<button class="btnn daark">Guardar</button>
										</div>
									</form>
									<!-- end form -->
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- end region modal (mensaje emergente) -->



		<!-- Modal para visualizar y crear dispositivos -->
		<!-- Modal -->

		<div class="modal fade" id="modal-ver-dispositivos" >
			<div class="modal-dialog modal-xl">
				<div class="modal-content" style="border: none;">
					<div class="modal-header">
						<h2 class="main-heading-session" style="font-size: 24px; color: #2bcc41;"> Dispositivos</h2>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">         
							<i class="material-icons close">
								close
							</i>
						</button>
					</div>
					<div class="modal-body card-block">
						<div class="panel1">
							<div class="card-block">
								<div class="row">
									<div class="col-12 col-xs-12"><h5 class="main-heading-normal" style="color: #1fc772;">Registrados</h5></div>
									<div class="col-12 main-heading-title text-right">
										<a href="#" data-toggle="modal" data-target="#modal-asignar-dispositivo" style="color: #1fc772;">Agregar Nuevo a sucursal</a>
										<!-- creo que se me ocurrio como hacerlo, primero adjuntarle un data-toggle y data-target para adjuntarlo a un nuevo modal, tambien crear otro modal aparte con esta referencia para que se habra -->
									</div>
								</div>

								<div class="row">
									<div class="widgets">
										<div class="widget">
											<table class="table" cellpadding="0" cellspacing="0" border="0" width="100%" style="text-align: center; font-size: 12px;">
												<thead>
													<tr >
														<th style="text-align: center;">Empresa</th>
														<th style="text-align: center;">Sucursal</th>
														<th style="text-align: center;">Serial</th>
													</tr>
												</thead>
												<tbody>
													<!-- for para lo que se muestra -->
													<tr>
														<td scope="col">&nbsp;</td>
														<td scope="col">&nbsp;</td>
														<td scope="col">&nbsp;</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>


							</div>

						</div>
					</div>
				</div>
			</div>	
		</div>

		<!-- end region modal (mensaje emergente) -->

		<!-- Modal dentro de otro en un <a> de "Asignar nuevo dispositivo" -->
			<!-- Modal -->

			<div class="modal fade" id="modal-asignar-dispositivo" role="dialog">
				<div class="modal-dialog modal-xl">
					<!-- Modal content-->
					<div class="modal-content" style="border: none;">
						<div class="modal-header color-header-sensor centrar">
							<!-- Titulo del Modal - Header -->
							<h2 class="main-heading-session" style="font-size: 24px; color: #2bcc41;"> Dispositivos</h2>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body fondo-glass">
							<!--Modal Body - Para poner lo que quiero dentro del modal-->
							<div class="text-center"> <!-- Para centrar todo dentro del div -->
								<div class="panel panel-default">

									<br/>
									<div class="row">
										<div class="col-12">
											<h4 class="text-center" style="color: #1fc772;">Asignar Dispositivo</h4>
										</div>
										<div class="col-6 left-btn" style=" position: relative; right: 190px;" >
											<button class="btnn daark" data-backdrop="false" data-dismiss="modal" style=" position: relative; right: 220px;">Volver</button>
										</div>
									</div>
									<!-- data-backdrop="false" data-mdismiss="modal" me regresa al modal anterior -->
									<div class="panel-body">
										<div class="form-group row">
											<div class="col-md-9 text-center">
												<!--Aqui no habra form ya que solo tendra la funcion de select option, no dropdown list-->
												<br/>
												<div class="form-group row">
													<label for="empresa" class="col-sm-4 col-form-label">Seleccione Empresa</label>
													<div class="col-sm-8">
														<select class="form-control" name="empresa" id="empresa" >
															<option hidden selected>	Seleccione Empresa</option>
															@foreach($empresas as $empresa)
															<option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>

															@endforeach

														</select>
													</div>	
												</div>

												<div class="form-group row">
													<label for="sucursal" class="col-sm-4 col-form-label">Asignar Sucursal</label>
													<div class="col-sm-8">
														<select class="form-control" name="empresa" id="empresa" >
															<option hidden selected>

															</option>

														</select>
													</div>	
												</div>
												<div class="form-group row">
													<label for="empresa" class="col-sm-4 col-form-label">Serial</label>
													<div class="col-sm-8">
														<input type="text" class="form-control"
														placeholder="Serial del nuevo dispositivo">
													</div>	
												</div>
											</div>

										</div>
										<div class="text-center">
											<button class="btnn daark">Asignar</button>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- end region modal (mensaje emergente) -->


			<!-- Modal para Variable en linea -->
			<!-- Modal -->
			<div class="modal fade" id="modal-variable-linea" role="dialog">
				<div class="modal-dialog modal-xl">
					<!-- Modal content-->
					<div class="modal-content" style="border: none;">
						<div class="modal-header color-header-sensor centrar">
							<!-- Titulo del Modal - Header -->
							<h2 class="main-heading-session" style="font-size: 24px; color: #2bcc41;"> Detalle Sensor</h2>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body fondo-glass">

							<!--Modal Body - Para poner lo que quiero dentro del modal-->
							<div class="container-fluid"> <!-- Para centrar todo dentro del div -->

								<div class="panel panel-default">
									<div class="panel-body">
										<div class="row">
											<div class="col-lg-4 col-md-12 col-sm-12">
												<div class="form-group row">
													<label for="empresa" class="col-sm-4 col-form-label">Empresa</label>
													<div class="col-sm-8">
														<select class="form-control" name="empresa" id="empresa" >
															<option hidden selected>	Select Option</option>
															@foreach($empresas as $empresa)
															<option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>

															@endforeach

														</select>
													</div>	
												</div>
											</div>
											<div class="col-lg-4 col-md-12 col-sm-12">
												<div class="form-group row">
													<label for="sucursal" class="col-sm-4 col-form-label">Sucursal</label>
													<div class="col-sm-8">
														<select class="form-control" name="sucursal" id="sucursal" >
															<option hidden selected>	Select Option</option>

														</select>
													</div>	
												</div>
											</div>
											<div class="col-lg-4 col-md-12 col-sm-12">
												<div class="form-group row">
													<label for="sucursal" class="col-sm-4 col-form-label">Grupo</label>
													<div class="col-sm-8">
														<select class="form-control" name="grupo" id="grupo" >
															<option hidden selected>	Select Option</option>
														</select>
													</div>	
												</div>
											</div>

										</div>
									</div>

								</div>
							</div>

						</div>
					</div>
				</div>

			</div>

			<!-- end region modal (mensaje emergente) -->



			<!-- Modal para Tiempo de Carga -->
			<!-- Modal -->
			<div class="modal fade" id="modal-tiempo-carga" role="dialog">
				<div class="modal-dialog modal-md">
					<!-- Modal content-->
					<div class="modal-content" style="border: none;">
						<div class="modal-header color-header-sensor centrar">
							<!-- Titulo del Modal - Header -->
							<h2 class="main-heading-session" style="font-size: 24px; color: #2bcc41;"> Resfrescar Sensores</h2>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body fondo-glass">
							<div class="alert alert-success" style="background-color: #d4edda;">
								<a  class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<strong><span class="icon-info3"></span> Configuración actual:</strong><br>
								Actualización automática activada,<br/>
								Tiempo de carga: 60 Segundos.

								<p class="alert-message"></p>
							</div>
							<!--Modal Body - Para poner lo que quiero dentro del modal-->
							<div class="text-center"> <!-- Para centrar todo dentro del div -->

								<div class="panel panel-default">
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-control">
													<label style="color: #1fc772;">Actualizar Automáticamente</label>
													<div class="form-group">
														<!-- form radio -->
														<div class="row">
															<div class="col-lg-6 col-md-12 col-sm-12">
																<input type="radio" id="si" name="Tiempo" value="si" checked>
																<label>Si</label>	
															</div>
															<div class="col-lg-6 col-md-12 col-sm-12">
																<input type="radio" id="no" name="Tiempo" value="no" >
																<label>No</label>
															</div>

														</div>
													</div>

													<div class="form-group row">
														<label for="tiempo" class="col-sm-4 col-form-label">Tiempo</label>
														<div class="col-sm-8">
															<select class="form-control" id="Tiempo">
																<option hidden selected>Seleccione</option>
																<option>30 segundos</option>
																<option>1 minutos</option>
																<option>2 minutos</option>
																<option>3 minutos</option>
																<option>4 minutos</option>
																<option>5 minutos</option>
																<option>10 minutos</option>
																<option>15 minutos</option>
																<option>20 minutos</option>
															</select>
														</div>	
													</div>
												</div>
												<br/>
												<button class="btnn daark">Guardar</button>

											</div>

										</div>
									</div>

								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- end region modal (mensaje emergente) -->


			<!-- Modal para Definir Limites -->
			<!-- Modal -->
			<div class="modal fade" id="modal-definir-limites" role="dialog">
				<div class="modal-dialog modal-xl">
					<!-- Modal content-->
					<div class="modal-content" style="border: none;">
						<div class="modal-header color-header-sensor centrar">
							<!-- Titulo del Modal - Header -->
							<h2 class="main-heading-session" style="font-size: 24px; color: #2bcc41;"> Límites</h2>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body fondo-glass">

							<!--Modal Body - Para poner lo que quiero dentro del modal-->
							<div class="text-center"> <!-- Para centrar todo dentro del div -->

								<div class="panel panel-default">
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="col-1 left">
													<a href="#" data-toggle="modal" data-target="#modal-crear-alerta" style="color: #1fc772;"><strong>Crear Alerta</strong></a>
												</div>
												<!-- form -->
												<br/>
												<div class="row">
													<div class="col-lg-3 col-md-12 col-sm-12">
														<div class="form-group row">
															<label for="sucursal" class="col-sm-4 col-form-label" style="color: #1fc772;">Empresa</label>
															<div class="col-sm-8">
																<select class="form-control" name="empresa" id="empresa" >
																	<option hidden selected>	Select Option</option>
																	@foreach($empresas as $empresa)
																	<option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>

																	@endforeach


																</select>
															</div>	
														</div>
													</div>
													<div class="col-lg-3 col-md-12 col-sm-12">
														<div class="form-group row">
															<label for="sucursal" class="col-sm-4 col-form-label" style="color: #1fc772;">Sucursal</label>
															<div class="col-sm-8">
																<select class="form-control" name="sucursal" id="sucursal" >
																	<option hidden selected>	Select Option</option>
																</select>
															</div>	
														</div>	
													</div>
													<div class="col-lg-3 col-md-12 col-sm-12">
														<div class="form-group row">
															<label for="grupo" class="col-sm-4 col-form-label" style="color: #1fc772;">Grupo</label>
															<div class="col-sm-8">
																<select class="form-control" name="grupo" id="grupo" >
																	<option hidden selected>	Select Option</option>
																</select>
															</div>	
														</div>
													</div>
													<div class="col-lg-3 col-md-12 col-sm-12">
														<div class="form-group row">
															<label for="sucursal" class="col-sm-4 col-form-label" style="color: #1fc772;">Variable</label>
															<div class="col-sm-8">
																<select class="form-control" name="variable" id="variable" >
																	<option hidden selected>	Select Option</option>
																</select>
															</div>	
														</div>	
													</div>
												</div>






												<!-- end region form -->
											</div>

											<div class="col-sm-12 col-xs-12">
												<table  class="table" style="text-align: center; font-size: 12px;">

													<thead>
														<tr>
															<th style="text-align: center;">Empresa</th>
															<th style="text-align: center;">Sucursal</th>
															<th style="text-align: center;">Descripcion</th>
															<th style="text-align: center;">Lím. Inferior</th>
															<th style="text-align: center;">Lím. Superior</th>
															<th style="text-align: center;">Toler. Lím/Inf(Crítico)</th>
															<th style="text-align: center;">Toler. Lím/Sup(Crítico)</th>
															<th style="text-align: center;">Permanencia. (min)</th>
															<th style="text-align: center;">Inicio</th>
															<th style="text-align: center;">Fin</th>
															<th style="text-align: center;">Recurrencia Notificaciones</th>
															<th style="text-align: center;">Opciones</th>

														</tr>
													</thead>
													<tbody>
														<!-- for para lo que se muestra -->
														<tr>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>

									</div>
								</div>

							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- end region modal (mensaje emergente) -->

			<!-- Modal dentro de otro en un <a> de "Crear Alerta" -->
				<!-- Modal -->
				<div class="modal fade " id="modal-crear-alerta" >
					<div class="modal-dialog modal-xl" >
						<div class="modal-content"  style="border: none;">
							<div class="modal-header color-header-sensor centrar">
								<h2 class="main-heading-session" style="font-size: 24px; color: #2bcc41;"> Limites</h2>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true" class="icon-circle-with-cross texto-blanco" ></span>
									<i class="material-icons close">close</i>
								</button>
							</div>
							<div class="modal-body fondo-glass">
								<div class="row">
									<div class="col-12 text-center">
										<h4 class="main-heading-session" style="font-size: 24px; color: #2bcc41;">Nueva Alerta</h4>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12">
										<div class="form-group inline">
											<button class="btnn daark " data-backdrop="false" data-dismiss="modal">Volver</button>
											<br/><br/>
											<div class="">
												<div class="row">
													<div class="col-lg-4 col-md-12 col-sm-12">
														<div class="form-group inline">
															<label>Empresa :</label>
															<select class="form-control" id="empresa">
																<option hidden selected readonly>Seleccione</option>
																@foreach($empresas as $empresa)
																<option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>

																@endforeach

															</select>
														</div>
													</div>

													<div class="col-lg-4 col-md-12 col-sm-12">
														<div class="form-group inline">
															<label>Sucursal :</label>
															<select class="form-control" id="sucursal">
																<option hidden selected readonly></option>
															</select>
														</div>
													</div>

													<div class="col-lg-4 col-md-12 col-sm-12">
														<div class="form-group inline">
															<label>Tipo Medición :</label>
															<select class="form-control" id="tipo_medicion">
																<option hidden selected readonly></option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-4 col-md-12 col-sm-12">
														<div class="form-group inline">
															<label>Lím. Mín :</label>
															<input class="form-control" 
															type="text" 
															name="lim_min" 
															placeholder="n/a">
														</div>
													</div>
													<div class="col-lg-4 col-md-12 col-sm-12">
														<div class="form-group inline">
															<label>Toler. Lím/Mín (Crítico) :</label>
															<input class="form-control" 
															type="text" 
															name="toler_lim_min" 
															placeholder="0">
														</div>
													</div>
													<div class="col-lg-4 col-md-12 col-sm-12">
														<div class="form-group inline">
															<label>Lím.Máx :</label>
															<input class="form-control" 
															type="text" 
															name="lim_max" 
															placeholder="0">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-4 col-md-12 col-sm-12">
														<div class="form-group inline">
															<label>Toler. Lím/Máx (Crítico) :</label>
															<input class="form-control" 
															type="text" 
															name="toler_lim_max" 
															placeholder="0">
														</div>
													</div>
													<div class="col-lg-4 col-md-12 col-sm-12">
														<div class="form-group inline">
															<label>Permanencia. (min) :</label>
															<input class="form-control" 
															type="text" 
															name="permanencia" 
															placeholder="Minutos">
														</div>
													</div>
													<div class="col-lg-4 col-md-12 col-sm-12">
														<div class="form-group inline">
															<label>Recurrencia Notificaciones :</label>
															<select class="form-control" id="notificacion">
																<option value="10">10 minutos</option>
																<option value="15">15 minutos</option>
																<option value="30">30 minutos</option>
																<option value="45">45 minutos</option>
																<option value="60">60 minutos</option>
															</select>
														</div>
													</div>
												</div>


												<div class="row">
													<div class="col-lg-4 col-md-12 col-sm-12">
														<div class="form-group inline">
															<label>Descripción :</label>
															<input class="form-control" 
															type="text" 
															name="descripcion" 
															placeholder="Nombre o descripcion de la alarma">
														</div>
													</div>
													<div class="col-lg-4 col-md-12 col-sm-12">
														<div class="form-group inline">
															<label>Inicio :</label>
															<input class="form-control" 
															type="text" 
															name="inicio" 
															placeholder="00:00:00">
														</div>
													</div>
													<div class="col-lg-4 col-md-12 col-sm-12">
														<div class="form-group inline">
															<label>Fin :</label>
															<input class="form-control" 
															type="text" 
															name="fin" 
															placeholder="23:59:59">
														</div>
													</div>
												</div>

												<!-- input check -->
												<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12">
														<div class="form-group inline">
															<input type="checkbox" id="before" name="before">
															<label for="before">La hora de inicio es del día anterior?</label>
														</div>
													</div>
												</div>
												<!-- end region input check -->

												<div class="text-center">
													<button class="btnn daark">Guardar</button>
												</div>
												<br/>
												<strong>Nota: la Toler. Min/Prev y Toler. Min/Crit deben ser negativas o 0 para restarlas a al limite minimo y obtener la tolerancia correcta.</strong>
											</div>
										</div>
									</div>
								</div>



							</div>
						</div>
					</div>
				</div>



				<!-- end region modal -->



				<!-- modal cerrar sesion -->
				<!-- modal -->
				<div class="modal fade" id="modal_cerrar_sesion" >
					<div class="modal-dialog ">
						<div class="modal-content" style="flex-direction: column;">
							<div class="modal-header color-header-modal">
								<h2 class="main-heading-session" style="font-size: 24px; color: #2bcc41;"> Salir</h2>
							</div>
							<div class="modal-body fondo-glass">
								<p><span class="icon-arrow-with-circle-right color-icono"></span> Realmente desea cerrar sesion?</p>

								<div align="right">
									<form method="POST" action="{{ route('logout') }}">
										{{ csrf_field() }}
										<button class="btnn daark" style="margin-bottom: 20px; color: #fff;">Si</button>
										<button class="btnn daark" style="margin-bottom: 20px; color: #fff;" data-dismiss="modal" aria-hidden=true>No</button>

									</form>
									<!---->

								</div>
							</div>
						</div>
					</div>
				</div>	




				<!-- Bootstrap core JavaScript -->
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
				<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

				<script src="app.js" charset="utf-8"></script>

				<!-- Menu Toggle Script -->
				<script> 
					$("#menu-toggle").click(function(e) {
						e.preventDefault();
						$("#wrapper").toggleClass("toggled");
					});

				</script>
				<!-- para Empresa -->
				<script>
					$(function() {
						$('#drop_down').change(function(){
							$('.get_started').hide();
							$('#' + $(this).val()).show();
					});
				});
				
				</script>
				<!-- Para usuario -->
				<script>
					$(function() {
						$('#drop_down1').change(function(){
							$('.get_started1').hide();
							$('#' + $(this).val()).show();
					});
				});
				
				</script>
				<!-- para Sucursal -->
				<!--<script>
					$(function() {
						$('#drop_down2').change(function(){
							$('.get_started2').hide();
							$('#' + $(this).val()).show();
					});
				});
				
				</script> -->

				
</body>

</html>