@extends('plantillas.grupo-empresa')
@section('cabecera1')

{{ HTML::style('css/login.css') }}
{{ HTML::style('css/bootstrapValidator.css') }}
{{ HTML::script('js/bootstrapValidator.js') }}
{{ HTML::script('js/validatorSocio.js') }}

@stop

@section('contenido1')
        @if (Session::has('mensaje'))
            <div class="alert alert-warning" role="alert">{{ Session::get('mensaje') }}</div>
        @endif

            <table class="table table-bordered table-hover table-nonfluid">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre y Apellidos</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Tipo</th>
                <th>Cargo</th>
            </tr>
        </thead>
        <tbody>
@foreach( $socios as $key => $socio )
                <tr>
                    <td>{{$key+1}}</td>
                    <td><p>{{ $socio->nombresocio}} {{$socio->apellidossocio}} </p></td>
                    <td><p>{{$socio->correoelectronicosocio}}</p></td>
                    <td><P>{{$socio->telefonosocio}}</p></td>
                    <td><P>{{$socio->tiposocio->nombretipo}}</p></td>
                    <td><P>{{$socio->cargo}}</p></td>
                </tr>
            @endforeach
        </tbody>
    </table>
        </ul>

    {{ Form::open(array('files'=>true, 'class'=>'form-signin', 'id'=>'validatorForm') ) }}
        <h1>Registrar Socio :</h1>
        <div class="form-group">
	    {{ Form::label('nombresocio', 'Nombre Socio', array('class'=>'control-label')); }}
            @if( $errors->has('nombresocio') )
                @foreach($errors->get('nombresocio') as $error )
                    <br />
                    <span class="label label-danger"> * {{ $error }} </span>
                @endforeach
            @endif
            {{ Form::text('nombresocio',Input::old('nombresocio'), array('class'=>'form-control', 'name'=>'nombresocio')); }}
        </div>
        <div class="form-group">
            {{ Form::label('apellidossocio', 'Apellidos Socio', array('class'=>'control-label')); }}
            @if( $errors->has('apellidossocio') )
                @foreach($errors->get('apellidossocio') as $error )
                    <br />
                    <span class="label label-danger"> * {{ $error }} </span>
                @endforeach
            @endif
            {{ Form::text('apellidossocio',Input::old('apellidossocio'), array('class'=>'form-control', 'name'=>'apellidossocio')); }}
        </div>
        <div class="form-group">
            {{ Form::label('estadocivil', 'Estado Civil', array('class'=>'control-label')); }}
            @if( $errors->has('estadocivil') )
                @foreach($errors->get('estadocivil') as $error )
                    <br />
                    <span class="label label-danger"> * {{ $error }} </span>
                @endforeach
            @endif
            {{ Form::select('estadocivil', $estodos_civil , Input::old('estadocivil'), array('class' => 'form-control', 'name'=>'estadocivil')); }}
        </div>
        <div  class="form-group">
            {{ Form::label('direccion', 'Dirección', array('class'=>'control-label')); }}
            @if( $errors->has('direccion') )
                @foreach($errors->get('direccion') as $error )
                    <br />
                    <span class="label label-danger"> * {{ $error }} </span>
                @endforeach
            @endif
            {{ Form::text('direccion',Input::old('direccion'), array('class'=>'form-control', 'name'=>'direccion')); }}
        </div>
        <div class="form-group">
            {{ Form::label('cargo', 'Cargo', array('class'=>'control-label')); }}
            @if( $errors->has('cargo') )
                @foreach($errors->get('cargo') as $error )
                    <br />
                    <span class="label label-danger"> * {{ $error }} </span>
                @endforeach
            @endif
            {{ Form::text('cargo',Input::old('cargo'), array('class'=>'form-control', 'name'=>'cargo')); }}
        </div>
        <div class="form-group">
            {{ Form::label('correoelectronicosocio', 'Correo electronico', array('class'=>'control-label')); }}
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
        <div class="form-group">
            {{ Form::label('telefonosocio', 'Teléfono', array('class'=>'control-label')); }}
            @if( $errors->has('telefonosocio') )
                @foreach($errors->get('telefonosocio') as $error )
                    <br />
                    <span class="label label-danger"> * {{ $error }} </span>
                @endforeach
            @endif
            {{ Form::text('telefonosocio',Input::old('telefonosocio'), array('class'=>'form-control', 'name'=>'telefonosocio')); }}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_socio_codtipo_socio', 'Tipo socio', array('class'=>'control-label')); }}
            @if( $errors->has('tipo_socio_codtipo_socio') )
                @foreach($errors->get('tipo_socio_codtipo_socio') as $error )
                    <br />
                    <span class="label label-danger"> * {{ $error }} </span>
                @endforeach
            @endif
            {{ Form::select('tipo_socio_codtipo_socio',  $tiposocio, Input::old('tipo_socio_codtipo_socio'), array('class' => 'form-control', 'name'=>'tipo_socio_codtipo_socio')); }}
        </div>
        <div  class="form-group">
            {{ Form::submit('Registrar',array('class'=>'btn-primary btn btn-1g btn-block')); }}
        </div>
    {{ Form::close() }}
@stop
