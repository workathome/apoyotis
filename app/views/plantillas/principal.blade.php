<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Apoyo Tis</title>
    {{ HTML::script('js/jquery-2.1.1.min.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::style( 'css/bootstrap.min.css') }}
    {{ HTML::style( 'css/' ) }}
    @yield('cabecera')
  </head>
  <body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Apoyo TIS</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Inicio</a></li>
              <li><a href="#">Noticias</a></li>
              <li><a href="#">Foro</a></li>
              <li><a href="#">Contacto</a></li>
            </ul>
            <ul class="nav navbar-right">
              <li><a href="#" class="btn btn-success">Ingresar</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      @yield('contenido')
  </body>
</html>
