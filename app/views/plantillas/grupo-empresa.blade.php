@extends('plantillas.principal')
@section('cabecera')
{{ HTML::style('css/grupo-empresa.css') }}
{{ HTML::script('js/grupo-empresa.js') }}
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
                    <li><a href="/grupoempresa/subirdocumento">
                        <i class="fa fa-fw fa-upload"></i> Subir parte A</a></li>
                </ul>
            </li>
            <li class="{{Request::path() == 'grupoempresa/registrarsocio' ? 'active' : '';}}"><a href="/grupoempresa/registrarsocio"><i class="fa fa-fw fa-users"></i> Socios</a></li>
            <li><a href="#"><i class="fa fa-fw fa-calendar"></i> Calendario</a></li>
        </ul>
    </div>
@stop
@section('contenido')
    @yield('contenido1')
@stop
