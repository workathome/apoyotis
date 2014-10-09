

@extends('plantillas.principal')

@section('contenido')
	{{ Form::open(array('url' => 'registro')) }}
        {{ Form::label('usuario', 'Usuario'); }}
        {{ Form::text('usuario'); }}
        {{ Form::label('password', 'Contraseña'); }}
        {{ Form::password('password'); }}
        {{ Form::label('password2', 'Repita Contraseña'); }}
        {{ Form::password('password2'); }}
		<h1>Datos Personales</h1>
		{{ Form::label('longname', 'Nombre Largo'); }}
        {{ Form::text('longname'); }}
        {{ Form::label('shortname', 'Nombre Corto'); }}
        {{ Form::text('shortname'); }}
        {{ Form::label('email', 'Correo Electronico'); }}
        {{ Form::text('email'); }}
        {{ Form::label('address', 'Dirección'); }}
        {{ Form::text('address'); }}
        {{ Form::label('logo', 'Logo'); }}
        {{ Form::file('logo'); }}
        {{ Form::submit('Registrar'); }}
    {{ Form::close() }}
@stop