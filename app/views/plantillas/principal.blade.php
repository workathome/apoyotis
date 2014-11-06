<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Apoyo Tis</title>
    {{ HTML::script('js/jquery-2.1.1.min.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::style( 'css/bootstrap.min.css') }}
    {{ HTML::style( 'css/sesion.css ')}}
    @yield('cabecera')
  </head>
  <body>
    <nav class="navbar navbar-default navbar-inverse" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Apoyo TIS</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="/">Inicio</a></li>
              <li><a href="#">Noticias</a></li>
              <li><a href="#">Foro</a></li>
              <li><a href="#">Contacto</a></li>
            </ul>

            @if (!Auth::check())
            <ul class="nav navbar-right">
                <li><a href="/login" class="btn btn-success">Ingresar</a></li>
            </ul>
            @else
            <ul class="nav navbar-right navbar-nav">
                <li>
                    <div id="sesiones">

                  <a href="{{Auth::user()->roles[0]->tiporol}}">
                    <img src={{ Auth::user()->consultor["fotoconsultor"] }} >
                  </a>
                    </div>
                </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">  {{ Auth::user()->consultor["nombreconsultor"] }}  <span class="glyphicon glyphicon-chevron-down color-white"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="divider"></li>
                            <li><a href="/logout">Salir</a></li>
                        </ul>
                    </li>
            </ul>
            @endif

          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      @yield('contenido')
  </body>
</html>
