@extends('plantillas.principal')
@section('cabecera')
    {{ HTML::style('css/inicio.css') }}
@stop

@section('contenido')
<div class="container">
    <h1>Página Inicio</h1>
    <ul>
        @if ( Auth::check() )
          <li>{{ HTML::link('/','Inicio') }}</li>
          <li>{{ HTML::link('/logout', 'Salir') }}</li>

          @endif
    </ul>
<!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>TIS</h1>
            <p>La empresa TIS se dedica a hacer algo.....</p>
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Consultores</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center fotos">
            <!--Inicio de la muestra de los consultores registrados-->
            @foreach($consultores as $consultor)

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src={{ $consultor->fotoconsultor }} alt="">
                    <div class="caption">
                        <h3>{{ $consultor->nombreconsultor }} {{ $consultor->apellidopaternoconsultor }}</h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- /.row -->

        <hr>
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module">
            <h4>Documentos</h4>
            <ol class="list-unstyled">

            @foreach($documentos as $documento)
              <li><p>{{ $documento->created_at }}
                    {{ $documento->consultor['nombreconsultor'] }}, {{ $documento->consultor['apellidopaternoconsultor'] }} subio <a href={{$documento->pathdocumentoconsultor }} target="_blank" > {{ $documento->titulo_consdocumento }}</a></p></li>
              @endforeach
            </ol>
          </div>
</div>
@stop
