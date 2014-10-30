@extends('plantillas.principal')
@section('cabecera')
    {{ HTML::style('css/login.css') }}
@stop
@section('contenido')
<div class="container">
@if (Session::has('mensaje'))
            <span>{{ Session::get('mensaje') }}</span>
@endif
    
    {{ Form::open(array('files'=>true, 'class'=>'form-signin') ) }}
        <h1>Subir Documento</h1>

		{{ Form::label('titulo_consdocumento', 'Titulo Documento'); }}
		{{ Form::text('titulo_consdocumento','', array('class'=>'form-control')); }}

		{{ Form::label('descripcionconsultordocumento', 'Descripción Documento'); }}
		{{ Form::textarea('descripcionconsultordocumento','', array('class'=>'form-control')); }}

        {{ Form::label('archivodocumento', 'Subir Archivo:'); }}
        {{ Form::file('archivodocumento',array('class'=>'form-control')); }}

        {{ Form::submit('Subir',array('class'=>'btn-primary btn btn-1g btn-block')); }}
    {{ Form::close() }}
</div>
@stop
