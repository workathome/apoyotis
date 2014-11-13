@extends('plantillas.consultor')

@section('contenido1')
    <div class="container">
        <h2>Actividades</h2>
        <ul>

            @foreach($documentos_empresas as $documento)
                <li><p><strong>{{$documento->updated_at}}</strong>,  La Grupo-Empresa <strong>{{$documento->grupoempresa["nombrelargoge"]}}</strong>Subio un documento <strong>{{$documento->titulo_gedocumento }}</strong> con la siguiente descripción {{$documento->descripciongedocumento}} <a href={{$documento->pathdocumentoge }}>    <span class="glyphicon glyphicon-save"></span></a></p></li>
            @endforeach
        </ul>
        <div class="row">
            <div class="col-md-12">

                <span>Nombre proyecto</span> {{$proyecto->nombreproyecto}} <br/>
                <span>Fecha de inicio</span> {{$proyecto->created_at}} <br>
        <a href="/consultor/proyectodardebaja" class="btn btn-danger">Dar de baja</a>



        <h1>Documentos Proyecto</h1>
        @if (Session::has('mensaje'))
                <div class="alert {{ Session::get('mensaje')[0] }}" role="alert">{{ Session::get('mensaje')[1] }}</div>
        @endif

        {{ Form::open(array("url"=>"consultor/proyecto/subirdocumento",'files'=>true, 'class'=>'form-inline', 'id'=>'upForm') ) }}
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-nonfluid">
                <thead>
                    <tr>
                        <th>#</th>
                    <th>Titulo</th>
                    <th>público</th>
                    <th>Documento</th>
                    <th>Consultor</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
<?php $i = 0?>
@foreach($documentos_proyecto as $key => $documento)
                    <tr>
                        <td>{{$key+1}} <?php $i = $key+1?></td>
                        <td><p> {{$documento->titulo_documento}}</p></td>
                        <td><p> {{ ($documento->es_publico) ? "si" : "no" }} </p></td>
                        <td>
                            <a class="btn btn-success activador" href="{{$documento->path_documento }}" TARGET="_blank">
                            Visualizar
                            </a>
                        </td>
                        <td>{{ Consultor::find($documento->id_consultor)->nombreconsultor }}</td>
                        <td>{{$documento->created_at}}</td>
                    </tr>
                @endforeach


                    <tr>
                        <td>{{$i}}</td>
                        <td>
                            @if( $errors->has('titulo_documento') )
                                @foreach($errors->get('titulo_documento') as $error )
                                    <br />* {{ $error }}
                                @endforeach
                            @endif

                            <div class="form-group">
                            {{ Form::text('titulo_documento','', array('class'=>'form-control')); }}
                            <div>
                        </td>
                        <td>
                            @if( $errors->has('es_publico') )
                                @foreach($errors->get('es_publico') as $error )
                                    <br />* {{ $error }}
                                @endforeach
                            @endif
                            <div class="form-group">
                                {{ Form::checkbox('es_publico', 1 , true )}}
                            </div>
                        </td>
                        <td>
                            @if( $errors->has('archivodocumento') )
                                @foreach($errors->get('archivodocumento') as $error )
                                    <br />* {{ $error }}
                                @endforeach
                            @endif
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
