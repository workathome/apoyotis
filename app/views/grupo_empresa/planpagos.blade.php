<!doctype html>
<html lang="es" ng-app="app">
  <head>
    <meta charset="UTF-8">
    <title>Apoyo Tis</title>
    {{ HTML::script('components/jquery/dist/jquery.min.js') }}
    {{ HTML::script('components/bootstrap/dist/js/bootstrap.min.js') }}
    {{ HTML::style('components/font-awesome/css/font-awesome.min.css') }}
    {{ HTML::style( 'components/bootstrap/dist/css/bootstrap.min.css') }}
    {{ HTML::style('components/angular/angular.min.js')}}
    {{ HTML::style( 'css/sesion.css')}}
    {{ HTML::style('css/grupo-empresa.css') }}
    {{ HTML::script('js/grupo-empresa-angular.js') }}
  </head>
  <body>
    <div id="space">
    </div>
    <div id="wrapper" ng-controller="planController">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Apoyo TIS</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Apoyo TIS</a>
            </div>
            <ul class="nav navbar-right top-nav">
                <li><a href="#">Foro</a></li>
                @if ( !Auth::check() )
                    <li>
                        <a href="/autentificarse"><button class="btn btn-xs btn-success">Ingresar</button></a>
                    </li>
                @else
                    <li><a href="/{{ str_replace("-","",Auth::user()->roles[0]->tiporol)}}">+
                        @if( Auth::user()->roles[0]->tiporol == 'consultor')
                            {{ Auth::user()->consultor["nombreconsultor"] }}
                        @elseif(Auth::user()->roles[0]->tiporol == 'grupo-empresa')
                            {{ Auth::user()->login }}
                        @else
                            Administrador
                        @endif
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" id="sesiones" class="dropdown-toggle" data-toggle="dropdown">
                        @if( Auth::user()->roles[0]->tiporol == 'consultor' )
                        <img src="{{ Auth::user()->consultor['fotoconsultor'] }}" >
                        @elseif (Auth::user()->roles[0]->tiporol == 'grupo-empresa')
                        <img src="{{ Auth::user()->grupoEmpresa->logoge }}" >
                        @else
                        <i class="fa fa-2x fa-user"></i>
                        @endif
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/salir"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>  Salir</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
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
        </nav>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header"> Plan de Pagos</h2>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-3">
                        <input ng-model="hito.fecha" type="text" class="form-control" id="fecha" placeholder="Ingrese la fecha">
                    </div>
                    <div class="col-md-3">
                        <input ng-model="hito.entregables" type="text" class="form-control" id="entregables" placeholder="entregables (separe con comas)">
                    </div>
                    <div class="col-md-3">
                        <input ng-model="hito.satifaccion" type="text" class="form-control" id="satisfaccion" placeholder="Satisfaccion">
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-primary">Agregar</button>
                    </div>
                </div>
                <div class="plan">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">Panel title</h3>
                      </div>
                      <div class="panel-body">
                        Panel content
                      </div>
                </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>
