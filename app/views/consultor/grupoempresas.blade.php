@extends('plantillas.consultor')

@section('contenido1')

<div id="page-content-wrapper" class="span9 pull-right">
    <div class="page-content">

        @foreach( $empresas as $empresa )
            <h1>{{ $empresa->nombrelargoge}}</h1>
                @foreach( $empresa->socios as $socio )
                <ul>
                    <li>
                        {{ $socio->nombresocio }}
                    </li>
                    <li>
                        {{ $socio->apellidossocio }}
                    </li>
                    <li>
                        {{ $socio->correoelectronicosocio }}
                    </li>
                    <li>
                        {{ $socio->telefonosocio }}
                    </li>
                    <li>
                        {{ $socio->cargo }}
                    </li>
                    <li>
                        {{ $socio->direccion }}
                    </li>
                    <li>
                        {{ $socio->estadocivil }}
                    </li>
                    <br>
                </ul>
                @endforeach
        @endforeach

    </div>
</div>
@stop
