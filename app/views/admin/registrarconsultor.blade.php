
@extends('plantillas.principal')

@section('contenido')
<h1>Registar Consultar</h1>
{{ Form::open(array('files'=>true ) ) }}
        {{ Form::label('login', 'Usuario'); }}
        {{ Form::text('login'); }}
        {{ Form::label('password', 'Contraseña'); }}
        {{ Form::password('password'); }}
        {{ Form::label('password2', 'Repita Contraseña'); }}
        {{ Form::password('password2'); }}
		<h1>Datos Personales</h1>
        {{ Form::label('nombreconsultor', 'Nombre'); }}
        {{ Form::text('nombreconsultor'); }}

        {{ Form::label('apellopaternoconsultor', 'Apellido Paterno'); }}
        {{ Form::text('apellopaternoconsultor'); }}

		{{ Form::label('apellidomaternoconsultor', 'Apellido Materno'); }}
		{{ Form::text('apellidomaternoconsultor'); }}

        {{ Form::label('correoconsultor', 'Correo Electronico'); }}
        {{ Form::text('correoconsultor'); }}

        {{ Form::label('telefonoconsultor', 'Teléfono'); }}
        {{ Form::text('telefonoconsultor'); }}

        {{ Form::label('fotoconsultor', 'Foto'); }}
        {{ Form::file('fotoconsultor'); }}

        {{ Form::submit('Registrar'); }}
    {{ Form::close() }}

@stop