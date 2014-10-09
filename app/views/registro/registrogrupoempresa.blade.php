

@extends('plantillas.principal')

@section('contenido')
	{{ Form::open(array('url' => 'registro','files'=>true ) ) }}
        {{ Form::label('login', 'Usuario'); }}
        {{ Form::text('login'); }}
        {{ Form::label('password', 'Contraseña'); }}
        {{ Form::password('password'); }}
        {{ Form::label('password2', 'Repita Contraseña'); }}
        {{ Form::password('password2'); }}
		<h1>Datos Personales</h1>
        {{ Form::label('nombrelargoge', 'Nombre Largo'); }}
        {{ Form::text('nombrelargoge'); }}
        {{ Form::label('nombrecortoge', 'Nombre Corto'); }}
        {{ Form::text('nombrecortoge'); }}
        {{ Form::label('correoge', 'Correo Electronico'); }}
        {{ Form::text('correoge'); }}
        {{ Form::label('direccionge', 'Dirección'); }}
        {{ Form::text('direccionge'); }}
        {{ Form::label('telefonoge', 'Telefono'); }}
        {{ Form::text('telefonoge'); }}
        {{ Form::label('logoge', 'Logo'); }}
        {{ Form::file('logoge'); }}
        {{ Form::submit('Registrar'); }}
    {{ Form::close() }}
@stop