<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/miestilo.css') }}">

	<title>Actualizar Notas</title>
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
		<p class="text-center">Actualizar Notas</p>
			<HR width=90% align="center"> 

	<div class="visible-lg visible-md visible-sm visible-xs" style="height:80px";></div>

<div class="container">

		<form class="Registronotas">
		<div class="form-inline nota1" ><div class="btn-group"> <button type="button" class="btn btn-danger">  Grado  </button><button type="button" class="btn btn-danger dropdown-toggle"data-toggle="dropdown"><span class="caret"></span></button></div>  <div class="btn-group doc1"> <button type="button" class="btn btn-danger">  Grupo  </button><button type="button" class="btn btn-danger dropdown-toggle"data-toggle="dropdown"><span class="caret"></span></button></div>   <div class="btn-group doc1"> <button type="button" class="btn btn-danger">  Asignatura  </button><button type="button" class="btn btn-danger dropdown-toggle"data-toggle="dropdown"><span class="caret"></span></button></a></div></div>
		</form>
		<table class="table">
		<thead class="tbl">
		<tr  >
		<th class="text-center"><strong>ID </strong> </th>
		<th  class="text-center"><strong>Nombre y Apellidos</strong> </th>
		<th class="text-center"><strong>Periodo I</strong> </th>
		<th class="text-center"><strong>Periodo II</strong> </th>
		<th class="text-center"><strong>Periodo III</strong> </th>
		<th class="text-center"><strong>Periodo IV</strong> </th>
		<th class="text-center"><strong>Nota Final</strong> </th>
		</tr>
		</thead>
		<tr>
		<th class="text-center">941031-09684</th>
		<th >Sanchez Barrios Andres Mauricio</th> 
		<th class="text-center a"><input type="text-center" placeholder=""> </th>
		<th class="text-center a"><input type="text-center" placeholder=""></th>
		<th class="text-center a"><input type="text-center" placeholder=""> </th>
		<th class="text-center a"><input type="text-center" placeholder=""></th>
		<th class="text-center a"><input type="text-center" placeholder=""></th>
		</tr>
		<tr>
		<th class="text-center">941031-09684</th>
		<th >Salcedo Lugo Elkin David</th> 
		<th class="text-center a"><input type="text-center" placeholder=""> </th>
		<th class="text-center a"><input type="text-center" placeholder=""></th>
		<th class="text-center a"><input type="text-center" placeholder=""> </th>
		<th class="text-center a"><input type="text-center" placeholder=""></th>
		<th class="text-center a"> <input type="text-center" placeholder=""> </th>
		</tr>
		<tr>
		<th class="text-center">941031-09684</th>
		<th >Eneon Alvarez Jose</th> 
		<th class="text-center a"><input type="text-center" placeholder=""> </th>
		<th class="text-center a"><input type="text-center" placeholder=""></th>
		<th class="text-center a"><input type="text-center" placeholder=""> </th>
		<th class="text-center a"><input type="text-center" placeholder=""></th>
		<th class="text-center"><input type="text-center" placeholder=""></th>
		</tr>
		<tr>
		<th class="text-center">....</th>
		<th >....</th> 
		<th class="text-center  a"> <input type="text-center" placeholder=""></th>
		<th class="text-center  a"><input type="text-center" placeholder=""></th>
		<th class="text-center  a"><input type="text-center" placeholder=""></th>
		<th class="text-center  a"><input type="text-center" placeholder=""></th>
		<th class="text-center  a"><input type="text-center" placeholder=""></th>
		</tr>
		<tbody>
		</tbody>

		</table>
		
		<div class="registro2"><center>
				<a href=""> <button  class="btn btn-default ver">Ver</button></a>
				<a href="inicioadministrador.html"> <button  class="btn btn-default regis">Cancelar</button></a>
				<a href="RegistrarNotas.html"> <button type="submit" class="btn btn-default regis">Actualizar</button> </a>
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