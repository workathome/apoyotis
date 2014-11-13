@extends('plantillas.principal')
@section('cabecera')
{{ HTML::style('css/grupo-empresa.css') }}
@yield('cabecera1')
@stop

@section('navegacion')
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">

            <li class="active">
            @if(Proyecto::vigente())
                <a href="/consultor/proyecto">Proyecto</a>
            @else
                <a href="/consultor/crearproyecto">Crear Proyecto</a>
            @endif
            <li>
            <li><a href="/consultor/grupoempresas">Grupo Empresas</a></li>
        </ul>
    </div>
@stop
@section('contenido')
    @yield('contenido1')
@stop
