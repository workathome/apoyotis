@extends('plantillas.consultor')
@section('contenido1')

    <span>Nombre proyecto</span> {{$proyecto->nombreproyecto}} <br/>
    <span>Fecha de inicio</span> {{$proyecto->created_at}} <br>
    <a href="{{URL::to('consultor/proyecto/subirdocumento')}}">Subir documento</a>
@stop
