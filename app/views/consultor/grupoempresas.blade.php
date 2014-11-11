@extends('plantillas.consultor')

@section('contenido1')
        @foreach( $empresas as $empresa )
            <h2>Grupo empresa: {{ $empresa->nombrelargoge}}</h2>

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
