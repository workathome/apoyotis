@extends('plantillas.consultor')

@section('contenido1')
@if (Session::has('mensaje'))
            <span>{{ Session::get('mensaje') }}</span>
@endif
<div id="page-content-wrapper" class="span9 pull-right">
<div class="page-content">
    
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
                <?php $i=1 ?>
                @foreach($documentos_consultor as $documento)
                    <tr>
                        <td>{{$i++}}</td>
                        <td><p> {{$documento->titulo_consdocumento}}</p></td>
                        <td><p>{{$documento->descripcionconsultordocumento}}</p</td>
                        <td><a href={{$documento->pathdocumentoconsultor }}><input class="btn btn-success activador" type="submit" value="Descargar"></a></td>
                        <td>{{$documento->created_at}}</td>
                    </tr>
                @endforeach
                
                    {{ Form::open(array('files'=>true, 'class'=>'form-inline') ) }}
                    <tr>
                        <td>{{$i}}</td>
                        <td>
                            {{ Form::text('titulo_consdocumento','', array('class'=>'form-control')); }}
                        </td>
                        <td>
		            {{ Form::text('descripcionconsultordocumento','', array('class'=>'form-control')); }}
                        </td>
                        <td>
                            {{ Form::file('archivodocumento',array('class'=>'form-control')); }}
                        </td>
                        <td></td>
                    </tr>
            </tbody>
        </table>
        {{ Form::submit('Subir',array('class'=>'btn-primary btn')); }}
        {{ Form::close() }}
    </div>
</div>
</div>
@stop
