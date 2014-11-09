@extends('plantillas.principal')
@section('cabecera')
    {{ HTML::style('css/admin.css') }}
@stop

@section('contenido')
<div class="container">
<div class="table-responsive">
    <table class="table table-bordered table-hover table-nonfluid">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1 ?>
            @foreach($consultores as $consultor)
                <tr>
                    <td>{{$i++}}</td>
                    <td><p>{{ $consultor->nombreconsultor}} {{$consultor->apellidopaternoconsultor}} 
                            {{$consultor->apellidomaternoconsultor}}</p></td>
                    <td><p>{{$consultor->correoconsultor}}</p></td>
                    <td><P>{{$consultor->telefonoconsultor}}</p></td>
                    <td><input class="btn btn-danger activador" type="submit" value="Dar de baja"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
       <a href="/administrador/registrarconsultor" class="btn btn-primary" role="button">Agregar</a>
    </div>
</div>

@stop
