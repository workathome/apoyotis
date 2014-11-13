@extends('plantillas.grupo-empresa')
@section('cabecera1')

<!--{{ HTML::style('css/login.css') }}-->
{{ HTML::style('css/bootstrapValidator.css') }}

{{ HTML::script('js/bootstrapValidator.js') }}
{{ HTML::script('js/validatorUpDocumentGrupo.js') }}

@stop

@section('contenido1')

    <div class="col-sm-12">
        <ol class="breadcrumb">
            <li><a href="/grupoempresa"><i class="fa fa-fw fa-home"></i> Inicio</a></li>
            <li><a><i class="fa fa-fw fa-cog"></i> Proyecto</a></li>
            <li class="active"><a><i class="fa fa-fw fa-upload"></i> Subir parte A</a></li>
        </ol>
    </div>

    @if (Session::has('mensaje'))
    <div class="alert alert-warning" role="alert">{{ Session::get('mensaje') }}</div>
    @endif

    @if (count($documentos) > 0 )
        <h1>{{ $documentos[0]->nombre_documento_actividad}}</h1>
        <a target="_blank" class="btn btn-primary" href="{{ $documentos[0]->pathdocumento_actividad}}">Visualizar</a>
    @else
        {{ Form::open(array('files'=>true, 'class'=>'form-inline', 'id'=>'upForm') ) }}
        <h1>Subir Parte A</h1>
        <div class="form-group">
        <div>
            {{ Form::label('archivodocumento', 'Elegir Archivo') }}
        </div>
        {{ Form::file('archivodocumento',array('class'=>'form-control')); }} <br>
            <div>
            {{ Form::submit('Subir',array('class'=>'btn-primary btn btn-1g btn-block')); }}
            </div>
        {{ Form::close() }}
        </div>
    @endif
@stop
