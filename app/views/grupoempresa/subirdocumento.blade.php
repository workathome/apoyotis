@extends('plantillas.grupo-empresa')
@section('cabecera1')

<!--{{ HTML::style('css/login.css') }}-->
{{ HTML::style('css/bootstrapValidator.css') }}

{{ HTML::script('js/bootstrapValidator.js') }}
{{ HTML::script('js/validatorUpDocumentGrupo.js') }}

@stop

@section('contenido1')
    @if (Session::has('mensaje'))
    <div class="alert alert-warning" role="alert">{{ Session::get('mensaje') }}</div>
    @endif

    {{ Form::open(array('files'=>true, 'class'=>'form-inline', 'id'=>'upForm') ) }}
    <div class="form-group">
    {{ Form::text('titulo_gedocumento','', array('class'=>'form-control')); }}
    </div>
    <div class="form-group">
    {{ Form::text('descripciongedocumento','', array('class'=>'form-control')); }}
    </div>
    <div class="form-group">
    {{ Form::file('archivodocumento',array('class'=>'form-control')); }}
    {{ Form::submit('Subir',array('class'=>'btn-primary btn btn-1g btn-block')); }}
    {{ Form::close() }}
    </div>
@stop
