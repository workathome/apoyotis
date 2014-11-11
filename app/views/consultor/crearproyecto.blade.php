@extends('plantillas.consultor')
@section('cabecera1')
{{ HTML::script('js/moment.min.js')}}
{{ HTML::script('js/bootstrap-datetimepicker.min.js') }}
{{ HTML::style('css/bootstrap-datetimepicker.css') }}
{{ HTML::script('js/validatorProyecto.js') }}

@stop
@section('contenido1')

<div id="page-content-wrapper" class="span9 pull-right">
    <div class="page-content">

        @if (Session::has('mensaje'))
            <div class="alert {{ Session::get('mensaje')[0] }}" role="alert">{{ Session::get('mensaje')[1] }}</div>
        @endif
        <div>
            {{ Form::open(array('class'=>'form-inline') ) }}
                {{ Form::label('nombreproyecto','Nombre Proyecto'); }}
                @if( $errors->has('nombreproyecto') )
                    @foreach($errors->get('nombreproyecto') as $error )
                        <br />* {{ $error }}
                    @endforeach
                @endif
                {{ Form::text('nombreproyecto',Input::old('nombreproyecto') , array('class'=>'form-control')); }}
                {{ Form::label('fechafinproyecto','Fecha fin proyecto') }}
                @if( $errors->has('fechafinproyecto') )
                    @foreach($errors->get('fechafinproyecto') as $error )
                        <br />* {{ $error }}
                    @endforeach
                @endif
                <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    {{ Form::text('fechafinproyecto', Input::old('fechafinproyecto') , array('class'=>'form-control')); }}
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                </div>
                {{ Form::submit('Crear',array('class'=>'btn-primary btn')); }}
            {{ Form::close() }}
        </div>
    </div>
</div>
@stop
