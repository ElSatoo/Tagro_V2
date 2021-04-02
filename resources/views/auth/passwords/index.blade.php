@extends('layouts.app')

@section('content')
	
	<div class="row">
		<h1>Listado <a href="{{ url('usuarios.create') }}"><button type="button" class="btn btn-success float-right">CREAR Usuarios En la bbdd</button></a> </h1>
	</div>
	<table>
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Nombre</th>
				<th scope="col">Email</th>
			</tr>
		</thead>
		<tbody>
		@foreach($user as $user)
			<tr>
				<th scope="row">{{ $user->id }}</th>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
			</tr>
		@endforeach
		</tbody>
		

	</table>


@endsection