<!-- -->
@extends('master')
 
@section('main')
	
     <div class="container" >
	 <HR width=90% align="center"> 
		<p class="text-center">Inicio</p>
			<HR width=90% align="center"> 
			
		<div class="col-lg-4"></div>
		<div class="col-lg-4"><center>
		<a href="https://www.facebook.com/"><img src="Images/facebook.jpg" class="tam"></a>
		<a href="https://twitter.com/"><img src="Images/twitter.jpg" class="tam"></a>
		<a href="https://www.gmail.com"><img src="Images/google.jpg" class="tam"></a></center>
		</div>
		
		<div class="col-lg-4"></div>
	</div>
	
    <div class="col-md-6 col-md-offset-2 form-content cnt" > 
        <h3 class="heading"></h3>
        @foreach($errors->all() as $error)
            <p class="alert alert-danger">{!!$error!!}</p>
        @endforeach
        {!!Form::open(['url'=>'/login','class'=>'form form-horizontal','style'=>'margin-top:50px'])!!}
        <div class="form-group cnt" >
            {!! Form::label('email','Email:',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::text('email',Input::old('email'),['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="form-group cnt" >
        {!! Form::label('password','Password:',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::password('password',['class'=>'form-control']) !!}
            </div>
        </div>
		<div class="text-center ">
            {!!Form::submit('Iniciar',['class'=>'btn btn-danger'])!!}
        </div>
         {!!Form::close()!!}
    </div>
	
 
@stop