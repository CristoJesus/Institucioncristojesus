<!-- -->
@extends('master')
 
@section('main')
 
  <HR width=90% align="center"> 
		<p class="text-center">Inicio</p>
			<HR width=90% align="center"> 
			
 <div class="container" >
	
		<div class="col-lg-1"></div>
		<div class="col-lg-10"><center>
		<a href="docente"><img src="Images/docente.png" class="tam"></a>
		<a href="secretaria"><img src="Images/secretaria.png" class="tam"></a>
		<a href="admin"><img src="Images/administrador.png" class="tam"></a></center>
		</div>
		
		<div class="col-lg-1"></div>
	</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 sal">
            <p>
                 {!!HTML::link('/logout','Salir',['class'=>'btn btn-link'])!!}
            </p>
       </div>
   </div>
</div>
 
@stop