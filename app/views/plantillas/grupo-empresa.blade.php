@extends('plantillas.principal')
@section('cabecera')
{{ HTML::style('css/grupo-empresa.css') }}
@yield('cabecera1')
@stop
@section('navegacion')
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="/grupoempresa/subirdocumento">Subir parte A</a><li>
            <li><a href="/grupoempresa/registrarsocio">Registrar Socio</a></li>
            <li><a href="#">Calendario</a></li>
        </ul>
    </div>
@stop
@section('contenido')
    @yield('contenido1')
@stop
