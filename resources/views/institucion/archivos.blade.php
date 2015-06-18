<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/miestilo.css') }}">


	<title>Archivo</title>
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
		<p class="text-center">Archivo</p>
			<HR width=90% align="center"> 
</div>

<div class="container">
	
	<div class="col-lg-4"><a><img src="Images/arcchivo3.png" class="centro1" height="1"> </a> </div>
	<div class="col-lg-4"><a><img src="Images/arcchivo2.png" class="centro1" height="1">  </div>
	<div class="col-lg-4"><a><img src="Images/arcchivo1.png" class="centro1" height="1"></a> </div>
	
</div>
<div class="container" >

	<div class="col-lg-4"><input type="text" placeholder="Grupo" class="form-control centrado" ></div>
	<div class="col-lg-4"><input type="text" placeholder="Estudiante" class="form-control centrado" ></div>
	<div class="col-lg-4"><input type="text" placeholder="Docente" class="form-control centrado" ></div>


</div>
<div class="container" >

	<div class="col-lg-4"><button type="button" class="btn btn-danger centrado">Exportar</button></div>
	<div class="col-lg-4"><button type="button" class="btn btn-danger centrado">Exportar</button></div>
	<div class="col-lg-4"><button type="button" class="btn btn-danger centrado">Exportar</button></div>
		
</div>	
<div class="container" >
<div class="col-lg-4"></div>
<div class="col-lg-4"><a href="inicioadministrador.html"><button type="button" class="centrado1 regis">Cancelar</button></a></div>
<div class="col-lg-4"></div>
</div>	

	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
</body>
</body>
<footer class="footer">
<h5>Copyright © Todos los derechos reservados Andres Sanchez & Elkin Salcedo & Jose Eneon</h5>
</footer>
</html>