@extends('plantillas.principal')
@section('cabecera')
    {{ HTML::style('css/inicio.css') }}
@stop

@section('contenido')
<div class="container">
        <div id="wrapper">
            <!-- Jumbotron Header -->
            <header class="jumbotron">
                <h1>TIS</h1>
                <p>La empresa TIS se dedica a hacer algo.....</p>
            </header>

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
                            <img src={{ $consultor->fotoconsultor }} >
                        <div class="caption">
                            <h3>{{ $consultor->nombreconsultor }} {{ $consultor->apellidopaternoconsultor }}</h3>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- /.row -->
        </div>
        <div id="blog-sidebar" class="col-sm-3">
            <h3>Documentos</h3>
            <ol class="list-unstyled">

            @foreach($documentos as $documento)
              <li><p>{{ $documento->created_at }}
                    {{ $documento->consultor['nombreconsultor'] }}, {{ $documento->consultor['apellidopaternoconsultor'] }} subio {{ $documento->titulo_consdocumento }} <a href={{$documento->pathdocumentoconsultor }} target="_blank" > <span class="glyphicon glyphicon-save"></span> </a></p></li>
              @endforeach
            </ol>
        </div>
@stop
