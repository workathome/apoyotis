<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Apoyo Tis</title>
    {{ HTML::script('js/jquery.min.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::style( 'css/bootstrap.min.css') }}
    {{ HTML::style( 'css/sesion.css ')}}
    @yield('cabecera')
  </head>
  <body>
    <div id="wrapper">
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
                <li><a href="#">Noticias</a></li>
                <li><a href="#">Nosotros</a></li>
                @if (!Auth::check())
                    <li>
                        <a href="/login"><button class="btn btn-xs btn-success">Ingresar</button></a>
                    </li>
                @else
                    <li><a href="/{{ str_replace("-","",Auth::user()->roles[0]->tiporol)}}">+
                        @if( Auth::user()->roles[0]->tiporol == 'consultor')
                            {{ Auth::user()->consultor["nombreconsultor"] }}
                        @elseif(Auth::user()->roles[0]->tiporol == 'grupo-empresa')
                            {{ Auth::user() }}
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
                        @endif
                        </a>
                        <ul class="dropdown-menu"> 
                            <li><a href="/logout">salir</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </nav>
    <div id="page-wrapper">
        <div class="container-fluid">
          @yield('contenido')
        </div>
    </div>
    </div>
  </body>
</html>
