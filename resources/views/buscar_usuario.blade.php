@extends('layouts.base')
@section('style')

<style>
	.row {
		display: -ms-flexbox;
		display: flex;
		-ms-flex-wrap: wrap;
		flex-wrap: wrap;
		margin-right: -15px;
		margin-left: -15px;
	}	
</style>
@endsection
@section('content')
<!-- Pagina para crear  -->

<div class="row">
	<div class="col-lg-6 col-md-12 col-sm-12" >
		<div class="form-group inline">
			<button class="btnn successe" data-toggle="modal" data-target="#modal-agregar-usuario" >
				<i class="material-icons">person_add</i> 
				Nuevo
			</button>		
		</div>

	</div>
	<!-- Para buscar como hacer que un input busque directamente por un table busca por la siguiente pagina -->
	<!-- https://www.w3schools.com/howto/howto_js_filter_table.asp  -->
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
						<th>Nombre</th>
						<th>Email</th>
						<th>Registro</th>
					</thead>
					<tbody>
						@foreach($users as $user)
						<tr>
							<td>{{ $user->id }}</td>
							<td>{{ $user->name }}</td>
							<td>{{ $user->email }}</td>
							<td>{{ $user->created_at }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				
			</div>
		</div>
	</div>
</div>

<!-- Modal para Nuevo Usuarios -->
<!-- Modal -->
<div class="modal fade" id="modal-agregar-usuario" role="dialog">
	<div class="modal-dialog modal-lg">
		<!-- Modal content-->
		<div class="modal-content" style="border: none;">
			<div class="modal-header color-header-sensor centrar">
				<!-- Titulo del Modal - Header -->
				<h3 class="main-heading-session" style="font-size: 24px; color: #2bcc41;"> Nueva Usuario</h3>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body fondo-glass">

				<!--Modal Body - Para poner lo que quiero dentro del modal-->
				<div class="text-center"> <!-- Para centrar todo dentro del div -->

					<div class="panel panel-default">
						<div class="panel-body">
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
										<option hidden selected>	Seleccione Tipo de Usuario</option>
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
							<div class="form-group row">
								<label for="recontra" class="col-sm-3 col-form-label">Repita Contraseña: </label>
								<div class="col-sm-9">
									<input class="form-control"
									type="password"
									name="recontra">
								</div>
							</div>


							<div class="text-center">
								<button class="btnn daark">Registrar</button>
							</div>

							<!-- end form -->

						</div>
					</div>

				</div>
			</div>
		</div>

	</div>
</div>
<!-- end region modal (mensaje emergente) -->

@endsection