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
        <!--<ul class="sidebar-nav nav nav-pills nav-stacked" role="tablist">
            <li class=""><a class="list-group-item" href="/consultor/subirdocpublico">Subir Documento</a></li>

            @if(Proyecto::vigente())
            	<li><a class="list-group-item" href="/consultor/verproyecto">Ver Proyecto</a></li>
            @else
            	<li><a class="list-group-item" href="/consultor/crearproyecto">Crear Proyecto</a></li>
            @endif

            <li><a class="list-group-item" href="/consultor/grupoempresas">Grupo Empresas</a></li>
        </ul>
    </div>-->
@stop
@section('contenido')
    @yield('contenido1')
@stop
