<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/miestilo.css') }}">

	<title>Registro Estudiante</title>
</head>
<body>
	<header class="row">
		<div class="col-lg-2"><img src="Images/escudo.jpg"  width="200" height="150" style="margin-left:30%;"></div>

		<div class="col-lg-8 text-center  tipo">
			<h1>INSTITUCIÓN EDUCATIVA<BR>CRISTO JESUS</h1>
		</div>
		<div class="col-lg-2 cerrar"> <div class="col-lg-9"> <a href="inicio.html"><h4 class="letraslogin">Cerrar Sesion</h4> </div> <div class="col-lg-3"> <img class="imglogin" src="Images/login.png"  width="35" height="35"></a></div> </div>

	</header>

<div class="container-fluid">
	<HR width=90% align="center"> 
		<p class="text-center">Registro Estudiante</p>
			<HR width=90% align="center"> 

	<div class="visible-lg visible-md visible-sm visible-xs" style="height:20px";></div>

			<div class="container-fluid">

			<form class="datosdocentes">
			<div class="form-inline" > <div class="form-group letra "> <label>*Nombre: </label><input type="text" placeholder="Nombre"></div> <div class="form-group"> <label>*Direccion: </label><input type="text" placeholder="Direccion"></div></div>
			<div class="form-inline" > <div class="form-group letra l1"> <label>*Apellidos: </label><input type="text" placeholder="Apellidos"></div> <div class="form-group"> <label>*Telefono: </label><input type="text" placeholder="Telefono"></div> </div>
			<div class="form-inline" > <div class="form-group letra l2"> <label>*Identificacion: </label><input type="text" placeholder="Identificacion"></div> <div class="form-group"> <label>*F. Nacimiento: </label><input type="date" placeholder="DD/MM/AA"></div> </div>
			<div class="form-inline" > <div class="btn-group letra l5"> <button type="button" class="btn btn-danger">  Grado  </button><button type="button" class="btn btn-danger dropdown-toggle"data-toggle="dropdown"><span class="caret"></span></button></div><div class="btn-group"> <button type="button" class="btn btn-danger">  Grupo  </button><button type="button" class="btn btn-danger dropdown-toggle"data-toggle="dropdown"><span class="caret"></span></button></div><label class="l6">*Sexo: </label><div class="radio sexo1"> <label>M<input type="radio" name="optionsRadios" id="optionsRadios1" value="Masculino" required> </label></div><div class="radio sexo1"><label>F<input type="radio" name="optionsRadios" id="optionsRadios2" value="Femenino"> </label></div> </div></div>
			
			</form>
			
			<div class="registro2"><center>
				<a href="iniciosecretaria.html"> <button  class="btn btn-default regis">Cancelar</button></a>
				<a href="asignatura.html"> <button type="submit" class="btn btn-default regis">Registrar</button> </a>
				</center>
				</div>
		
</div>
	
	</div>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
</body>
</body>
<footer class="footer">
<h5>Copyright © Todos los derechos reservados Andres Sanchez & Elkin Salcedo & Jose Eneon</h5>
</footer>
</html>