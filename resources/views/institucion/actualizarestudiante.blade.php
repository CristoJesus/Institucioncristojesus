<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/miestilo.css')}}">

	<title>Actualizar Estudiante</title>
</head>
<body>
	<header class="row">
		<div class="col-lg-2"><img src="Images/escudo.jpg"  width="200" height="150" style="margin-left:30%;"></div>

		<div class="col-lg-8 text-center  tipo">
			<h1>INSTITUCIÓN EDUCATIVA<BR>CRISTO JESUS</h1>
		</div>
		<div class="col-lg-2 cerrar"> <div class="col-lg-9"><h4 class="letraslogin">Cerrar Sesion</h4> </div> <div class="col-lg-3"> <img class="imglogin" src="Images/login.png"  width="35" height="35"></div> </div>

	</header>

	<div class="container-fluid">
	<HR width=90% align="center"> 
		<h1 class="text-center">Actualizar Estudiante</h1>
			<HR width=90% align="center"> 
      <?php foreach($results as $results) {
$id = $results->id;
$nomb = $results->nom;
$ape = $results->ape;
$dir = $results->dir;
$tel = $results->tel;
$sex = $results->sex;
$fecha = $results->fechan;
$grado = $results->grado;

?>       <h3><?= $id." - ".$nomb." ".$ape?></h3><a href="restudiante2?id=<?=$id?>&nom=<?=$nomb?>&ape=<?=$ape?>&dir=<?=$dir?>&tel=<?=$tel?>&sex=<?=$sex?>&fecha=<?=$fecha?>&grado=<?=$grado?>">Modificar</a> <a href="delestudiante/<?=$id?>">Eliminar</a>  
<?php }?>
      <div class="visible-lg visible-md visible-sm visible-xs" style="height:80px";></div>
	<div class="container-fluid">
	  <div class="registro2">	    </div>
		
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