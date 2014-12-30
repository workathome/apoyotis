@extends('plantillas.consultor')
@section('cabecera1')
{{ HTML::script('js/grupo_empresas.js') }}
{{ HTML::script( 'components/bootbox/bootbox.js') }}
{{ HTML::script('components/moment/moment.js') }}
{{ HTML::script('components/moment/locale/es.js') }}
{{ HTML::script('components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}
{{ HTML::style('components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}
{{ HTML::style('css/timeline.css') }}
{{ HTML::script('components/angular/angular.min.js')}}
{{ HTML::script('js/grupo-empresa-angular.js') }}
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
                            'id_empresa' : '{{$empresa->codgrupo_empresa}}',
                            'tarea' : '1',
                            'cuerpo' : $("textarea[name=contrato_cuerpo]").val(),
                            'adenda' : $("textarea[name=contrato_adenda]").val()

                        };
                        $.ajax({
                            type: "POST",
                            data: datos ,
                            //dataType: 'json',
                            beforeSend: function( ){
                            },
                            success: function( data ){
                                console.log( data );
                                /*
                                dir_hostname = window.location.protocol+"//"+ window.location.hostname +
                                            ( window.location.port == "" ? "" : ":"+window.location.port ) ;
                                */
                                $(this).modal( 'hide' );
                                if ( data == 0) {
                                    alert( "no se pudo crear el contrato" )
                                }else{
                                    window.open(  "http://"+data , '_newtab' );
                                }
                            }
                        });


                    }
                }
            }
        });
    });

    $('#evaluacionfinalModal').click( function(evt){

        setTimeout(function() {
            $('#datetimepicker1').datetimepicker({
                    autoclose:true,
                    format : 'YYYY-MM-DD HH:mm:ss',
                    showSeconds: true,
                    language: "es",
                    pickTime: false,
                    defaultDate: new Date(),
                    useCurrent: true,
                }).datetimepicker( 'setDate', new Date() );
        }, 500);


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
                            "<div class='input-group date' id='datetimepicker1'>"+
                                "<span class='input-group-addon'><span class='glyphicon glyphicon-calendar'></span></span>"+
                                '{{ Form::text('evaluacion_fecha',Input::old('evaluacion_fecha'),array('class'=>'form-control form_fecha','readonly'=>'readonly', 'name'=>'evaluacion_fecha')); }}'+
                            "</div>"+
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
            onEscape: function() {  $(this).modal('hide'); },
            buttons: {
                main: {
                    label: "Evaluar",
                    className: "btn-primary",
                    callback: function() {

                        datos = {
                            id_empresa : '{{$empresa->codgrupo_empresa}}',
                            tarea : '4',
                            fecha : $("input[name=evaluacion_fecha]").val() ,
                            nota : $("input[name=evaluacion_nota]").val() ,
                            observaciones : $("textarea[name=evaluacion_observaciones]").val()
                        };

                        $.ajax({
                            type: "POST",
                            data: datos ,
                            beforeSend: function( ){
                            },
                            success: function( data ){
                                console.log( data );
                                /*
                                dir_hostname = window.location.protocol+"//"+ window.location.hostname +
                                            ( window.location.port == "" ? "" : ":"+window.location.port ) ;
                                console.log( window.location.host );
                                window.open(dir_hostname+data,'_newtab');
                                */
                            }
                        });
                        $(this).modal('hide');
                    }
                },


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

                <div class="panel">
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
                    <div class="panel info">
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
                            <span class="pull-left"><strong>No tiene representante legal</strong></span>
                            <span class="pull-right"><i class="fa fa-cog"></i></span>
                            <div class="clearfix"></div>
                        </div>
                </div>

                @endif

            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel info">
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
                        @foreach($plan_pago->hitosPagables as $hito)
                        <li  class="dropdown-item" role="presentation"><a  id="{{$hito->codhito_pagable}}" class="button" data-toggle="modal" data-target="#hitoModal">
                        @if($hito->presentado!=null)
                            <i class="fa fa-fw fa-circle"></i>
                        @else
                            <i class="fa fa-fw fa-circle-thin"></i>
                        @endif
                        {{$hito->nombre}} /<p style="display:inline;"> {{$hito->porcentaje_hito}}%</p></a></li>
                        @endforeach
                    </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel info">
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
                <div class="panel info">
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
                    @if ( $evaluacion_final )
                        <div class="panel-footer" style="color:white">
                            <span class="pull-left"><strong>Nota: {{$evaluacion_final->nota}}</strong></span><br><hr>
                            <span class="pull-left"><strong>Fecha: {{$evaluacion_final->fecha}}</strong></span><br><hr>
                            <span class="pull-left"><strong>Observaciones: {{$evaluacion_final->observaciones}}</strong></span>

                            <span class="pull-right"><i class="fa fa-key"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    @else
                        <a href="#" class="button" id="evaluacionfinalModal">
                            <div class="panel-footer">
                                <span class="pull-left"><strong>Evaluacion {{$empresa->nombrecortoge}}</strong></span>
                                <span class="pull-right"><i class="fa fa-key"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-users"></i> Socios</h3>
            </div>
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
                        <tr class="success">
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
        <span class="label label-success">La fila marcada es el representante legal.</span>
        </div>
        </div>
        <div class="col-lg-12" ng-controller="actividadesCtrl">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-suitcase"></i> Actividades</h3>
                </div>
                <div class="panel-body">

<ul class="timeline" ng-repeat="itemActividad in actividades">
    <li class="titleActividad">
        <div class="timeline-badge info"><p>@{{$index +1}}</p></div>
    </li>
    <li>
        <div class="timeline-badge"><img src="/img/foto_consultor/20141106024403_leticia.jpg"></div>
        <div class="timeline-panel">
            <div class="timeline-heading">
                <h4 class="timeline-title">@{{itemActividad.nombre}}</h4>
                <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> @{{itemActividad.fecha}}</small></p>
                <hr>
            </div>
            <div class="timeline-body">
                <p>@{{itemActividad.descripcion}}</p>
            </div>
        </div>
    </li>
    <li class="timeline-inverted">
        <div class="timeline-badge"><img src="/img/logo_grupo_empresas/20141015055355_work_at_home.png"></i></div>
        <div class="timeline-panel">
            <div class="timeline-heading">
                <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                <hr>
            </div>
            <div class="timeline-body">
                <p>Mussum ipsum cacilds.</p>
            </div>
        </div>
    </li>
</ul>
    <hr>
<div class="agregarActividad">
<form class="form-inline" role="form" ng-submit="addActividad()">
  <div class="form-group">
    <label for="nombre">Nombre:</label>
    <input type="text" class="form-control" id="nombre" placeholder="Nombre de la actividad" ng-model="actividad.nombre">
  </div>
  <div class="form-group">
    <label for="fecha">fecha:</label>
    <input type="text" class="form-control" id="fecha" placeholder="Fecha de actividad" ng-model="actividad.fecha">
  </div>
  <div class="form-group">
    <label for="fecha">Descripcion::</label>
    <input type="text" class="form-control" id="descripcion" placeholder="Descripcion" ng-model="actividad.descripcion">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox" ng-model="actividad.respuesta"> Respuesta requerida
    </label>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox" ng-model="actividad.global"> Actividad Global
    </label>
  </div>
  <button type="submit" class="btn btn-success">Agregar</button>
</form>
</div>
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
            {{ Form::open(array('url'=>URL::current(),'files'=>true, 'class'=>'form-horizontal','id'=>'validatorForm2')) }}
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {{ Form::label('id',$empresa->nombrelargoge, array('class'=>'control-label')); }}
                            {{  Form::hidden('id',$empresa->codgrupo_empresa,array('class'=>'form-control')); }}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            {{ Form::label('observaciones', 'observaciones', array('class'=>'control-label')); }}
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
                            {{  Form::text('idhito','',array('class'=>'form-control','disabled'=>'disabled')); }}
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
                            {{ Form::label('porcentaje', 'porcentaje alcanzado', array('class'=>'control-label')); }}
                            {{ Form::text('porcentaje','',array('class'=>'form-control','autofocus'=>'autofocus')); }}
                        </div>
                    </div>
                    <div class="col-md-2">
                        <p style="font-size:2em;">/50%</p>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            {{ Form::label('observaciones', 'observaciones', array('class'=>'control-label')); }}
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
