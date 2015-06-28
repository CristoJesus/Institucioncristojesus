<?php
header('Content-type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=Archivo_Grados.xls");
header("Pragma: no-cache");
header("Expires: 0");?><!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/miestilo.css')}}">

	<title>Actualizar Docente</title>
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
		<p class="text-center">Archivo Grado</p>
			<HR width=90% align="center"> 

	<div class="visible-lg visible-md visible-sm visible-xs" style="height:80px";></div>

<div class="container-fluid">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="5"><div align="center">Archivo Alumnos</div></td>
    </tr>
    <tr>
      <td>ID</td>
      <td>Alumno</td>
      <td>Dir</td>
      <td>Tel</td>
      <td>Sex</td>
    </tr>
    <?php foreach($results1 as $results1) {
$id = $results1->id;
$nomb = $results1->nom;
$ape = $results1->ape;
$dir = $results1->dir;
$tel = $results1->tel;
$sex = $results1->sex;
$fecha = $results1->fechan;
$grado = $results1->grado;
?>
    <tr>
      <td><?=$id?></td>
      <td><?=$nomb." ".$ape?></td>
      <td><?=$dir?></td>
      <td><?=$tel?></td>
      <td><?=$sex?></td>
    </tr>
    <?php } ?>
  </table>
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