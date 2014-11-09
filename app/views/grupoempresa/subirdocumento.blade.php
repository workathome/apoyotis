@extends('plantillas.principal')
@section('cabecera')

{{ HTML::style('css/login.css') }}
{{ HTML::style('css/bootstrapValidator.css') }}

{{ HTML::script('js/bootstrapValidator.js') }}
{{ HTML::script('js/validatorUpDocumentGrupo.js') }}

@stop

@section('contenido')
<div class="container">
        @if (Session::has('mensaje'))
            <div class="alert alert-warning" role="alert">{{ Session::get('mensaje') }}</div>
        @endif

<div class="table-responsive">
{{ Form::open(array('files'=>true, 'class'=>'form-signin', 'id'=>'upForm') ) }}
    <table class="table table-bordered table-hover table-nonfluid">
        <thead>
            <tr>
                <th>#</th>
                <th>Titulo</th>
                <th>Descripcion</th>
                <th>Documento</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1 ?>
            @foreach($documentos as $documento)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$documento->titulo_gedocumento}}</td>
                    <td>{{$documento->descripciongedocumento}}</td>
                    <td><a href={{$documento->pathdocumentoge}}><input class="btn btn-success activador" type="submit" value="visualizar"></a></td>
                </tr>
            @endforeach
            <tr>
                <td>{{$i}}</td>
                <td>
                    {{ Form::text('titulo_gedocumento','', array('class'=>'form-control')); }}
                </td>
                <td>               
                    {{ Form::textarea('descripciongedocumento','', array('class'=>'form-control')); }}
                </td>
                <td>
                    
                    {{ Form::file('archivodocumento',array('class'=>'form-control')); }}
                </td>
            </tr>
        </tbody>
    </table>
        {{ Form::submit('Subir',array('class'=>'btn-primary btn btn-1g btn-block')); }}
    {{ Form::close() }}
    </div>
</div>
@stop
