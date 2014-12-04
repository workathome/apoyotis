@extends('plantillas.grupo_empresa')
@section('cabecera1')

{{ HTML::style('components/bootstrapValidator/dist/js/bootstrapValidator.min.js') }}
{{ HTML::script('components/bootstrapValidator/dist/js/bootstrapValidator.min.js') }}
{{ HTML::script('js/validatorSocio.js') }}

@stop

@section('contenido1')
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-header">
            Socios <small> Registrar Socio</small>
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <ol class="breadcrumb">
                <li><a href="/grupoempresa"><i class="fa fa-fw fa-home"></i> Inicio</a></li>
                <li class="active"><a><i class="fa fa-fw fa-users"></i> Socios</a></li>
            </ol>
        </div>
    </div>

    @if (Session::has('mensaje'))
        <div class="alert alert-warning" role="alert">{{ Session::get('mensaje') }}</div>
    @endif
    <span class="label label-info">La fila marcada es el representante legal.</span>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-nonfluid">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre y Apellidos</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Cargo</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $socios as $key => $socio )
                    @if( $socio->tipoSocio->nombretipo != "socio")
                       <tr class="info">
                    @else
                    <tr>
                    @endif
                        <td>{{$key+1}}</td>
                        <td><p>{{ $socio->nombresocio}} {{$socio->apellidossocio}} </p></td>
                        <td><p>{{$socio->correoelectronicosocio}}</p></td>
                        <td><P>{{$socio->telefonosocio}}</p></td>
                        <td><P>{{$socio->cargo}}</p></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registroModal">
      <i class="fa fa-fw fa-plus"></i> Agregar Socio
    </button>

    <!-- Registrar Socio Modal -->
    <div class="modal fade" id="registroModal" tabindex="-1" role="dialog" aria-labelledby="registroModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="registroModalLabel">Registrar Socio</h4>
                </div>
                <div class="form row">
                {{ Form::open(array('class'=>'form-horizontal', 'id'=>'validatorForm') ) }}
                <div class="modal-body">
                        <div class="form-group">
                            {{ Form::label('nombresocio', 'Nombre Socio', array('class'=>'control-label col-md-offset-2 col-md-3')); }}
                            <div class="col-md-5">
                                @if( $errors->has('nombresocio') )
                                    @foreach($errors->get('nombresocio') as $error )
                                        <br />
                                        <span class="label label-danger"> * {{ $error }} </span>
                                    @endforeach
                                @endif
                                {{ Form::text('nombresocio',Input::old('nombresocio'), array('class'=>'form-control', 'name'=>'nombresocio')); }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('apellidossocio', 'Apellidos Socio', array('class'=>'control-label col-md-offset-2 col-md-3')); }}
                            <div class="col-md-5">
                                @if( $errors->has('apellidossocio') )
                                    @foreach($errors->get('apellidossocio') as $error )
                                        <br />
                                        <span class="label label-danger"> * {{ $error }} </span>
                                    @endforeach
                                @endif
                                {{ Form::text('apellidossocio',Input::old('apellidossocio'), array('class'=>'form-control', 'name'=>'apellidossocio')); }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('estadocivil', 'Estado Civil', array('class'=>'control-label col-md-offset-2 col-md-3')); }}
                            <div class="col-md-5">
                            @if( $errors->has('estadocivil') )
                                @foreach($errors->get('estadocivil') as $error )
                                    <br />
                                    <span class="label label-danger"> * {{ $error }} </span>
                                @endforeach
                            @endif
                            {{ Form::select('estadocivil', $estodos_civil , Input::old('estadocivil'), array('class' => 'form-control', 'name'=>'estadocivil')); }}
                            </div>
                        </div>
                        <div  class="form-group">
                            {{ Form::label('direccion', 'Dirección', array('class'=>'control-label col-md-offset-2 col-md-3')); }}
                            <div class="col-md-5">
                            @if( $errors->has('direccion') )
                                @foreach($errors->get('direccion') as $error )
                                    <br />
                                    <span class="label label-danger"> * {{ $error }} </span>
                                @endforeach
                            @endif
                            {{ Form::text('direccion',Input::old('direccion'), array('class'=>'form-control', 'name'=>'direccion')); }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('cargo', 'Cargo', array('class'=>'control-label col-md-offset-2 col-md-3')); }}
                            <div class="col-md-5">
                            @if( $errors->has('cargo') )
                                @foreach($errors->get('cargo') as $error )
                                    <br />
                                    <span class="label label-danger"> * {{ $error }} </span>
                                @endforeach
                            @endif
                            {{ Form::text('cargo',Input::old('cargo'), array('class'=>'form-control', 'name'=>'cargo')); }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('correoelectronicosocio', 'Correo electronico', array('class'=>'control-label col-md-offset-2 col-md-3')); }}
                            <div class="col-md-5">
                                @if( $errors->has('correoelectronicosocio') )
                                    @foreach($errors->get('correoelectronicosocio') as $error )
                                        <br />
                                        <span class="label label-danger"> * {{ $error }} </span>
                                    @endforeach
                                @endif
                                <div class="input-group">
                                    <div class="input-group-addon">@</div>
                                    {{ Form::text('correoelectronicosocio',Input::old('correoelectronicosocio'), array('class'=>'form-control', 'name'=>'correoelectronicosocio')); }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('telefonosocio', 'Teléfono', array('class'=>'control-label col-md-offset-2 col-md-3')); }}
                            <div class="col-md-5">
                                @if( $errors->has('telefonosocio') )
                                    @foreach($errors->get('telefonosocio') as $error )
                                        <br />
                                        <span class="label label-danger"> * {{ $error }} </span>
                                    @endforeach
                                @endif
                                {{ Form::text('telefonosocio',Input::old('telefonosocio'), array('class'=>'form-control', 'name'=>'telefonosocio')); }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('tipo_socio_codtipo_socio', 'Tipo socio', array('class'=>'control-label col-md-offset-2 col-md-3')); }}
                            <div class="col-md-5">
                            @if( $errors->has('tipo_socio_codtipo_socio') )
                                @foreach($errors->get('tipo_socio_codtipo_socio') as $error )
                                    <br />
                                    <span class="label label-danger"> * {{ $error }} </span>
                                @endforeach
                            @endif
                            {{ Form::select('tipo_socio_codtipo_socio',  $tiposocio, Input::old('tipo_socio_codtipo_socio'), array('class' => 'form-control', 'name'=>'tipo_socio_codtipo_socio')); }}
                            </div>
                        </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <div  class="form-group">
                        {{ Form::submit('Registrar',array('class'=>'btn-primary btn')); }}
                    </div>
                </div>

            {{ Form::close() }}

            </div>
        </div>
      </div>
    </div>
@stop
