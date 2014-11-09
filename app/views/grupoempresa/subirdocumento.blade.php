@extends('plantillas.principal')
@section('cabecera')

{{ HTML::style('css/login.css') }}

@stop

@section('contenido')
<div class="container">
        @if (Session::has('mensaje'))
            <div class="alert alert-warning" role="alert">{{ Session::get('mensaje') }}</div>
        @endif
{{ $documentos }}

<div class="table-responsive">
    <table class="table table-bordered table-hover table-nonfluid">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Nick</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Juan Perez</td>
                <td>Juan</td>
                <td><input class="btn btn-danger activador" type="submit" value="Dar de baja"></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Juan Perez</td>
                <td>Juan</td>
                <td><input class="btn btn-success activador" type="submit" value="Activar"></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Juan Perez</td>
                <td>Juan</td>
                <td><input class="btn btn-danger activador" type="submit" value="Dar de baja"></td>
            </tr>
        </tbody>
    </table>
       <a href="/administrador/registrarconsultor" class="btn btn-primary" role="button">Agregar</a>
    </div>
    {{ Form::open(array('files'=>true, 'class'=>'form-signin') ) }}
        <h1>Subir Documento</h1>
		{{ Form::label('titulo_gedocumento', 'Titulo Documento'); }}
		{{ Form::text('titulo_gedocumento','', array('class'=>'form-control')); }}

		{{ Form::label('descripciongedocumento', 'Descripción Documento'); }}
		{{ Form::textarea('descripciongedocumento','', array('class'=>'form-control')); }}

        {{ Form::label('archivodocumento', 'Subir Archivo:'); }}
        {{ Form::file('archivodocumento',array('class'=>'form-control')); }}

        {{ Form::submit('Subir',array('class'=>'btn-primary btn btn-1g btn-block')); }}
    {{ Form::close() }}
</div>
@stop
