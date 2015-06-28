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

			{!! Form::open(array('action' => 'notascontroller@create','method'=>'get')) !!}
		<table class="table">
		<thead class="tbl">
		<tr  >
		<th class="text-center"><strong>ID Alumno</strong> </th>
		<th class="text-center">Asignatura</th>
		<th class="text-center"><strong>Periodo I</strong> </th>
		<th class="text-center"><strong>Periodo II</strong> </th>
		<th class="text-center"><strong>Periodo III</strong> </th>
		<th class="text-center"><strong>Periodo IV</strong> </th>
		</tr>
		</thead>
		<tr>
		<th class="text-center"><label for="alumno"></label>
		  <label for="alumno"></label>
          
		  <select name="alumno" id="alumno">
 <?php foreach($alumnos as $alumnos) {
$ida = $alumnos->id;
$nom = $alumnos->nom;?>
          <option value="<?=$ida?>"><?=$nom?></option>
          <?php }?>
	      </select></th>
		<th class="text-center"><label for="asig"></label>
		  <select name="asig" id="asig">
          <?php foreach($asignaturas as $asignaturas) {
$cod = $asignaturas->codigo;
$asig = $asignaturas->asignatura;?>
          <option value="<?=$cod?>"><?=$asig?></option>
          <?php }?>
	      </select></th>
		<th class="text-center a"><input name="n1" type="number" id="n1" placeholder="" max="5" min="0"> </th>
		<th class="text-center a"><input name="n2" type="number" id="n2" placeholder="" max="5" min="0"></th>
		<th class="text-center a"><input name="n3" type="number" id="n3" placeholder="" max="5" min="0"></th>
		<th class="text-center a"><input name="n4" type="number" id="n4" placeholder="" max="5" min="0"></th>
		</tr>
		<tbody>
		  </tbody>

		</table>
		
		<div class="registro2"><center>
				<button type="submit" class="btn btn-default regis">Registrar</button>
				</center>
				</div>
				{!! Form::close() !!}
                
		
</div>

	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
</body>
</body>
<footer class="footer">
<h5>Copyright © Todos los derechos reservados Andres Sanchez & Elkin Salcedo & Jose Eneon</h5>
</footer>
</html>