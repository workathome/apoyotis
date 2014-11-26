<!DOCTYPE html>
<html ng-app="generador">
    <head ng-non-bindable>
        {{ HTML::script('components/jquery/dist/jquery.min.js') }}
        {{ HTML::style('components/bootstrap/dist/css/bootstrap.min.css') }}
        {{ HTML::script('components/bootstrap/dist/js/bootstrap.min.js') }}
        {{ HTML::script('components/angular/angular.min.js') }}
        {{ HTML::style('components/font-awesome/css/font-awesome.min.css') }}
        {{ HTML::script('components/angular-bootstrap/ui-bootstrap.min.js') }}
        {{ HTML::script('js/angularPdf.js') }}
        {{ HTML::style( 'css/sesion.css') }}
        {{ HTML::style('css/generador.css') }}
    </head>
    <body>
        <div id="space">
        </div>
        <div ng-controller="pdfController" id="wrapper">
            <nav  ng-if="navi" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
                    <li><a href="#">Noticias</a></li>
                    @if (!Auth::check())
                        <li>
                            <a href="/login"><button class="btn btn-xs btn-success">Ingresar</button></a>
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
                            <img src="{{ Auth::user()->grupoempresa->logoge }}" >
                            @else
                            <i class="fa fa-2x fa-user"></i>
                            @endif
                            </a>
                            <ul class="dropdown-menu"> 
                                <li><a href="/logout"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>  Salir</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </nav>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div  class="row" width="100%" height="5em">
                            @if ($pdf)
                                    <a target="_blank" href="{{$pdf}}">Descargar Pdf Generado</a>
                            @endif
                            {{ Form::open(array('files'=>true, 'class'=>'form-horizontal', 'id'=>'upForm') ) }}
                                <h1>Generar Latex</h1>
                                <div class="form-group col-md-6">
                                    {{Form::textarea("latex", $esqueleto ,array("class"=>'form-controll'))}}
                                </div>
                                <div ng-if="fileExists()" class="col-md-6">
                                    <iframe id="viewer" width="100%" height="100%" src = "/components/bower-viewerjs/#{{$pdf}}" allowfullscreen webkitallowfullscreen></iframe> 
                                
                                </div>
                                <div class="form-group col-md-2">
                                    {{ Form::submit('Generar',array('class'=>'btn-primary btn btn-md btn-block')); }}
                                </div>
                            {{ Form::close() }}
    <pre>@{{navi}}</pre>
                    <button type="button" class="btn btn-primary" ng-model="navi" btn-checkbox btn-checkbox-true="1" btn-checkbox-false="0">
        Ocultar
    </button>
                    </div>
                </div>
            </div>
    </div>
    </body>
</html>
