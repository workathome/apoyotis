@extends('plantillas.consultor')

@section('contenido1')
    <div class="row">
        <div class="col-mg-12">
            <ul class="breadcrumb">
                <li><a href="/consultor"><i class="fa fa-fw fa-home"></i> Inicio</a></li>
                <li><a><i class="fa fa-fw fa-users"></i> Grupo Empresas</a></li>
            </ul>
        </div>
    </div>
    @foreach( $empresas as $empresa )
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">{{ $empresa->nombrelargoge}} <small>{{ $empresa->nombrecortoge }}</small></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-book fa-3x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">Contrato</div>
                                <div>{{date('Y-m-d')}}</div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="button" data-toggle="modal" data-target="#contratoModal">
                        <div class="panel-footer">
                            <span class="pull-left"><strong>Generar Contrato</strong></span>
                            <span class="pull-right"><i class="fa fa-cog fa-2x"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-flag fa-3x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">Hito Pagable</div>
                                <div>{{$empresa->nombrecortoge}}</div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="button" data-toggle="modal" data-target="#contratoModal">
                        <div class="panel-footer">
                            <span class="pull-left"><strong>Evaluar Hito</strong></span>
                            <span class="pull-right"><i class="fa fa-pencil-square-o fa-2x"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-pencil fa-3x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">Avance Semanal</div>
                                <div>{{$empresa->nombrecortoge}}</div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="button" data-toggle="modal" data-target="#avanceModal">
                        <div class="panel-footer">
                            <span class="pull-left"><strong>Evaluar Avance</strong></span>
                            <span class="pull-right"><i class="fa fa-plus fa-2x"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-users"></i> Socios</h3>
            </div>
            <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-nonfluid">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Cargo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $empresa->socios as $key => $socio )
                        @if( $socio->tipoSocio->nombretipo != "socio")
                        <tr class="info">
                        @else
                        <tr>
                        @endif
                            <td>{{ $key +1 }}</td>
                            <td>{{ $socio->nombresocio }}</td>
                            <td>{{ $socio->apellidossocio }}</td>
                            <td>{{ $socio->correoelectronicosocio }}</td>
                            <td>{{ $socio->telefonosocio }}</td>
                            <td>{{ $socio->cargo }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <span class="label label-info">La fila marcada es el representante legal.</span>
        </div>
        </div>
        </div>
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-file-text"></i> Documentos subidos</h3>
                </div>
                <div class="panel-body">
                    <div class="list-group">
                        @foreach (DocumentoActividad::where("id_grupo_empresa","=",$empresa->codgrupo_empresa)->get() as $key => $value)
                       <a href="{{$value->pathdocumento_actividad}}" class="list-group-item" target="_blank">
                            <span class="badge">{{$value->created_at}}</span>
                            <i class="fa fa-fw fa-file"></i>
                            {{ $value->nombre_documento_actividad }}
                        </a>
                        @endforeach
                    </div>
                        <span class="label label-warning">Seleccione un documento para descargar.</span>
                </div>
            </div>
        </div>
        </div>

<div class="modal fade" id="contratoModal" tabindex="-1" role="dialog" aria-labelledby="contratoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="contratoModalLabel">
                    Generar Contrato
                </h4>
            </div>
            <div class="form">
            {{ Form::open(array('url'=>'consultor/generarcontrato/'.$empresa->codgrupo_empresa,'files'=>true, 'class'=>'form-horizontal','id'=>'validatorForm')) }}
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {{ Form::label('id','id', array('class'=>'control-label')); }}
                            {{  Form::text('id',$empresa->nombrelargoge,array('class'=>'form-control','readonly'=>'readonly')); }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('cuerpo', 'cuerpo', array('class'=>'control-label')); }}
                            {{ Form::textarea('cuerpo','',array('class'=>'form-control','autofocus'=>'autofocus')); }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('adenda', 'adenda', array('class'=>'control-label')); }}
                            {{ Form::textarea('adenda','',array('class'=>'form-control')); }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn default" data-dismiss="modal">Cancelar</button>
                <div class="form-group">
                    {{ Form::submit('generar',array('class'=>'btn-primary btn')); }}
                </div>
            </div>
        {{ Form::close() }}
        </div>
        </div>
    </div>
</div>
<div class="modal fade" id="avanceModal" tabindex="-1" role="dialog" aria-labelledby="avanceModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="avanceModalLabel">
                    Evaluar Avance {{date('Y-m-d')}}
                </h4>
            </div>
            <div class="form"><!-- AVANCE SEMANAL URL-->
            {{ Form::open(array('url'=>''.$empresa->codgrupo_empresa,'files'=>true, 'class'=>'form-horizontal','id'=>'validatorForm')) }}
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {{ Form::label('id','id', array('class'=>'control-label')); }}
                            {{  Form::text('id',$empresa->nombrelargoge,array('class'=>'form-control','readonly'=>'readonly')); }}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            {{ Form::label('observaciones', 'obserbaciones', array('class'=>'control-label')); }}
                            {{ Form::textarea('observaciones','',array('class'=>'form-control','autofocus'=>'autofocus')); }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn default" data-dismiss="modal">Cancelar</button>
                <div class="form-group">
                    {{ Form::submit('Terminar',array('class'=>'btn-primary btn')); }}
                </div>
            </div>
        {{ Form::close() }}
        </div>
        </div>
    </div>
</div>
    @endforeach
@stop
