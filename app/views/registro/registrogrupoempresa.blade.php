

@extends('plantillas.principal')
@section('cabecera')

{{ HTML::style('css/login.css') }}

@stop

@section('contenido')
<div class="container">
	{{ Form::open(array('url' => 'registro','files'=>true, 'class'=>'form-signin', 'role'=>'form') ) }}
        {{ Form::label('login', 'Usuario'); }}
        {{ Form::text('login','', array('class'=>'form-control')); }}
        {{ Form::label('password', 'Contraseña'); }}
        {{ Form::password('password',array('class'=>'form-control')); }}
        {{ Form::label('password2', 'Repita Contraseña'); }}
        {{ Form::password('password2',array('class'=>'form-control')); }}
        <h1>Datos Personales</h1>

        {{ Form::label('nombrelargoge', 'Nombre Largo'); }}
        {{ Form::text('nombrelargoge','', array('class'=>'form-control')); }}
        {{ Form::label('nombrecortoge', 'Nombre Corto'); }}
        {{ Form::text('nombrecortoge','',array('class'=>'form-control')); }}
        {{ Form::label('correoge', 'Correo Electronico'); }}
        {{ Form::text('correoge','',array('class'=>'form-control')); }}
        {{ Form::label('direccionge', 'Dirección'); }}
        {{ Form::text('direccionge','',array('class'=>'form-control')); }}
        {{ Form::label('telefonoge', 'Telefono'); }}
        {{ Form::text('telefonoge','',array('class'=>'form-control')); }}
        {{ Form::label('logoge', 'Logo'); }}
        {{ Form::file('logoge',array('class'=>'form-control')); }}
        {{ Form::submit('Registrar',array('class'=>'btn-primary btn btn-1g btn-block')); }}
    {{ Form::close() }}
</div>
@stop
