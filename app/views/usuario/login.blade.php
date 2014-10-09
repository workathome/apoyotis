
@extends('plantillas.principal')

@section('contenido')
    {{ HTML::style('css/login.css') }}

    @if (Session::has('mensaje_login'))
        <span>{{ Session::get('mensaje_login') }}</span>
    @endif

    @if (Session::has('mensaje'))
        <span>{{ Session::get('mensaje') }}</span>
    @endif
    <div class="container">
    {{ Form::open(array('url' => 'login',
                        'class' => 'form-signin',
                        'role'=>'form')) }}
        {{ Form::label('login', 'Login'); }}
        {{ Form::text('login', '', array('class'=>'form-control',
                                 'placeholder'=>'Usuario')); }}
        {{ Form::label('password', 'Password'); }}
        {{ Form::password('password',array('class'=>'form-control',
                                 'placeholder'=>'Contraseña')); }}
        {{ Form::submit('Ingresar',array('class' => 'btn-primary btn btn-1g btn-block btn.success')); }}
    {{ Form::close() }}
    </div>
@stop
