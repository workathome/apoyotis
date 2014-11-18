@extends('plantillas.consultor')

@section('contenido1')
    <div class="row">
        <div class="col-mg-12">
            <ol class="breadcrumb">
                <li class="active"><a><i class="fa fa-fw fa-home"></i> Inicio</a>
                </li>
            </ol>
        </div>
    </div>
    <h2>Actividades</h2>
    <ul>
        
        @foreach($documentos_empresas as $documento)
            <li><p><strong>{{$documento->updated_at}}</strong>,  La Grupo-Empresa <strong>{{$documento->grupoempresa["nombrelargoge"]}}</strong>Subio un documento <strong>{{$documento->titulo_gedocumento }}</strong> con la siguiente descripción {{$documento->descripciongedocumento}} <a href={{$documento->pathdocumentoge }}>    <span class="glyphicon glyphicon-save"></span></a></p></li>
        @endforeach
    </ul>
@stop
