@extends('plantillas.principal')
@section('cabecera')
{{ HTML::style('css/grupo-empresa.css') }}
@yield('cabecera1')
@stop
@section('navegacion')
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="/grupoempresa">
            <i class="fa fa-fw fa-home"></i>Inicio</a></li>
            <li><a href="javascript:;" data-toggle="collapse" data-target="#dropProyecto">
                <i class="fa fa-fw fa-cog"></i> Proyecto
                <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="dropProyecto" class="collapse">
                    <li><a href="/grupoempresa/subirdocumento">
                        <i class="fa fa-fw fa-upload"></i> Subir parte A</a></li>
                </ul>
            </li>
            <li><a href="/grupoempresa/registrarsocio"><i class="fa fa-fw fa-users"></i> Socios</a></li>
            <li><a href="#"><i class="fa fa-fw fa-calendar"></i> Calendario</a></li>
        </ul>
    </div>
@stop
@section('contenido')
    @yield('contenido1')
@stop
