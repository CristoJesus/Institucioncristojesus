<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/miestilo.css') }}">

	<title>Inicio Administrador</title>
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
		<p class="text-center">Administrador</p>
			<HR width=90% align="center"> 
    </div>
<div class="container">
	<div class="col-lg-1"></div>
	<div class="col-lg-2"> <a href="registrodocente.html" ><img src="Images/rdocente.png" class="centro" height="1"></a> </div>
	<div class="col-lg-2"> <a href="registroestudiantes.html" ><img src="Images/restudiante.png" class="centro" height="1"></a> </div>
	<div class="col-lg-2"> <a href="Asignatura.html" ><img src="Images/rasignatura.png" class="centro" height="1"></a> </div>
	<div class="col-lg-2"> <a href="RegistrarNotas.html"><img src="Images/rnota.png" class="centro" id="tama"></a> </div>
	<div class="col-lg-2"> <a href="ActualizarDocente.html"><img src="Images/carga.png" class="centro" id="tama"></a> </div>
	<div class="col-lg-1"></div>
</div>
<div class="container">	
	<div class="col-lg-1"></div>
	<div class="col-lg-2"> <a href="registrodocente.html" ><img src="Images/adocente.png" class="centro" height="1"></a> </div>
	<div class="col-lg-2"> <a href="registroestudiantes.html" ><img src="Images/aestudiantes.png" class="centro" height="1"></a> </div>
	<div class="col-lg-2"> <a href="Asignatura.html" ><img src="Images/aasignatura.png" class="centro" height="1"></a> </div>
	<div class="col-lg-2"> <a href="ActualizarNotas.html"><img src="Images/anotas.png" class="centro" id="tama"></a> </div>
	<div class="col-lg-2"> <a href="Archivos.html"><img src="Images/aarchivos.png" class="centro" id="tama"></a> </div>
	<div class="col-lg-1"></div>
	
</div>
	
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
</body>
<footer class="footer">
<h5>Copyright © Todos los derechos reservados Andres Sanchez & Elkin Salcedo & Jose Eneon</h5>
</footer>
</html>