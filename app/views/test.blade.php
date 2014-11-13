@extends('plantillas.principal')
@section('cabecera')
    {{ HTML::style('css/inicio.css') }}
@stop



@section('contenido')
	@if ($pdf)
		<a target="_blank" href="{{$pdf}}">Descargar Pdf Generado</a>
	@endif
	{{ Form::open(array('files'=>true, 'class'=>'form-inline', 'id'=>'upForm') ) }}
		<h1>Generar Latex</h1>
		{{ Form::submit('Subir',array('class'=>'btn-primary btn btn-md btn-block')); }}
		{{Form::textarea("latex", $esqueleto ,array("cols"=>"130","rows"=>"50"))}}
	{{ Form::close() }}
@stop





