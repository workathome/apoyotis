@extends('plantillas.grupo_empresa')
@section('cabecera1')
{{ HTML::script('components/angular/angular.min.js')}}
{{ HTML::script('js/grupo-empresa-angular.js') }}
{{ HTML::style('css/timeline.css') }}
@stop

@section('contenido1')
    <div class="row">
        <div class="col-mg-12">
            <ul class="breadcrumb">
                <li><a href="/grupoempresa"><i class="fa fa-fw fa-home"></i> Inicio</a></li>
                <li><a><i class="fa fa-fw fa-calendar"></i> Actividades</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Actividades</h1>
        </div>
    </div>
<div class="actividadesContenedor" ng-controller="actividades-grupoCtrl">
    <div class="agregarActividad">
    <form class="form-inline" role="form" ng-submit="addRespuesta()">
      <div class="form-group">
        <label for="titulo">Titulo:</label>
        <input type="text" class="form-control" id="nombre" placeholder="Nombre de la actividad" ng-model="respuesta.titulo">
      </div>
      <div class="form-group">
        <label for="descripcion">Descripcion:</label>
        <input type="text" class="form-control" id="descripcion" placeholder="Fecha de actividad" ng-model="respuesta.descripcion">
      </div>
      <div class="form-group">
        <label for="documento">Documento:</label>
        <input type="text" class="form-control" id="documento" placeholder="Descripcion" ng-model="actividad.descripcion">
      </div>
      <button type="submit" class="btn btn-success">Responder</button>
    </form>
    </div>
    <hr>
    <ul class="timeline" ng-repeat="itemActividad in actividades">
        <li class="titleActividad">
            <div class="timeline-badge info"><p>@{{$index +1}}</p></div>
        </li>
        <li>
            <div class="timeline-badge"><img src="/img/foto_consultor/20141106024403_leticia.jpg"></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title">@{{itemActividad.titulo}}</h4>
                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> @{{itemActividad.fecha}}</small></p>
                    <hr>
                </div>
                <div class="timeline-body">
                    <p>@{{itemActividad.descripcion}}</p>
                    <p>@{{itemActividad.documento}}</p>

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
</div>
@stop
