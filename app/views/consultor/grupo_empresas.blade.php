@extends('plantillas.consultor')

@section('contenido1')
    <div class="row">
        <div class="col-mg-12">
            <ul class="breadcrumb">
                <li><a href="/consultor"><i class="fa fa-fw fa-home"></i> Inicio</a></li>
                <li><a><i class="fa fa-fw fa-users"></i> Grupo Empresas</a></li>
            </ul>
        </div>
    </div>
    @foreach( $empresas as $empresa )
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">{{ $empresa->nombrelargoge}} <small>{{ $empresa->nombrecortoge }}</small></h1>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-users"></i> Socios</h3>
            </div>
            <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-nonfluid">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Cargo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $empresa->socios as $key => $socio )
                        @if( $socio->tipoSocio->nombretipo != "socio")
                        <tr class="info">
                        @else
                        <tr>
                        @endif
                            <td>{{ $key +1 }}</td>
                            <td>{{ $socio->nombresocio }}</td>
                            <td>{{ $socio->apellidossocio }}</td>
                            <td>{{ $socio->correoelectronicosocio }}</td>
                            <td>{{ $socio->telefonosocio }}</td>
                            <td>{{ $socio->cargo }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <span class="label label-info">La fila marcada es el representante legal.</span>
        </div>
        </div>
        </div>
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-file-text"></i> Documentos subidos</h3>
                </div>
                <div class="panel-body">
                    <div class="list-group">
                        @foreach (DocumentoActividad::where("id_grupo_empresa","=",$empresa->codgrupo_empresa)->get() as $key => $value)
                       <a href="{{$value->pathdocumento_actividad}}" class="list-group-item" target="_blank">
                            <span class="badge">{{$value->created_at}}</span>
                            <i class="fa fa-fw fa-file"></i>
                            {{ $value->nombre_documento_actividad }}
                        </a>
                        @endforeach
                    </div>
                        <span class="label label-warning">Seleccione un documento para descargar.</span>
                </div>
            </div>
        </div>
        </div>
    @endforeach
@stop
