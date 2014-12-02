@extends('plantillas.grupo_empresa')
@section('cabecera1')

{{ HTML::style('components/bootstrapValidator/dist/js/bootstrapValidator.min.js') }}
{{ HTML::style('components/bootstrap-fileinput/css/fileinput.min.css') }}
{{ HTML::script('components/bootstrapValidator/dist/js/bootstrapValidator.min.js') }}
{{ HTML::script('components/bootstrap-fileinput/js/fileinput.min.js') }}
{{ HTML::script('js/validatorUpDocumentGrupo.js') }}

@stop

@section('contenido1')
    <div class="row">
        <div class="col-sm-12">
            <ol class="breadcrumb">
                <li><a href="/grupoempresa"><i class="fa fa-fw fa-home"></i> Inicio</a></li>
                <li><a><i class="fa fa-fw fa-cog"></i> Proyecto</a></li>
                <li class="active"><a><i class="fa fa-fw fa-upload"></i> Subir parte A</a></li>
            </ol>
        </div>
    </div>

    @if (Session::has('mensaje'))
    <div class="alert alert-warning" role="alert">{{ Session::get('mensaje') }}</div>
    @endif

    @if (count($documentos) > 0 )
        <h1>{{ $documentos[0]->nombre_documento_actividad }}</h1>
        <a target="_blank" class="btn btn-primary" href="{{ $documentos[0]->pathdocumento_actividad}}">Visualizar</a>
    @else
        <h3>Subir Parte A</h3>
        {{ Form::open(array('files'=>true, 'class'=>'form-horizontal', 'id'=>'upForm') ) }}
        <div class="row is_file">
        <div class="form-group">
            {{ Form::label('archivodocumento', 'Elegir Archivo', array('class'=>'control-label col-md-2')) }}
            <div class="col-md-3">
                {{ Form::file('archivodocumento',Input::old('archivodocumento'),array('class'=>'form-control file')); }}
            </div>
        </div>
        </div>
        <div class="form-group row">
            {{ Form::submit('Subir',array('class'=>'btn-primary btn  col-md-offset-2 col-md-2')); }}
        </div>
        </div>
        {{ Form::close() }}
    @endif
@stop
