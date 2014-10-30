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
		{{ Form::label('titulo_gedocumento', 'Titulo Documento'); }}
		{{ Form::text('titulo_gedocumento','', array('class'=>'form-control')); }}


        {{ Form::submit('Subir',array('class'=>'btn-primary btn btn-1g btn-block')); }}
    {{ Form::close() }}
</div>
@stop