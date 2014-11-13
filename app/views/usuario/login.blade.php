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
                        'class' => 'form-signin ',
                        'role'=>'form',
                        'id'=>'validatorForm')) }}
        <div class="form-group input input-group-1g">
        {{ Form::label('login', 'Usuario',array('class'=>'control-label')); }}
        {{ Form::text('login', '', array('class'=>'form-control',
                                'placeholder'=>'Usuario',
                                'autofocus'=>'autofocus',
                                'name'=>'login')); }}
        </div>
        <div class="form-group">
        {{ Form::label('password', 'Contraseña',array('class'=>'control-label')); }}
        {{ Form::password('password',array('class'=>'form-control',
                                 'placeholder'=>'Contraseña',
                                    'name'=>'password')); }}
        <!--<a href="/recuperar" id="logo-recuperar"></a>-->
        </div>
        <div class=form-group"">
        {{ Form::submit('Ingresar',array('class' => 'btn-primary btn btn-1g btn-block')); }}
        </div>
    {{ Form::close() }}
        <div id="registro" >
            @if (Proyecto::vigente())
                <a href="/registro">Registrar Grupo-Empresa</a>
            @else
                <span>No Existe Proyecto para adjudicarse</span>
            @endif
        </div>
    </div>

@stop
