
@extends('plantillas.principal')
@section('cabecera')
    {{ HTML::style('css/login.css') }}
@stop
@section('contenido')
    <div class="container">

    @if (Session::has('mensaje_login'))
        <div class="alert alert-danger" role="alert">{{ Session::get('mensaje_login') }}</div>
    @endif

    @if (Session::has('mensaje'))
        <div class="alert alert-warning" role="alert">{{ Session::get('mensaje') }}</div>
    @endif
    {{ Form::open(array('url' => 'login',
                        'class' => 'form-signin',
                        'role'=>'form')) }}
        {{ Form::label('login', 'Login'); }}
        {{ Form::text('login', '', array('class'=>'form-control',
                                'placeholder'=>'Usuario',
                                'required'=>'required',
                                'autofocus'=>'autofocus')); }}
        {{ Form::label('password', 'Password'); }}
        {{ Form::password('password',array('class'=>'form-control',
                                 'placeholder'=>'Contraseña')); }}
        <a href="/recuperar" id="logo-recuperar"></a>

        {{ Form::submit('Ingresar',array('class' => 'btn-primary btn btn-1g btn-block')); }}
    {{ Form::close() }}
        <div id="registro" >
            <a href="/registro">Registro</a>
        </div>
    </div>

@stop
