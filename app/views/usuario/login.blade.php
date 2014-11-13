@extends('plantillas.principal')
@section('cabecera')
    {{ HTML::style('css/login.css') }}
    {{ HTML::style('css/bootstrapValidator.css')}}
    {{ HTML::script('js/bootstrapValidator.js')}}
    {{ HTML::script('js/validator.js')}}
@stop
@section('contenido')

    @if (Session::has('mensaje_login'))
        <div class="alert alert-danger" role="alert">{{ Session::get('mensaje_login') }}</div>
    @endif
    @if (Session::has('mensaje'))
        <div class="alert alert-warning" role="alert">{{ Session::get('mensaje') }}</div>
    @endif

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sistema Apoyo TIS   <small>Ingresar</small></h1>
        </div>
    </div>
    <div class="row">
    {{ Form::open(array('url' => 'login',
                        'class' => 'form-horizontal',
                        'role'=>'form',
                        'id'=>'validatorForm')) }}
        <div class="form-group">
        {{ Form::label('login', 'Usuario',array('class'=>'control-label col-sm-5')); }}
        <div class="col-sm-2">
        {{ Form::text('login', '', array('class'=>'form-control',
                                'placeholder'=>'Usuario',
                                'autofocus'=>'autofocus',
                                'name'=>'login')); }}
        </div>
        </div>
        <div class="form-group">
        {{ Form::label('password', 'Contraseña',array('class'=>'control-label col-sm-5')); }}
        <div class="col-sm-2">
        {{ Form::password('password',array('class'=>'form-control',
                                 'placeholder'=>'Contraseña',
                                    'name'=>'password')); }}
        </div>
        <div class="col-sm-1">
            <!--<a href="/recuperar" id="logo-recuperar"></a>-->
        </div>
        </div>
        <div class="form-group">
        <div class="col-sm-offset-5 col-sm-2"> 
        {{ Form::submit('Ingresar',array('class' => 'btn-primary btn btn-1g btn-block')); }}
        </div>
        </div>
    {{ Form::close() }}
        <div class="col-sm-offset-4 col-sm-4">
            @if (Proyecto::vigente())
                <a href="/registro">Registrar Grupo-Empresa</a>
            @else
                <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                No existe proyecto
                </div>
            @endif
        </div>
    </div>

@stop
