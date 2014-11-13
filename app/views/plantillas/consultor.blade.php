@extends('plantillas.principal')
@section('cabecera')
{{ HTML::style('css/grupo-empresa.css') }}
@yield('cabecera1')
@stop

@section('navegacion')
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li><a href="/consultor"><i class="fa fa-fw fa-home"></i> Inicio</a></li>

            <li class="active">
            @if(Proyecto::vigente())
                <a href="/consultor/proyecto"><i class="fa fa-fw fa-cogs"></i> Proyecto</a>
            @else
                <a href="/consultor/crearproyecto"><i class="fa fa-fw fa-plus"></i> Crear Proyecto</a>
            @endif
            <li>
            <li><a href="/consultor/grupoempresas"><i class="fa fa-fw fa-users"></i> Grupo Empresas</a></li>
        </ul>
    </div>
@stop
@section('contenido')
    @yield('contenido1')
@stop
