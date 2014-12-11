@extends('plantillas.principal')
@section('cabecera')
{{ HTML::style('css/grupo-empresa.css') }}
@yield('cabecera1')
@stop
@section('navegacion')
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="{{Request::path() == 'grupoempresa' ? 'active' : '';}}"><a href="/grupoempresa">
            <i class="fa fa-fw fa-home"></i>Inicio</a></li>
            <li class="{{Request::path() == 'grupoempresa/subirdocumento' ? 'active' : '';}}"><a href="javascript:;" data-toggle="collapse" data-target="#dropProyecto">
                <i class="fa fa-fw fa-cog"></i> Proyecto
                <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="dropProyecto" class="collapse">
                    <li><a href="/grupoempresa/actividades">
                        <i class="fa fa-fw fa-calendar"></i> Actividades</a></li>
                    <li><a href="/grupoempresa/planpagos">
                        <i class="fa fa-fw fa-thumb-tack"></i> Plan de Pagos</a></li>
                </ul>
            </li>
            <li class="{{Request::path() == 'grupoempresa/registrarsocio' ? 'active' : '';}}"><a href="/grupoempresa/registrarsocio"><i class="fa fa-fw fa-users"></i> Socios</a></li>
        </ul>
    </div>
@stop
@section('contenido')
    @yield('contenido1')
@stop
