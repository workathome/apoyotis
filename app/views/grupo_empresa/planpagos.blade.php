@extends('plantillas.grupo_empresa')
@section('cabecera1')
    {{ HTML::script('components/angular/angular.min.js')}}
    {{ HTML::script('js/grupo-empresa-angular.js') }}
@stop
@section('contenido1')
    <div ng-controller="planController">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-header"> Plan de Pagos</h2>
            </div>
        </div> 
        <div class="row">
            <form role="form" ng-submit="addHito()">
                <div class="col-md-2">
                    <input ng-model="hito.nombre" type="text" class="form-control" id="fecha" placeholder="Ingrese el nombre del Hito">
                </div>
                <div class="col-md-2">
                    <input ng-model="hito.fecha" type="text" class="form-control" id="fecha" placeholder="Ingrese la fecha">
                </div>
                <div class="col-md-2">
                    <input ng-model="hito.entregables" type="text" class="form-control" id="entregables" placeholder="entregables (separe con comas)">
                </div>
                <div class="col-md-2">
                    <input ng-model="hito.satisfaccion" type="text" class="form-control" id="satisfaccion" placeholder="Satisfaccion">
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary">Agregar</button>
                </div>
            </form>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default" ng-repeat="itemhito in plan">
                        <div class="panel-heading clearfix" role="tab" id="headingOne">
                            <h4 class="panel-title pull-left">
                            <a data-toggle="collapse" data-parent="#accordion" href="#@{{itemhito.nombre}}" aria-expanded="true" aria-controls="collapseOne">
                                @{{itemhito.nombre}}
                            </a>

                            </h4>
                            <div class="pull-right">
                            <span class="input-group-btn">
                                <button ng-click="removeHito($index)" class="btn btn-danger" aria-label="Remove">X</button>
                            </span> </div>
                        </div>
                        <div id="@{{itemhito.nombre}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                @{{itemhito.fecha}}
                                <br>
                                @{{itemhito.entregables}}
                                <br>
                                @{{itemhito.satisfaccion}}
                            </div>
                        </div>
                    </div>
                </div>                       
            </div>
        </div>
    </div>
@stop
