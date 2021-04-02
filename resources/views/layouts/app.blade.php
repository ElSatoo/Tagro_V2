<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trackitagro</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<style>
		/*Para los botones que se seleccionan y se cambia de color blanco*/
		.btnn {
			display: inline-block;
			margin-bottom: 0;
			font-weight: 400;
			text-align: center;
			vertical-align: middle;
			-ms-touch-action: manipulation;
			touch-action: manipulation;
			cursor: pointer;
			background-image: none;
			background-color: #1fc772;
			color: white;
			
			
			padding: 6px 12px;
			font-size: 14px;
			line-height: 1.6;
			
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}
		

		/* Green */
		.successe {
			border-color: #FFFFFF;
			color: white;
		}

		.successe:hover {
			background-color: #FFFFFF;
			color: #1fc772;
		}
		/* Dark */
		.daark {
			border-color: #FFFFFF;
			color: white;
		}

		.daark:hover {
			background: #000000;
			color: #FFFFFF;
		}
		/* end region css button */
		.bt {
			float: right;
		}	
	</style>
</head>
<body>
	
	
	

	<div class="wrapper">
		<header style="background-color: #1fc772; padding-bottom: 10px;">    
			<img src="/images/Trackitagro-Logo.png">  

			<button type="button" class="btnn successe bt" data-toggle="modal" data-target="#modal-iniciar-sesion" style=" border: #fff solid 1px; position: relative; right: 15px; top: 8px; padding-bottom: 10px;" >
				<span>Ingresar</span>	
			</button>
			
		</header>		
	</div>

	

	<!-- Modal -->
	<div class="modal fade" id="modal-iniciar-sesion" role="dialog">
		<div class="modal-dialog modal-md">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<!-- Titulo del Modal - Header -->
					<h2 class="main-heading-session" style="font-size: 24px; color: #2bcc41;">Ingresar</h2>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					
				</div>
				<div class="modal-body fondo-glass" style="min-height: 200px;">
					<!--Modal Body - Para poner lo que quiero dentro del modal-->
					<div class="row">

						
						<div class="panel-body">
							<form method="POST" action="{{ route('login') }}">
								{{ csrf_field() }}
								<!-- Para Username -->
								<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
									<input class="form-control"
									type="text" 
									name="name"
									value="{{ old('name') }}" 
									placeholder="Ingrese Usuario">
									{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
								</div>
								<!-- Para Password -->
								<div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
									<input class="form-control"
									type="password" 
									name="password"
									placeholder="Ingrese Clave">
									{!! $errors->first('password', '<span class="help-block">:message</span>') !!}
								</div>
								<div class="text-center">
									<button class="btnn daark" style="border: #fff solid 1px; position: relative;">Ingresar</button>	
								</div>
							</form>
						</div>
						<br/><br/>
						<div class="text-center">
							<a style="color: #2bcc41;" href="{{ url('email') }}">¿Olvidaste tu contraseña?</a>
						</div>
						
						
					</div>
				</div>
			</div>

		</div>
	</div>




	
	<div class="container">
		@if (session()->has('flash'))
		<div class="alert alert-info">{{ session('flash') }}</div>
		@endif
		@yield('content')
	</div>
	

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
</body>
</html>