@extends('plantillas.consultor')

@section('contenido1')
    <div id="page-content-wrapper">
        <div class="page-content">
            <div class="container">
                <h2>Actividades</h2>
                <ul>
                    
                    @foreach($documentos_empresas as $documento)
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
@stop
