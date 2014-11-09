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
            <li><a class="list-group-item" href="/consultor/crearproyecto">Proyecto</a></li>
            <li><a class="list-group-item" href="#">Grupo Empresas</a></li>
        </ul>
    </div>
    @yield('contenido1')
</div>
</div>
@stop
