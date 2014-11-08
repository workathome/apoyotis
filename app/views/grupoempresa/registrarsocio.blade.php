@extends('plantillas.principal')
@section('cabecera')

{{ HTML::style('css/login.css') }}

@stop

@section('contenido')
<div class="container">
        @if (Session::has('mensaje'))
            <div class="alert alert-warning" role="alert">{{ Session::get('mensaje') }}</div>
        @endif
    {{ Form::open(array('files'=>true, 'class'=>'form-signin') ) }}
        <h1>Registrar Socio :</h1>
		{{ Form::label('nombresocio', 'Nombre Socio'); }}
        @if( $errors->has('nombresocio') )
            @foreach($errors->get('nombresocio') as $error )
                <br />* {{ $error }}
            @endforeach
        @endif
        {{ Form::text('nombresocio',Input::old('nombresocio'), array('class'=>'form-control')); }}

        {{ Form::label('apellidossocio', 'Apellidos Socio'); }}
        @if( $errors->has('apellidossocio') )
            @foreach($errors->get('apellidossocio') as $error )
                <br />* {{ $error }}
            @endforeach
        @endif
        {{ Form::text('apellidossocio',Input::old('apellidossocio'), array('class'=>'form-control')); }}


        {{ Form::label('estadocivil', 'Estado Civil'); }}
        @if( $errors->has('estadocivil') )
            @foreach($errors->get('estadocivil') as $error )
                <br />* {{ $error }}
            @endforeach
        @endif
        {{ Form::select('estadocivil', $estodos_civil , array('class' => 'form-control')); }}

        {{ Form::label('direccion', 'Dirección'); }}
        @if( $errors->has('direccion') )
            @foreach($errors->get('direccion') as $error )
                <br />* {{ $error }}
            @endforeach
        @endif
        {{ Form::text('direccion',Input::old('direccion'), array('class'=>'form-control')); }}

        {{ Form::label('cargo', 'Cargo'); }}
        @if( $errors->has('cargo') )
            @foreach($errors->get('cargo') as $error )
                <br />* {{ $error }}
            @endforeach
        @endif
        {{ Form::text('cargo',Input::old('cargo'), array('class'=>'form-control')); }}

        {{ Form::label('correoelectronicosocio', 'Correo electronico'); }}
        @if( $errors->has('correoelectronicosocio') )
            @foreach($errors->get('correoelectronicosocio') as $error )
                <br />* {{ $error }}
            @endforeach
        @endif
        {{ Form::text('correoelectronicosocio',Input::old('correoelectronicosocio'), array('class'=>'form-control')); }}

        {{ Form::label('telefonosocio', 'Teléfono'); }}
        @if( $errors->has('telefonosocio') )
            @foreach($errors->get('telefonosocio') as $error )
                <br />* {{ $error }}
            @endforeach
        @endif
        {{ Form::text('telefonosocio',Input::old('telefonosocio'), array('class'=>'form-control')); }}

        {{ Form::label('tipo_socio_codtipo_socio', 'tipo socio'); }}
        @if( $errors->has('tipo_socio_codtipo_socio') )
            @foreach($errors->get('tipo_socio_codtipo_socio') as $error )
                <br />* {{ $error }}
            @endforeach
        @endif
        {{ Form::select('tipo_socio_codtipo_socio',  $tiposocio,array('class' => 'form-control')); }}

        {{ Form::submit('Subir',array('class'=>'btn-primary btn btn-1g btn-block')); }}
    {{ Form::close() }}
</div>
@stop
