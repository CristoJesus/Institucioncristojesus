<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/miestilo.css') }}">

	<title>Registro Estudiante</title>
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
		<p class="text-center">Registro Estudiante</p>
			<HR width=90% align="center"> 

	<div class="visible-lg visible-md visible-sm visible-xs" style="height:20px";></div>

			<div class="container-fluid cnt2">

			{!! Form::open(array('action' => 'restudiantecontroller@create','method'=>'get')) !!}
            
			<div class="form-inline" > <div class="form-group letra "> <label>*Nombre: </label><input name="nombre" type="text" id="nombre" placeholder="Nombre"></div> <div class="form-group"> <label>*Direccion: </label><input name="dir" type="text" id="dir" placeholder="Direccion"></div></div>
			<div class="form-inline" > <div class="form-group letra l1"> <label>*Apellidos: </label><input name="ape" type="text" id="ape" placeholder="Apellidos"></div> <div class="form-group"> <label>*Telefono: </label><input name="tel" type="text" id="tel" placeholder="Telefono"></div> </div>
			<div class="form-inline" > <div class="form-group letra l2"> <label>*Identificacion: </label><input name="id" type="text" id="id" placeholder="Identificacion"></div> <div class="form-group"> <label>*F. Nacimiento: </label><input name="fechan" type="date" id="fechan" placeholder="DD/MM/AA"></div> 
			</div>
			<div class="form-inline" > <div class="btn-group letra l5">	 
			  <label for="grado">*Grado:</label>
			  <input type="number" name="grado" id="grado" min="1" max="11">
			</div>
			  <div class="btn-group"></div><label class="l6">*Sexo: </label>
              <label for="select2"></label>
              <select name="sex" id="select2">
                <option value="M">M</option>
                <option value="F">F</option>
              </select>
			</div>
            <div class="registro2"><center>
				
				<button type="submit" class="btn btn-default regis">Registrar</button>
				</center>
				</div>
			{!! Form::close() !!} Registro Exitoso!!
</div>
<div class="cnt4">
<a href="javascript:history.back()"> Volver Atrás</a> 
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