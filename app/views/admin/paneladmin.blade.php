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
</div>

@stop
