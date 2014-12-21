@extends('plantillas.grupo_empresa')
@section('cabecera1')
    {{ HTML::script('components/angular/angular.min.js')}}
    {{ HTML::script('js/grupo-empresa-angular.js') }}
    {{ HTML::script('components/moment/moment.js') }}
    {{ HTML::script('components/moment/locale/es.js') }}
    {{ HTML::script('components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}
    {{ HTML::style('components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}
    <script>
         
$(function () {
    $('#datetimepicker3').datetimepicker({
        autoclose:true,
        format : 'YYYY-MM-DD HH:mm:ss',
        showSeconds: true,
        language: "es"
    });
});
    </script>
@stop
@section('contenido1')
    <div ng-controller="planController">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-header"> Plan de Pagos</h2>
            </div>
        </div> 
        <div class="row">
            <form class="form-inline" role="form" ng-submit="addHito()">
                <div class="col-md-3">
                    <label for="nombre">Nombre de Hito</label>
                    <input ng-model="hito.nombre" type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre del Hito">
                </div>
                <div class="col-md-3">
                    <label for="fecha">Fecha de Entrega</label>
                    <div class="input-group date" id="datetimepicker3">
                        <input ng-model="hito.fecha" type="text" class="form-control" id="fecha" placeholder="Ingrese la fecha" readonly>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="entregables">Entregables</label>
                    <input ng-model="hito.entregables" type="text" class="form-control" id="entregables" placeholder="entregables (separe con comas)">
                </div>
                <div class="col-md-3">
                    <label for="satisfaccion">Porcentaje de satisfaccion</label>
                    <input ng-model="hito.satisfaccion" type="text" class="form-control" id="satisfaccion" placeholder="Satisfaccion">
                </div>
                <div class="col-md-3">
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
                            <a data-toggle="collapse" data-parent="#accordion" href="#@{{itemhito.nombre.split(' ').join('_')}}" aria-expanded="true" aria-controls="collapseOne">
                                @{{itemhito.nombre}}
                            </a>

                            </h4>
                            <div class="pull-right">
                            <span class="input-group-btn">
                                <button ng-click="removeHito($index)" class="btn btn-danger" aria-label="Remove">X</button>
                            </span> </div>
                        </div>
                        <div id="@{{itemhito.nombre.split(' ').join('_')}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <ul class="list-group">
                                <li class="list-group-item"><strong>Nombre: </strong>@{{itemhito.nombre}}
                                <li class="list-group-item"><strong>Fecha: </strong>@{{itemhito.fecha}}
</li>
                                <li class="list-group-item"><strong>Porcentaje : </strong>@{{itemhito.satisfaccion}}</li>
                                <li class="list-group-item"><strong>Entregables : </strong>@{{itemhito.entregables}}</li>
                            </ul>
                        </div>
                    </div>
                </div>                       
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-0 col-md-2">
            <button class="btn btn-primary" ng-click="sendPlan()">Enviar</button>
            </div>
        </div>
        <div class="row" ng-if="hitosucces || hitoerror">
            <hr>
            <div class="col-md-12">
                <div class="alert alert-info" role="alert" ng-if="hitosucces">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                El plan de pagos fue correctamente definido.
                </div>
            </div>
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert" ng-if="hitoerror">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                El plan de pagos no fue definido, <strong>Imposible comunicarse con el servidor</strong>
                </div>
            </div>
        </div>
    </div>
@stop
