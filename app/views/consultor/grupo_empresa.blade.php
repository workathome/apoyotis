@extends('plantillas.consultor')
@section('cabecera1')
{{ HTML::script('js/grupo_empresas.js') }}
{{ HTML::script( 'components/bootbox/bootbox.js') }}
<script>

$(document).ready(function() {

    $('#contratoModal').click( function(evt){

        bootbox.dialog({
            message: "<div class='modal-body'>"+
                "<div class='row'>"+
                    "<div class='col-md-12'>"+
                        "<div class='form-group'>"+
                            '{{ Form::label('empresa','Grupo-Empresa', array('class'=>'control-label')); }}'+
                            '{{ Form::text('empresa',$empresa->nombrelargoge,array('class'=>'form-control','readonly'=>'readonly')); }}'+
                        "</div>"+
                    "</div>"+
                    "<div class='col-md-6'>"+
                        "<div class='form-group'>"+
                            '{{ Form::label('contrato_cuerpo', 'cuerpo', array('class'=>'control-label')); }}'+
                            '{{ Form::textarea('contrato_cuerpo','',array('class'=>'form-control','autofocus'=>'autofocus')); }}'+
                        "</div>"+
                    "</div>"+
                    "<div class='col-md-6'>"+
                        "<div class='form-group'>"+
                            '{{ Form::label('contrato_adenda', 'adenda', array('class'=>'control-label')); }}'+
                            '{{ Form::textarea('contrato_adenda','',array('class'=>'form-control')); }}'+
                        "</div>"+
                    "</div>"+
                "</div>"+
            "</div>",
            title: "Generar Contrato",
            buttons: {
                main: {
                    label: "Generar",
                    className: "btn-primary",
                    callback: function() {
                        datos = {
                            id_empresa : '{{$empresa->codgrupo_empresa}}',
                            tarea : '1',
                            cuerpo : $("textarea[name=contrato_cuerpo]").val(),
                            adenda : $("textarea[name=contrato_adenda]").val()

                        };
                        $.ajax({
                            type: "POST",
                            data: datos ,
                            beforeSend: function( ){
                            },
                            success: function( data ){
                                dir_hostname = window.location.protocol+"//"+ window.location.hostname +
                                            ( window.location.port == "" ? "" : ":"+window.location.port ) ;
                                console.log( window.location.host );
                                window.open(dir_hostname+data,'_newtab');
                                $(this).modal('hide');
                            }
                        });


                    }
                }
            }
        });
    });

    $('#evaluacionfinalModal').click( function(evt){
        bootbox.dialog({
            message:
            "<div class='modal-body'>"+
                "<div class='row'>"+
                    "<div class='col-md-12'>"+
                        "<div class='form-group'>"+
                            '{{ Form::label('empresa','Grupo-Empresa', array('class'=>'control-label')); }}'+
                            '{{ Form::text('empresa',$empresa->nombrelargoge,array('class'=>'form-control','readonly'=>'readonly')); }}'+
                        "</div>"+
                    "</div>"+
                    "<div class='col-md-6'>"+
                        "<div class='form-group'>"+
                            '{{ Form::label('evaluacion_fecha', 'Fecha', array('class'=>'control-label')); }}'+
                            //PONLE CALNEDARIO AQUI
                            '{{ Form::text('evaluacion_fecha','',array('class'=>'form-control','readonly'=>'readonly')); }}'+
                        "</div>"+
                    "</div>"+
                    "<div class='col-md-6'>"+
                        "<div class='form-group'>"+
                            '{{ Form::label('evaluacion_nota', 'Nota', array('class'=>'control-label')); }}'+
                            '{{ Form::text('evaluacion_nota','',array('class'=>'form-control','autofocus'=>'autofocus')); }}'+
                        "</div>"+
                    "</div>"+
                    "<div class='col-md-12'>"+
                        "<div class='form-group'>"+
                            '{{ Form::label('evaluacion_observaciones', 'Observaciones', array('class'=>'control-label')); }}'+
                            '{{ Form::textarea('evaluacion_observaciones','',array('class'=>'form-control')); }}'+
                        "</div>"+
                    "</div>"+
                "</div>"+
            "</div>",
            title: "Evaluación Final",
            buttons: {
                main: {
                    label: "Evaluar",
                    className: "btn-primary",
                    callback: function() {
                        /*
                        datos = {
                            id_empresa : '{{$empresa->codgrupo_empresa}}',
                            tarea : '1',
                            cuerpo : $("textarea[name=contrato_cuerpo]").val(),
                            adenda : $("textarea[name=contrato_adenda]").val()

                        };
                        $.ajax({
                            type: "POST",
                            data: datos ,
                            beforeSend: function( ){
                            },
                            success: function( data ){
                                dir_hostname = window.location.protocol+"//"+ window.location.hostname +
                                            ( window.location.port == "" ? "" : ":"+window.location.port ) ;
                                console.log( window.location.host );
                                window.open(dir_hostname+data,'_newtab');
                            }
                        });

                        */
                                $(this).modal('hide');
                    }
                }
            }
        });
    });
});

</script>

@stop
@section('contenido1')
    <div class="row">
        <div class="col-mg-12">
            <ul class="breadcrumb">
                <li><a href="/consultor"><i class="fa fa-fw fa-home"></i> Inicio</a></li>
                <li><a><i class="fa fa-fw fa-users"></i> Grupo Empresas</a></li>
            </ul>
        </div>
    </div>
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">{{ $empresa->nombrelargoge}} <small>{{ $empresa->nombrecortoge }}</small></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                @if ( $representanteLegal )

                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-book fa-2x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">Contrato</div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="button" id="contratoModal">
                        <div class="panel-footer">
                            <span class="pull-left"><strong>Generar Contrato</strong></span>
                            <span class="pull-right"><i class="fa fa-cog"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
                @else
                    <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-book fa-2x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">Contrato</div>
                            </div>
                        </div>
                    </div>
                        <div class="panel-footer button" style="color:white">
                            <span class="pull-left"><strong>La empresa no tiene representante legal</strong></span>
                            <span class="pull-right"><i class="fa fa-cog"></i></span>
                            <div class="clearfix"></div>
                        </div>
                </div>

                @endif

            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-flag fa-2x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">Hito Pagable</div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown">
                    <a href="#" class="dropdown-toggle" type="button" data-toggle="dropdown" id="dropdownMenuEvaluar" aria-expanded="true">
                        <div class="panel-footer">
                            <span class="pull-left"><strong>Evaluar Hito</strong></span>
                            <span class="pull-right"><i class="fa fa-pencil-square-o"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                    <ul id="dropdown-menu-hito" class="dropdown-menu dropdown-menu-left" role="menu" arial-labelleby="dropdownMenuEvaluar">
                        <li  class="dropdown-item" role="presentation"><a  id="s1" class="button" data-toggle="modal" data-target="#hitoModal"><i class="fa fa-fw fa-circle"></i> Sprint 1</a></li>
                        <li  class="dropdown-item" role="presentation"><a id="s2"  class="button" data-toggle="modal" data-target="#hitoModal"><i class="fa fa-fw fa-circle"></i> Sprint 2</a></li>
                        <li class="dropdown-item" role="presentation"><a class="button" data-toggle="modal" data-target="#hitoModal"><i class="fa fa-fw fa-circle-thin"></i> Sprint 3</a></li>
                        <li class="dropdown-item" role="presentation"><a class="button" data-toggle="modal" data-target="#hitoModal"><i class="fa fa-fw fa-circle-thin"></i>Sprint 4</a></li>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-pencil fa-2x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">Avance Semanal</div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="button" data-toggle="modal" data-target="#avanceModal">
                        <div class="panel-footer">
                            <span class="pull-left"><strong>Evaluar Avance</strong></span>
                            <span class="pull-right"><i class="fa fa-plus"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-trophy fa-2x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">Evaluacion Final</div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="button" id="evaluacionfinalModal">
                        <div class="panel-footer">
                            <span class="pull-left"><strong>Evaluacion {{$empresa->nombrecortoge}}</strong></span>
                            <span class="pull-right"><i class="fa fa-key"></i></span>
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

        <form action="">
            <input type="text">
            <input type="text">
            <input type="text">
        </form>

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
            {{ Form::open(array('url'=>''.$empresa->codgrupo_empresa,'files'=>true, 'class'=>'form-horizontal','id'=>'validatorForm2')) }}
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
<div class="modal fade" id="hitoModal" tabindex="-1" role="dialog" aria-labelledby="hitoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="hitoModalLabel">
                    Evaluar Hito
                </h4>
            </div>
            <div class="form"><!-- AVANCE SEMANAL URL-->
            {{ Form::open(array('url'=>''.$empresa->codgrupo_empresa,'files'=>true, 'class'=>'form-horizontal','id'=>'hitoForm')) }}
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {{  Form::text('idhito','',array('class'=>'form-control','hidden'=>'hidden')); }}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            {{ Form::label('Monto', 'monto', array('class'=>'control-label')); }}
                            {{ Form::text('monto','',array('class'=>'form-control','autofocus'=>'autofocus')); }}
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            {{ Form::label('porcentaje', 'porcentaje', array('class'=>'control-label')); }}
                            {{ Form::text('porcentaje','',array('class'=>'form-control','autofocus'=>'autofocus')); }}<p>/50</p>
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
@stop
