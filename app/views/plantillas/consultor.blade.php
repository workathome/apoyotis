@extends('plantillas.principal')
@section('cabecera')
{{ HTML::style('css/grupo-empresa.css') }}
@yield('cabecera1')
@stop

@section('contenido')
<div class="container-fluid">
<div id="wrapper">
    <div id="sidebar-wrapper" class="span3">
        <ul class="sidebar-nav nav nav-pills nav-stacked" role="tablist">
            <li class=""><a class="list-group-item" href="/consultor/subirdocpublico">Subir Documento</a></li>

            @if(Proyecto::vigente())
            	<li><a class="list-group-item" href="/consultor/verproyecto">Ver Proyecto</a></li>
            @else
            	<li><a class="list-group-item" href="/consultor/crearproyecto">Crear Proyecto</a></li>
            @endif

            <li><a class="list-group-item" href="/consultor/grupoempresas">Grupo Empresas</a></li>
        </ul>
    </div>
    @yield('contenido1')
</div>
</div>
@stop
