@extends('plantillas.principal')
@section('cabecera')
    {{ HTML::style('css/login.css') }}
@stop
@section('contenido')
<div class="container">

{{ Form::open(array('files'=>true, 'class'=>'form-signin') ) }}
        <h1>Registar Consultor</h1>
        {{ Form::label('archivoNuevo', 'Subir Archivo:'); }}
        {{ Form::file('archivoNuevo',array('class'=>'form-control')); }}

        {{ Form::submit('Subir',array('class'=>'btn-primary btn btn-1g btn-block')); }}
    {{ Form::close() }}
</div>
@stop
