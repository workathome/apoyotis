
@extends('plantillas.principal')

@section('contenido')
<h1>Página Inicio</h1>
<ul>
@if ( Auth::check() )
          <li>{{ HTML::link('/','Inicio') }}</li>
          <li>{{ HTML::link('/logout', 'Salir') }}</li>

          @endif

        </ul>

@stop