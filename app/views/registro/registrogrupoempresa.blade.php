

@extends('plantillas.principal')
@section('cabecera')

{{ HTML::style('css/login.css') }}
{{ HTML::style('css/bootstrapValidator.css') }}
{{ HTML::script('js/bootstrapValidator.js') }}
{{ HTML::script('js/validator.js')}}

@stop

@section('contenido')
<div class="container">
        @if (Session::has('mensaje'))
            <div class="alert alert-warning" role="alert">{{ Session::get('mensaje') }}</div>
        @endif
	{{ Form::open(array('url' => 'registro','files'=>true, 'class'=>'form-signin', 'role'=>'form', 'id'=>'validatorForm') ) }}
        <h1>Registro </br>Grupo-Empresa :</h1>
        <div class="form-group">
            {{ Form::label('login', 'Usuario',array('class'=>'control-label')); }}
            {{ Form::text('login','', array('class'=>'form-control','name'=>'login')); }}
        </div>
        <div class="form-group">
            {{ Form::label('password', 'Contraseña',array('class'=>'control-label')); }}
            {{ Form::password('password',array('class'=>'form-control','name'=>'password')); }}
        </div>
        <div class="form-group">
            {{ Form::label('password2', 'Repita Contraseña',array('class'=>'control-label')); }}
            {{ Form::password('password2',array('class'=>'form-control','name'=>'confirmPassword')); }}
        </div>
        <h1>Datos Empresa</h1>
        <div class="form-group">
            {{ Form::label('nombrelargoge', 'Nombre Largo',array('class'=>'control-label')); }}
            {{ Form::text('nombrelargoge','', array('class'=>'form-control','name'=>'longName')); }}
        </div>
            <div class="form-group">
            {{ Form::label('nombrecortoge', 'Nombre Corto',array('class'=>'control-label')); }}
            {{ Form::text('nombrecortoge','',array('class'=>'form-control','name'=>'shortName')); }}
        </div>
        <div class="form-group">
            {{ Form::label('correoge', 'Correo Electronico',array('class'=>'control-label')); }}
            <div class="input-group">
            <div class="input-group-addon">@</div>
            {{ Form::email('correoge','',array('class'=>'form-control', 'name'=>'email')); }}
        </div>
        </div>

        <div class="form-group">
            {{ Form::label('direccionge', 'Dirección',array('class'=>'control-label')); }}
            {{ Form::text('direccionge','',array('class'=>'form-control','name'=>'address')); }}
        </div>
        <div class="form-group">
            {{ Form::label('telefonoge', 'Telefono',array('class'=>'control-label')); }}
            {{ Form::text('telefonoge','',array('class'=>'form-control','name'=>'phone')); }}
        </div>
        <div class="form-group">
            {{ Form::label('logoge', 'Logo',array('class'=>'control-label')); }}
            {{ Form::file('logoge',array('class'=>'form-control','name'=>'images')); }}
        </div>
        <div class="form-group">
            {{ Form::submit('Registrar',array('class'=>'btn-primary btn btn-1g btn-block')); }}
        </div>
        <div class="form-group">
    {{ Form::close() }}
</div>
@stop
