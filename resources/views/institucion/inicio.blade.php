<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/miestilo.css') }}">

	<title>Institucion educativa</title>
</head>
<body>
	<header class="row">
		<div class="col-lg-2"><img src="Images/escudo.jpg"  width="200" height="150" style="margin-left:30%;"></div>

		<div class="col-lg-8 text-center tipo">
			<h1>INSTITUCIÓN EDUCATIVA<BR>CRISTO JESUS</h1>
		</div>

		<div class="col-lg-2"></div>
	</header>

	<div class="container-fluid">
	<HR width=90% align="center"> 
		<p class="text-center">Ingresar</p>
			<HR width=90% align="center"> 

<div class="container">
	<div class="col-lg-4">
		
	</div>
	<div class="col-lg-4"><center>
		<a href="https://www.facebook.com/"><img src="Images/facebook.jpg" class="tam"></a>
		<a href="https://twitter.com/"><img src="Images/twitter.jpg" class="tam"></a>
		<a href="https://www.gmail.com"><img src="Images/google.jpg" class="tam"></a></center>
	</div>
	<div class="col-lg-4">


		
	</div>
</div>

	</div>

	<div class="container-fluid">
		
		<div class="col-lg-2"></div>

		<div class="col-lg-8 text-center">

			<div class="col-md-5">
				<HR width=100% align="center">
			</div>

			<div class="col-md-2">

				<p class="text-center" style="margin-top:10%;">O</p>
			</div>

			<div class="col-md-5">
				<HR width=100% align="center">
			</div>

			</div>

		<div class="col-lg-2"></div>

	</div>


		<div class="container-fluid">
		
		<div class="col-lg-2"></div>

		<div class="col-lg-8 text-center">

			{!! Form::open(array('action' => 'restudiantecontroller@create','method'=>'get')) !!}
            
				<center>
				<div><input name="usu" type="text" required class="form-control inp" id="usu" placeholder="Usuario"></div>
				<div class="form-group "><label for="ejemplo_password_1">Contraseña</label><input name="contra" type="password" required class="form-control inp" id="contra" placeholder="Contraseña"></div>
				</center>
				<center><button class="btn but" >Iniciar</button></center>
			{!! Form::close() !!}

		<div class="col-lg-2"></div>

	</div>
	
	<div class="container-fluid">
		
		<div class="col-lg-2"></div>

		<div class="col-lg-8 text-center">

			<div class="col-md-6">
				<HR width=90% align="center">
			</div>



			<div class="col-md-6">
				<HR width=90% align="center">
			</div>

			</div>

		<div class="col-lg-2"></div>

	</div>

	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
</body>
</body>
<footer class="footer">
<h5>Copyright © Todos los derechos reservados Andres Sanchez & Elkin Salcedo & Jose Eneon</h5>
</footer>
</html>