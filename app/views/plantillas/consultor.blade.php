@extends('plantillas.principal')
@section('cabecera')
{{ HTML::style('css/grupo-empresa.css') }}
@yield('cabecera1')
@stop

@section('navegacion')
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="{{Request::path() == 'consultor' ? 'active' : '';}}"><a href="/consultor"><i class="fa fa-fw fa-home"></i> Inicio</a></li>

            <li class="{{Request::path() == 'consultor/proyecto' | Request::path() == 'consultor/crearproyecto' ? 'active' : '';}}">
            @if(Proyecto::vigente())
                <a href="/consultor/proyecto"><i class="fa fa-fw fa-cogs"></i> Proyecto</a>
            @else
                <a href="/consultor/crearproyecto"><i class="fa fa-fw fa-plus"></i> Crear Proyecto</a>
            @endif
            <li>
            <li class="{{Request::path() == 'consultor/grupoempresas' ? 'active' : '';}}">
                <a href="javascript:;" data-toggle="collapse" data-target="#dropGrupoEmpresas">
                <i class="fa fa-fw fa-users"></i> Grupo Empresas</a>
                <!--<a href="/consultor/grupoempresas"><i class="fa fa-fw fa-users"></i> Grupo Empresas</a>-->
                    <ul id="dropGrupoEmpresas" class="collapse">

                        @foreach(ConsultorProyectoGrupoEmpresa::ConsultorEmpresas() as $empresa)
                            <li><a href="/consultor/grupoempresa/{{$empresa->grupoEmpresa->codgrupo_empresa}}"><i class="fa fa-fw fa-chevron-right"></i>
                            {{ $empresa->grupoEmpresa->nombrelargoge }}</a></li>
                        @endforeach
                    </ul>
            </li>

        </ul>
    </div>
@stop
@section('contenido')
    @yield('contenido1')
@stop
