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
      <td colspan="5"><div align="center">Grado 1</div></td>
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
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="5"><div align="center">Grado 2</div></td>
    </tr>
    <tr>
      <td>ID</td>
      <td>Alumno</td>
      <td>Dir</td>
      <td>Tel</td>
      <td>Sex</td>
    </tr>
    <?php foreach($results2 as $results2) {
$id = $results2->id;
$nomb = $results2->nom;
$ape = $results2->ape;
$dir = $results2->dir;
$tel = $results2->tel;
$sex = $results2->sex;
$fecha = $results2->fechan;
$grado = $results2->grado;
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
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="5"><div align="center">Grado 3</div></td>
    </tr>
    <tr>
      <td>ID</td>
      <td>Alumno</td>
      <td>Dir</td>
      <td>Tel</td>
      <td>Sex</td>
    </tr>
    <?php foreach($results3 as $results3) {
$id = $results3->id;
$nomb = $results3->nom;
$ape = $results3->ape;
$dir = $results3->dir;
$tel = $results3->tel;
$sex = $results3->sex;
$fecha = $results3->fechan;
$grado = $results3->grado;
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
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="5"><div align="center">Grado 4</div></td>
    </tr>
    <tr>
      <td>ID</td>
      <td>Alumno</td>
      <td>Dir</td>
      <td>Tel</td>
      <td>Sex</td>
    </tr>
    <?php foreach($results4 as $results4) {
$id = $results4->id;
$nomb = $results4->nom;
$ape = $results4->ape;
$dir = $results4->dir;
$tel = $results4->tel;
$sex = $results4->sex;
$fecha = $results4->fechan;
$grado = $results4->grado;
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
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="5"><div align="center">Grado 5</div></td>
    </tr>
    <tr>
      <td>ID</td>
      <td>Alumno</td>
      <td>Dir</td>
      <td>Tel</td>
      <td>Sex</td>
    </tr>
    <?php foreach($results5 as $results5) {
$id = $results5->id;
$nomb = $results5->nom;
$ape = $results5->ape;
$dir = $results5->dir;
$tel = $results5->tel;
$sex = $results5->sex;
$fecha = $results5->fechan;
$grado = $results5->grado;
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
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="5"><div align="center">Grado 6</div></td>
    </tr>
    <tr>
      <td>ID</td>
      <td>Alumno</td>
      <td>Dir</td>
      <td>Tel</td>
      <td>Sex</td>
    </tr>
    <?php foreach($results6 as $results6) {
$id = $results6->id;
$nomb = $results6->nom;
$ape = $results6->ape;
$dir = $results6->dir;
$tel = $results6->tel;
$sex = $results6->sex;
$fecha = $results6->fechan;
$grado = $results6->grado;
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
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="5"><div align="center">Grado 7</div></td>
    </tr>
    <tr>
      <td>ID</td>
      <td>Alumno</td>
      <td>Dir</td>
      <td>Tel</td>
      <td>Sex</td>
    </tr>
    <?php foreach($results7 as $results7) {
$id = $results7->id;
$nomb = $results7->nom;
$ape = $results7->ape;
$dir = $results7->dir;
$tel = $results7->tel;
$sex = $results7->sex;
$fecha = $results7->fechan;
$grado = $results7->grado;
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
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="5"><div align="center">Grado 8</div></td>
    </tr>
    <tr>
      <td>ID</td>
      <td>Alumno</td>
      <td>Dir</td>
      <td>Tel</td>
      <td>Sex</td>
    </tr>
    <?php foreach($results8 as $results8) {
$id = $results8->id;
$nomb = $results8->nom;
$ape = $results8->ape;
$dir = $results8->dir;
$tel = $results8->tel;
$sex = $results8->sex;
$fecha = $results8->fechan;
$grado = $results8->grado;
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
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="5"><div align="center">Grado 9</div></td>
    </tr>
    <tr>
      <td>ID</td>
      <td>Alumno</td>
      <td>Dir</td>
      <td>Tel</td>
      <td>Sex</td>
    </tr>
    <?php foreach($results9 as $results9) {
$id = $results9->id;
$nomb = $results9->nom;
$ape = $results9->ape;
$dir = $results9->dir;
$tel = $results9->tel;
$sex = $results9->sex;
$fecha = $results9->fechan;
$grado = $results9->grado;
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
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="5"><div align="center">Grado 10</div></td>
    </tr>
    <tr>
      <td>ID</td>
      <td>Alumno</td>
      <td>Dir</td>
      <td>Tel</td>
      <td>Sex</td>
    </tr>
    <?php foreach($results10 as $results10) {
$id = $results10->id;
$nomb = $results10->nom;
$ape = $results10->ape;
$dir = $results10->dir;
$tel = $results10->tel;
$sex = $results10->sex;
$fecha = $results10->fechan;
$grado = $results10->grado;
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
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="5"><div align="center">Grado 11</div></td>
    </tr>
    <tr>
      <td>ID</td>
      <td>Alumno</td>
      <td>Dir</td>
      <td>Tel</td>
      <td>Sex</td>
    </tr>
    <?php foreach($results11 as $results11) {
$id = $results11->id;
$nomb = $results11->nom;
$ape = $results11->ape;
$dir = $results11->dir;
$tel = $results11->tel;
$sex = $results11->sex;
$fecha = $results11->fechan;
$grado = $results11->grado;
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