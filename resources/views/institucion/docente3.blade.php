<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/miestilo.css') }}">


	<title>Registro Notas</title>
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
		<p class="text-center">Registro De Notas</p>
			<HR width=90% align="center"> 

	<div class="visible-lg visible-md visible-sm visible-xs" style="height:80px";></div>

<div class="container">

		<form class="Registronotas">
		<div class="form-inline nota1" ><div class="btn-group"></div></div>
		</form>
		<table class="table">
		<thead class="tbl">
		<tr  >
		<th colspan="6" class="text-center"><strong>Grado</strong> </th>
		</tr>
		</thead>
		<tr>
		  <th class="text-center"><a href="docente3/1">1</a></th>
		  <th class="text-center"><a href="docente3/2">2</a></th>
		  <th class="text-center a"><a href="docente3/3">3</a></th>
		  <th class="text-center a"><a href="docente3/4">4</a></th>
		  <th class="text-center a"><a href="docente3/5">5</a></th>
		  <th class="text-center a"><a href="docente3/6">6</a></th>
		  </tr>
		<tr>
		  <th class="text-center"><a href="docente3/7">7</a></th>
		  <th class="text-center"><a href="docente3/8">8</a></th>
		  <th class="text-center a"><a href="docente3/9">9</a></th>
		  <th class="text-center a"><a href="docente3/10">10</a></th>
		  <th class="text-center a"><a href="docente3/11">11</a></th>
		  <th class="text-center a"></th>
		  </tr>
		<tbody>
		  </tbody>

		</table>
		
	
		
</div>
	
	</div>
<div class="atras2">
<a href="javascript:history.back()"> Volver Atrás</a> 
</div>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
</body>
</body>
<footer class="footer">
<h5>Copyright © Todos los derechos reservados Andres Sanchez & Elkin Salcedo & Jose Eneon</h5>
</footer>
</html>