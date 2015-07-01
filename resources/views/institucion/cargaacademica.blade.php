<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/miestilo.css') }}">
	<title>Carga Academica</title>
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
		<p class="text-center">Carga Academica</p>
			<HR width=90% align="center"> 

	<div class="visible-lg visible-md visible-sm visible-xs" style="height:80px";></div>

<div class="container-fluid centroa">
{!! Form::open(array('action' => 'cargacontroller@create','method'=>'get')) !!}
<?php 
$doce=$_GET['nom']." ".$_GET['ape'];
$idd=$_GET['id'];
$grad=$_GET['grado'];?>
	<div class="form-inline" > <div class="form-group letra a1"> <label>*Docente: </label>
			  <input name="docente" type="text" id="docente" placeholder="Nombre" value="<?=$doce?>">
              <input type="hidden" name="idd" id="idd" value="<?=$idd?>">
			</div>	  </div>
			<div class="form-inline" > <div class="form-group letra a2"> <label>*Intensidad Horaria: </label><input name="inten" type="text" id="inten" placeholder="N° Horas Semanal"></div> 
			</div>
			<div class="form-inline" > <div class="form-group letra a3"> <label>*Asignatura: </label>
			  <label for="asig"></label>
			  <select name="asig" id="asig">
<?php foreach($results as $results) {
$codi = $results->codigo;
$asi = $results->asignatura;
?>  
              <option value="<?=$codi?>"><?=$asi?></option>
              <?php }?>
		      </select>
			</div> 
			</div>
			<div class="form-inline centroa2" > <div class="btn-group letra a4">
            *Grado
                <label for="grado"></label>
                <input type="text" name="grado" id="grado" value="<?=$grad?>">
			</div></div>
			

			
			<div class="registro2">
                <center>
					 <button type="submit" class="btn btn-default regis">Registrar</button>
				</center>
			</div>
                
                {!! Form::close() !!}
		
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