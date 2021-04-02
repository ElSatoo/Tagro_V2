@extends('layouts.app')

@section('content')

	<div class="row">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h1 class="panel-title"> Registro de Usuario </h1>
				
			</div>
			<div class="panel-body">
				<form method="POST" >
					{{ csrf_field() }}

					<!-- Para Email -->
						<label for="email">Email</label>
						<input class="form-control"
							 type="email" 
							 name="email" 
							 placeholder="Ingresa tu Email">		
					</div>
					<!-- Para Password -->
						<label for="password">Contraseña</label>
						<input class="form-control"
							 type="password" 
							 name="password"
							 placeholder="Ingresa tu Password">
					</div>
					<button class="btn btn-primary btn-block">Registrarse</button>
				</form>
				<br/>
				
			</div>
		</div>
	</div>



@endsection