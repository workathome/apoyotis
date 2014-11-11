@extends('plantillas.principal')
@section('cabecera')

{{ HTML::style('css/login.css') }}
{{ HTML::style('css/grupo-empresa.css') }}

@stop

@section('contenido')

<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav nav nav-pills nav-stacked" role="tablist">
            <li class=""><a class="list-group-item" href="grupoempresa/subirdocumento">Proyecto</a></li>
            <li><a class="list-group-item" href="grupoempresa/registrarsocio">Registrar Socio</a></li>
            <li><a class="list-group-item" href="#">Calendario</a></li>
        </ul>
    </div>

    <div id="page-content-wrapper">
        <div class="page-content">
            <div class="container">
                <h2>Actividades</h2>
                <ul>
                    <li><p>25 Sep: Consultor Juan Perez solicito una cita con usted.</p></li>

                    <li><p>25 Sep: Consultor Juan Perez solicito una cita con usted.</p></li>
                </ul>
                <div class="row">
                    <div class="col-md-12">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
