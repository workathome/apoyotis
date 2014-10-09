
@extends('plantillas.principal')

@section('contenido')
<h1>panel admin</h1>

    {{ Form::open(array('url' => 'login')) }}
        {{ Form::label('login', 'Login'); }}
        {{ Form::text('login'); }}
        {{ Form::label('password', 'Password'); }}
        {{ Form::password('password'); }}
        {{ Form::submit('Ingresar'); }}
    {{ Form::close() }}

@stop