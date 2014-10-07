<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Apoyo Tis</title>
    {{ HTML::script('js/jquery-2.1.1.min.js') }}
    {{ HTML::style( 'css/' ) }}
    @yield('cabecera')
  </head>
  <body>
      @yield('contenido')
  </body>
</html>
