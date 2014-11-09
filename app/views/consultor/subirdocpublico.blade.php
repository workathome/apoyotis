@extends('plantillas.consultor')

@section('cabecera1')
{{ HTML::style('css/bootstrapValidator.css') }}
{{ HTML::script('js/bootstrapValidator.js') }}
{{ HTML::script('js/validatorUpDocument.js') }}
@stop

@section('contenido1')

<div id="page-content-wrapper" class="span9 pull-right">
<div class="page-content">

    @if (Session::has('mensaje'))
                <div class="alert {{ Session::get('mensaje')[0] }}" role="alert">{{ Session::get('mensaje')[1] }}</div>
    @endif
                
    {{ Form::open(array('files'=>true, 'class'=>'form-inline', 'id'=>'upForm') ) }}
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-nonfluid">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Documento</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
<?php $i = 1?>
@foreach($documentos_consultor as $documento)
                    <tr>
                        <td>{{$i++}}</td>
                        <td><p> {{$documento->titulo_consdocumento}}</p></td>
                        <td><p>{{$documento->descripcionconsultordocumento}}</p</td>
                        <td>
                            <a href="{{$documento->pathdocumentoconsultor }}" TARGET="_blank">
                                <input class="btn btn-success activador" type="submit" value="Visualizar">
                            </a>
                        </td>
                        <td>{{$documento->created_at}}</td>
                    </tr>
                @endforeach


                    <tr>
                        <td>{{$i}}</td>
                        <td>
                            <div class="form-group">
                            {{ Form::text('titulo_consdocumento','', array('class'=>'form-control','name'=>'titulo_consdocumento')); }}
                            <div>
                        </td>
                        <td>
                            <div class="form-group">
                            {{ Form::text('descripcionconsultordocumento','', array('class'=>'form-control','name'=>'descripcionconsultordocumento')); }}
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                            {{ Form::file('archivodocumento',array('class'=>'form-control','name'=>'archivodocumento')); }}
                            </div>
                        </td>
                        <td></td>
                    </tr>
            </tbody>
        </table>
        <div class="form-group">
        {{ Form::submit('Subir',array('class'=>'btn-primary btn')); }}
        </div>
        {{ Form::close() }}
    </div>
</div>
</div>
@stop
