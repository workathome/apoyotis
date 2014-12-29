@extends('plantillas.grupo_empresa')
@section('cabecera1')
    {{ HTML::script('components/angular/angular.min.js')}}
    {{ HTML::script('js/grupo-empresa-angular.js') }}
    {{ HTML::script('components/moment/moment.js') }}
    {{ HTML::script('components/moment/locale/es.js') }}
    {{ HTML::script('components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}
    {{ HTML::style('components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}
    {{ HTML::style('css/planpagos.css') }}
    {{ HTML::script('js/planpagos.js') }}
@stop
@section('contenido1')
    <div ng-controller="planController">
    @if(!$fijado)
        <div class="modal fade" id="diaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="/grupoempresa" class="close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span> </a>
                        <h4 class="modal-title" id="myModalLabel">Plan de Pagos</h4>
                    </div>

                    <div class="modal-body">
                        <div class="stepwizard">
                            <div class="stepwizard-row setup-panel">
                                <div class="stepwizard-step">
                                    <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                                    <p>Monto</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                    <p>Satisfaccion</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                    <p>Dia</p>
                                </div>
                            </div>
                        </div>
                        {{ Form::open(array('class'=>'form-horizontal','id'=>'diaForm')) }}
                            <div class="row setup-content" id="step-1">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <h3> Definir Monto</h3>
                                        <p>Defina el monto total del costo del sistema.</p> 
                                        <div class="form-group">
                                            {{ Form::label('monto','Monto',array('class'=>'control-label')); }}
                                            {{ Form::text('monto','',
                                                        array('class'=>'form-control',
                                                                'required'=>'required',
                                                                'maxlength'=>'10',
                                                                'placeholder'=>'Ingrese Monto')
                                                        ); }}
                                            <!--<label class="control-label">Monto</label>
                                            <input  maxlength="10" type="text" required="required" class="form-control" placeholder="Ingresar Monto"  />-->
                                        </div>
                                        <hr>
                                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Siguiente</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row setup-content" id="step-2">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <h3> Porcentaje de Satisfaccion</h3>
                                        <p>Defina el porcentaje de satisfaccion, para la evaluacion de sus hitos.</p>
                                        <div class="form-group">
                                            {{ Form::label('satisfaccion','Satisfaccion(%)',
                                                            array('class'=>'control-label')
                                                            ); }}
                                            {{ Form::text('satisfaccion','',
                                                            array('class'=>'form-control',
                                                                    'required'=>'required',
                                                                    'maxlength'=>'3',
                                                                    'placeholder'=>'Ingrese Porcentaje')
                                                            ); }}
                                        </div>
                                        <hr>
                                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Siguiente</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row setup-content" id="step-3">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <h3> Dia de reunion</h3>
                                        <p>Defina su dia de reunion en la semana, tanto para hitos pagables como para avance semanal.</p>
                                         {{ Form::label('dia','Dia'); }}
                                        {{ Form::select('dia', $rango_dias, Input::old('dia'), array('class'=>'form-control','name'=>'dia')); }}
                                        <hr>
                                        {{ Form::submit('Guardar',array('class'=>'btn btn-success btn-lg pull-right')); }}
                                    </div>
                                </div>
                            </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    @endif
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
                        <input ng-model="hito.fecha" type="text" class="form-control" id="fecha" placeholder="Ingrese la fecha" onfocus="blur();">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="entregables">Entregables</label>
                    <input ng-model="hito.entregables" type="text" class="form-control" id="entregables" placeholder="entregables (separe con comas)">
                </div>
                <div class="col-md-3">
                    <label for="porcentaje">Porcentaje(%)</label>
                    <input ng-model="hito.porcentaje" type="text" class="form-control" id="porcentaje" placeholder="Porcentaje del hito">
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
                                <li class="list-group-item"><strong>Porcentaje del hito: </strong>@{{itemhito.porcentaje}}</li>
                                <li class="list-group-item"><strong>Entregables : </strong>@{{itemhito.entregables}}</li>
                            </ul>
                        </div>
                    </div>
                </div>                       
            </div>
        </div>
        <div class="row" ng-if="plan.length">
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
