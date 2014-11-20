@extends('plantillas.principal')
@section('cabecera')
    {{ HTML::style('css/grupo-empresa.css') }}
    {{ HTML::style('css/admin.css') }}
    {{ HTML::style('components/bootstrap-fileinput/css/fileinput.min.css')}}
    {{ HTML::script('components/bootstrap-fileinput/js/fileinput.min.js') }}
    {{ HTML::script('js/validatorConsultor.js') }}
@stop

@section('contenido')
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
    </div>
    <button type="button" class="btn btn-primary"
        data-toggle="modal" data-target="#consultorModal">
        <i class="fa fa-fw fa-plus"></i>Agregar
    </button>

    <!-- Agregar Consultor Modal -->

<div class="modal fade" id="consultorModal" tabindex="-1" role="dialog" aria-labelledby="consultorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="consultorModalLabel">
                    Registrar Consultor
                </h4>
            </div>
            <div class="form">
            {{ Form::open(array('files'=>true, 'class'=>'form-horizontal')) }}
            <div class="modal-body">
                <div class="row">
                    <div class="form-group">
                        {{ Form::label('login', 'Usuario', array('class'=>'control-label col-md-offset-2 col-md-3')); }}
                        <div class="col-md-5">
                            {{ Form::text('login','',array('class'=>'form-control','autofocus'=>'autofocus')); }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('password', 'Contraseña', array('class'=>'control-label col-md-offset-2 col-md-3')); }}
                        <div class="col-md-5">
                            {{ Form::password('password',array('class'=>'form-control')); }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('password2', 'Repita Contraseña', array('class'=>'control-label col-md-offset-2 col-md-3')); }}
                        <div class="col-md-5">
                            {{ Form::password('password2',array('class'=>'form-control')); }}
                        </div>
                    </div>
                    <div class="col-md-offset-2 col-md-10">
                        <h4>Datos Personales</h4>
                    </div>
                    <div class="form-group">
                        {{ Form::label('nombreconsultor', 'Nombre', array('class'=>'control-label col-md-offset-2 col-md-3')); }}
                        <div class="col-md-5">
                            {{ Form::text('nombreconsultor','',array('class'=>'form-control')); }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('apellidopaternoconsultor', 'Apellido Paterno', array('class'=>'control-label col-md-offset-2 col-md-3')); }}
                        <div class="col-md-5">
                            {{ Form::text('apellidopaternoconsultor','',array('class'=>'form-control')); }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('apellidomaternoconsultor', 'Apellido Materno', array('class'=>'control-label col-md-offset-2 col-md-3')); }}
                        <div class="col-md-5">
                            {{ Form::text('apellidomaternoconsultor','',array('class'=>'form-control')); }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('correoconsultor', 'Correo Electronico', array('class'=>'control-label col-md-offset-2 col-md-3')); }}
                        <div class="col-md-5">
                            {{ Form::text('correoconsultor','',array('class'=>'form-control')); }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('telefonoconsultor', 'Teléfono', array('class'=>'control-label col-md-offset-2 col-md-3')); }}
                        <div class="col-md-5">
                            {{ Form::text('telefonoconsultor','',array('class'=>'form-control')); }}
                        </div>
                    </div>
                    <!--<div class="is_file">-->
                        <div class="form-group">
                            {{ Form::label('fotoconsultor', 'Foto', array('class'=>'control-label col-md-offset-2 col-md-3')); }}
                            <div class="col-md-5">
                                {{ Form::file('fotoconsultor',Input::old('fotoconsultor'), array('class'=>'form-control file','name'=>'fotoconsultor','id'=>'fotoconsultor')); }}
                            </div>
                        </div>
                    <!--</div>-->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn default" data-dismiss="modal">Cancelar</button>
                <div class="form-group">
                    {{ Form::submit('Registrar',array('class'=>'btn-primary btn')); }}
                </div>
            </div>
        {{ Form::close() }}
        </div>
        </div>
    </div>
</div>

@stop
