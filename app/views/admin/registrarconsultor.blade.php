
@extends('plantillas.principal')
@section('cabecera')
    {{ HTML::style('css/login.css') }}
@stop
@section('contenido')
<div class="container">

{{ Form::open(array('files'=>true, 'class'=>'form-signin') ) }}
        <h1>Registar Consultor</h1>
        {{ Form::label('login', 'Usuario'); }}
        {{ Form::text('login','',array('class'=>'form-control')); }}
        {{ Form::label('password', 'Contraseña'); }}
        {{ Form::password('password',array('class'=>'form-control')); }}
        {{ Form::label('password2', 'Repita Contraseña'); }}
        {{ Form::password('password2',array('class'=>'form-control')); }}
		<h1>Datos Personales</h1>
        {{ Form::label('nombreconsultor', 'Nombre'); }}
        {{ Form::text('nombreconsultor','',array('class'=>'form-control')); }}

        {{ Form::label('apellopaternoconsultor', 'Apellido Paterno'); }}
        {{ Form::text('apellopaternoconsultor','',array('class'=>'form-control')); }}

	{{ Form::label('apellidomaternoconsultor', 'Apellido Materno'); }}
	{{ Form::text('apellidomaternoconsultor','',array('class'=>'form-control')); }}

        {{ Form::label('correoconsultor', 'Correo Electronico'); }}
        {{ Form::text('correoconsultor','',array('class'=>'form-control')); }}

        {{ Form::label('telefonoconsultor', 'Teléfono'); }}
        {{ Form::text('telefonoconsultor','',array('class'=>'form-control')); }}

        {{ Form::label('fotoconsultor', 'Foto'); }}
        {{ Form::file('fotoconsultor',array('class'=>'form-control')); }}

        {{ Form::submit('Registrar',array('class'=>'btn-primary btn btn-1g btn-block')); }}
    {{ Form::close() }}
</div>
@stop
