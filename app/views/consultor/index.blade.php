@extends('plantillas.principal')
@section('cabecera')

{{ HTML::style('css/grupo-empresa.css') }}

@section('contenido')
<div class="container">
        <h1>vista consultor</h1>

<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav nav nav-pills nav-stacked" role="tablist">
            <li class=""><a class="list-group-item" href="consultor/subirdocpublico">Subir Documento Publico</a></li>
            <li><a class="list-group-item" href="">Proyecto</a></li>
            <li><a class="list-group-item" href="#">Grupo Empresas</a></li>
        </ul>
    </div>

    <div id="page-content-wrapper">
        <div class="page-content">
            <div class="container">
                <h2>Actividades</h2>
                <ul>
                    
                    @foreach($documentos as $documento)
                        <li><p><strong>{{$documento->updated_at}}</strong>,  La Grupo-Empresa <strong>{{$documento->grupoempresa["nombrelargoge"]}}</strong>Subio un documento <strong>{{$documento->titulo_gedocumento }}</strong> con la siguiente descripción {{$documento->descripciongedocumento}} <a href={{$documento->pathdocumentoge }}>    <span class="glyphicon glyphicon-save"></span></a></p></li>
                    @endforeach
                </ul>
                <div class="row">
                    <div class="col-md-12">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@stop
