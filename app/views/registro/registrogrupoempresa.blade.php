@extends('plantillas.principal')
@section('cabecera')

{{ HTML::style('css/login.css') }}
{{ HTML::style('css/bootstrapValidator.css') }}
{{ HTML::script('js/bootstrapValidator.js') }}
{{ HTML::script('js/validator.js')}}

@stop

@section('contenido')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header">{{$proyecto->nombreproyecto}}
            <small>Registrar Grupo Empresa</small>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="alert alert-info" role="alert">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                El registro de esta <strong>Grupo Empresa</strong> esta asociado al Proyecto <strong> {{$proyecto->nombreproyecto}}</strong>
            </div>
        </div>
    </div>        
    @if (Session::has('mensaje'))
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-warning" role="alert">{{ Session::get('mensaje') }}</div>
            </div>
        </div>
    @endif

    {{ Form::open(array('url' => 'registro','files'=>true, 'class'=>'form-horizontal', 'role'=>'form', 'id'=>'validatorForm') ) }}
    <div class="row">
        <div class="form-group">
            {{ Form::label('login', 'Usuario',array('class'=>'control-label col-sm-offset-3 col-sm-2')); }}
            <div class="col-sm-3">
                @if( $errors->has('login') )
                    @foreach($errors->get('login') as $error )
                        <br />
                        <span class="label label-danger"> * {{ $error }} </span>
                    @endforeach
                @endif
                {{ Form::text('login','', array('class'=>'form-control','name'=>'login')); }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            {{ Form::label('password', 'Contraseña',array('class'=>'control-label col-sm-offset-3 col-sm-2')); }}
            <div class="col-sm-3">
                {{ Form::password('password',array('class'=>'form-control','name'=>'password')); }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            {{ Form::label('password2', 'Repita Contraseña',array('class'=>'control-label col-sm-offset-3 col-sm-2')); }}
            <div class="col-sm-3">
                {{ Form::password('password2',array('class'=>'form-control','name'=>'password2')); }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header"><small>Datos Empresa</small></h1>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            {{ Form::label('nombrelargoge', 'Nombre Largo',array('class'=>'control-label col-sm-offset-3 col-sm-2')); }}
            <div class="col-sm-3">
                {{ Form::text('nombrelargoge','', array('class'=>'form-control','name'=>'nombrelargoge')); }}
            </div>
        </div>
    </div>
    <div class="row">
            <div class="form-group">
            {{ Form::label('nombrecortoge', 'Nombre Corto',array('class'=>'control-label col-sm-offset-3 col-sm-2')); }}
            <div class="col-sm-3">
                {{ Form::text('nombrecortoge','',array('class'=>'form-control','name'=>'nombrecortoge')); }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            {{ Form::label('correoge', 'Correo Electronico',array('class'=>'control-label col-sm-offset-3 col-sm-2')); }}
            <div class="col-sm-3">
                <div class="input-group">
                    <div class="input-group-addon">@</div>
                        {{ Form::email('correoge','',array('class'=>'form-control', 'name'=>'correoge')); }}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            {{ Form::label('direccionge', 'Dirección',array('class'=>'control-label col-sm-offset-3 col-sm-2')); }}
            <div class="col-sm-3">
            {{ Form::text('direccionge','',array('class'=>'form-control','name'=>'direccionge')); }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            {{ Form::label('telefonoge', 'Telefono',array('class'=>'control-label col-sm-offset-3 col-sm-2')); }}
            <div class="col-sm-3">
                {{ Form::text('telefonoge','',array('class'=>'form-control','name'=>'telefonoge')); }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            {{ Form::label('logoge','Logo',array('class'=>'control-label col-sm-offset-3 col-sm-2')); }}
            <div class="col-sm-3">
                {{ Form::file('logoge', Input::old('logoge'), array('class'=>'form-control','name'=>'logoge')); }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            {{ Form::label('idconsultor', 'Elegir Consultor',array('class'=>'control-label col-sm-offset-3 col-sm-2')); }}
            <div class="col-sm-3">
                {{ Form::select( 'idconsultor', $consultores , Input::old('idconsultor'),array('class'=>'form-control')); }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-2">
                {{ Form::submit('Registrar',array('class'=>'btn-primary btn btn-1g btn-block')); }}
            </div>
        </div>
    </div>
    {{ Form::close() }}
@stop
