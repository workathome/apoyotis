
@extends('plantillas.principal')

@section('contenido')
    <h1>
      Ingresar
    </h1>

    @if (Session::has('mensaje_login'))
        <span>{{ Session::get('mensaje_login') }}</span>
    @endif

    {{ Form::open(array('url' => 'login')) }}
        {{ Form::label('login', 'Login'); }}
        {{ Form::text('login'); }}
        {{ Form::label('password', 'Password'); }}
        {{ Form::password('password'); }}
        {{ Form::submit('Ingresar'); }}
    {{ Form::close() }}

    <h1>
      Registro
    </h1>
    @if (Session::has('mensaje_registro'))
        <span>{{ Session::get('mensaje_registro') }}</span>
    @endif

    {{ Form::open(array('url' => 'registro')) }}

        {{ Form::label('login', 'Login'); }}
        {{ Form::text('login'); }}

        {{-- Form::label('correo', 'Correo'); --}}
        {{-- Form::text('correo'); --}}
        {{ Form::label('password', 'Password'); }}
        {{ Form::password('password'); }}
        {{ Form::submit('Registrar'); }}

    {{ Form::close() }}

@stop