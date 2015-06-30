<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/miestilo.css')}}">

	<title>Carga Academica</title>
</head>
<body>
	<header class="row">
		<div class="col-lg-2"><img src="Images/escudo.jpg"  width="200" height="150" style="margin-left:30%;"></div>

		<div class="col-lg-8 text-center  tipo">
			<h1>INSTITUCIÓN EDUCATIVA<BR>CRISTO JESUS</h1>
		</div>
		<div class="col-lg-2 cerrar"> <div class="col-lg-9"><a href="inicio.html"><h4 class="letraslogin"> Cerrar Sesion</h4> </div> <div class="col-lg-3"> <img class="imglogin" src="Images/login.png"  width="35" height="35"></a></div> </div>

	</header>

	<div class="container-fluid">
	<HR width=90% align="center"> 
		<p class="text-center">Carga Academica</p>
			<HR width=90% align="center"> 

	<div class="visible-lg visible-md visible-sm visible-xs" style="height:80px";></div>

<div class="container-fluid">

			 <?php foreach($results as $results) {
$id = $results->id;
$nomb = $results->nombre;
$ape = $results->ape;
$dir = $results->dir;
$tel = $results->tel;
$sex = $results->sex;
$fecha = $results->fecha;
$grado = $results->grado;

?>       <h3><?= $id." - ".$nomb." ".$ape?></h3><a href="carga?id=<?=$id?>&nom=<?=$nomb?>&ape=<?=$ape?>&grado=<?=$grado?>">Asignar</a> 
<?php }?>
		
</div>
	
	</div>
<div class="atras3">
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