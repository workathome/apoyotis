@extends('plantillas.consultor')
@section('cabecera1')
{{ HTML::style('components/bootstrapValidator/dist/css/bootstrapValidator.min.css') }}
{{ HTML::style('components/bootstrap-fileinput/css/fileinput.min.css') }}
{{ HTML::script('components/bootstrapValidator/dist/js/bootstrapValidator.min.js') }}
{{ HTML::script('components/bootstrap-fileinput/js/fileinput.min.js') }}
{{ HTML::script('js/validatorUpDocumentProyecto.js') }}
@stop
@section('contenido1')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">{{$proyecto->nombreproyecto}} <small>{{$proyecto->created_at}}</small>   <a href="/consultor/proyectodardebaja" class="btn btn-danger">Dar de baja</a>
            </h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-mg-9">
            <ul class="breadcrumb">
                <li><a href="/consultor"><i class="fa fa-fw fa-home"></i> Inicio</a></li>
                <li><a><i class="fa fa-fw fa-users"></i> Proyecto</a></li>
            </ul>
        </div>
    </div>

    <h1>Documentos Proyecto</h1>
    @if (Session::has('mensaje'))
            <div class="alert {{ Session::get('mensaje')[0] }}" role="alert">{{ Session::get('mensaje')[1] }}</div>
    @endif


<div class="table-responsive">
    <table class="table table-bordered table-hover table-nonfluid">
        <thead>
            <tr>
                <th>#</th>
                <th>Titulo</th>
                <th>público</th>
                <th>Documento</th>
                <th>Consultor</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 0?>
            @foreach($documentos_proyecto as $key => $documento)
                <tr>
                    <td>{{$key+1}} <?php $i = $key+1?></td>
                    <td><p> {{$documento->titulo_documento}}</p></td>
                    <td><p> {{ ($documento->es_publico) ? "si" : "no" }} </p></td>
                    <td>
                    <a class="btn btn-success activador" href="{{$documento->path_documento }}" TARGET="_blank">
                    Visualizar
                    </a>
                    </td>
                    <td>{{ Consultor::find($documento->id_consultor)->nombreconsultor }}</td>
                    <td>{{$documento->created_at}}</td>
                </tr>
            @endforeach
            </tbody>
    </table>
</div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregarDocumento">
  <i class="fa fa-plus"></i> Agregar Documento
</button>

<div class="modal fade" id="agregarDocumento" tabindex="-1" role="dialog" aria-labelledby="agregarDocumentoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="agregarDocumentoLabel">Agregar Documento</h4>
            </div>

            {{ Form::open(array("url"=>"consultor/proyecto/subirdocumento",'files'=>true, 'class'=>'form-horizontal', 'id'=>'upForm') ) }}
            <div class="modal-body">
                <div class="row">
                    <div class="form-group">
                        {{ Form::label('titulo_documento', 'Titulo', array('class'=>'control-label col-md-offset-2 col-md-3')); }}
                        @if( $errors->has('titulo_documento') )
                            @foreach($errors->get('titulo_documento') as $error )
                                <br />* {{ $error }}
                            @endforeach
                        @endif
                        <div class="col-md-5">
                            {{ Form::text('titulo_documento','', array('class'=>'form-control')); }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('es_publico','Publico',array('class'=>'control-label col-md-offset-2 col-md-3')); }}
                        @if( $errors->has('es_publico') )
                            @foreach($errors->get('es_publico') as $error )
                                <br />* {{ $error }}
                            @endforeach
                        @endif
                        <div class="col-md-1">
                            <div class="checkbox">
                                {{ Form::checkbox('es_publico', 1 , true ); }}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('archivodocumento','Documento',array('class'=>'control-label col-md-offset-2 col-md-3')); }}
                        @if( $errors->has('archivodocumento') )
                            @foreach($errors->get('archivodocumento') as $error )
                                <br />* {{ $error }}
                            @endforeach
                        @endif
                        <div class="col-md-5">
                            {{ Form::file('archivodocumento',Input::old('archivodocumento'), array('class'=>'form-control file','name'=>'archivodocumento','id'=>'archivodocumento')); }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <div class="form-group">
                    {{ Form::submit('Subir',array('class'=>'btn-primary btn')); }}
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@stop
