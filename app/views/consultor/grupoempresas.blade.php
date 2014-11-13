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
            <h2>Grupo empresa: {{ $empresa->nombrelargoge}}</h2>

            <ul>
            @foreach (DocumentoActividad::where("id_grupo_empresa","=",$empresa->codgrupo_empresa)->get() as $key => $value)
                <h3>Parte A</h3>
                <li>
                    <h5>{{ $value->nombre_documento_actividad }}</h5>
                    <h5>{{ $value->created_at }}</h5>
                    <a class="btn btn-primary" href="{{$value->pathdocumento_actividad}}">Visualizar</a>
                </li>
            @endforeach
            </ul>

                @foreach( $empresa->socios as $key => $socio )
                <h4>Socio {{ $key+1 }}</h4>
                <ul>
                    <li>
                        Nombre: {{ $socio->nombresocio }}
                    </li>
                    <li>
                        Apellidos: {{ $socio->apellidossocio }}
                    </li>
                    <li>
                        Correo Electronico: {{ $socio->correoelectronicosocio }}
                    </li>
                    <li>
                        Teléfono: {{ $socio->telefonosocio }}
                    </li>
                    <li>
                        Cargo: {{ $socio->cargo }}
                    </li>
                    <li>
                        Dirección: {{ $socio->direccion }}
                    </li>
                    <li>
                        Estado Civil: {{ $socio->estadocivil }}
                    </li>
                    <br>
                </ul>
                @endforeach
        @endforeach
@stop

