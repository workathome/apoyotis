@extends('plantillas.principal')
@section('cabecera')

{{ HTML::style('css/login.css') }}

@stop

@section('contenido')
<div class="container">
        @if (Session::has('mensaje'))
            <div class="alert alert-warning" role="alert">{{ Session::get('mensaje') }}</div>
        @endif
    {{ Form::open(array('files'=>true, 'class'=>'form-signin') ) }}
        <h1>Subir Documento</h1>
		{{ Form::label('nombresocio', 'Nombre Socio'); }}
		{{ Form::text('nombresocio','', array('class'=>'form-control')); }}

        {{ Form::label('apellidossocio', 'Apellidos Socio'); }}
        {{ Form::text('apellidossocio','', array('class'=>'form-control')); }}

        {{ Form::label('estadocivil', 'Estado Civil'); }}
        {{ Form::text('estadocivil','', array('class'=>'form-control')); }}

        {{ Form::label('direccion', 'Dirección'); }}
        {{ Form::text('direccion','', array('class'=>'form-control')); }}

        {{ Form::label('cargo', 'Cargo'); }}
        {{ Form::text('cargo','', array('class'=>'form-control')); }}

        {{ Form::label('correoelectronicosocio', 'Correo electronico'); }}
        {{ Form::text('correoelectronicosocio','', array('class'=>'form-control')); }}

        {{ Form::label('telefonosocio', 'Teléfono'); }}
        {{ Form::text('telefonosocio','', array('class'=>'form-control')); }}

        {{ Form::label('tipo_socio_codtipo_socio', 'tipo socio'); }}
        {{ Form::select('tipo_socio_codtipo_socio',  $tiposocio,array('class' => 'form-control')); }}

        {{ Form::submit('Subir',array('class'=>'btn-primary btn btn-1g btn-block')); }}
    {{ Form::close() }}
</div>
@stop