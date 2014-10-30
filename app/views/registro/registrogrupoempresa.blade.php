

@extends('plantillas.principal')
@section('cabecera')

{{ HTML::style('css/login.css') }}

@stop

@section('contenido')
<div class="container">
        @if (Session::has('mensaje'))
            <div class="alert alert-warning" role="alert">{{ Session::get('mensaje') }}</div>
        @endif
	{{ Form::open(array('url' => 'registro','files'=>true, 'class'=>'form-signin', 'role'=>'form') ) }}
        <h1>Registro </br>Grupo-Empresa :</h1>
        {{ Form::label('login', 'Usuario'); }}
        {{ Form::text('login','', array('class'=>'form-control')); }}
        {{ Form::label('password', 'Contraseña'); }}
        {{ Form::password('password',array('class'=>'form-control')); }}
        {{ Form::label('password2', 'Repita Contraseña'); }}
        {{ Form::password('password2',array('class'=>'form-control')); }}
        <h1>Datos Empresa</h1>

        {{ Form::label('nombrelargoge', 'Nombre Largo'); }}
        {{ Form::text('nombrelargoge','', array('class'=>'form-control')); }}
        {{ Form::label('nombrecortoge', 'Nombre Corto'); }}
        {{ Form::text('nombrecortoge','',array('class'=>'form-control')); }}
        {{ Form::label('correoge', 'Correo Electronico'); }}
        <div class="input-group">
        <div class="input-group-addon">@</div>
        {{ Form::email('correoge','',array('class'=>'form-control')); }}
        </div>
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
