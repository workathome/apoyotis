@extends('plantillas.consultor')
@section('cabecera1')
{{ HTML::style('css/bootstrapValidator.min.css') }}
{{ HTML::script('js/bootstrapValidator.min.js') }}
{{ HTML::script('js/moment-with-locales.min.js')}}
{{ HTML::script('js/bootstrap-datetimepicker.min.js') }}
{{ HTML::style('css/bootstrap-datetimepicker.min.css') }}
{{ HTML::script('js/validatorProyecto.js') }}
@stop
@section('contenido1')
    <div class="row">
        <div class="col-mg-12">
            <ul class="breadcrumb">
                <li><a href="/consultor"><i class="fa fa-fw fa-home"></i> Inicio</a></li>
                <li><a><i class="fa fa-fw fa-plus"></i> Crear Proyecto</a></li>
            </ul>
        </div>
    </div>
    @if (Session::has('mensaje'))
        <div class="alert {{ Session::get('mensaje')[0] }}" role="alert">{{ Session::get('mensaje')[1] }}</div>
    @endif
    <div>
        {{ Form::open(array('class'=>'form-inline', 'id'=>'projectForm') ) }}
            <div class="form-group">
                {{ Form::label('nombreproyecto','Nombre Proyecto',array('class'=>'control-label')); }}
                @if( $errors->has('nombreproyecto') )
                    @foreach($errors->get('nombreproyecto') as $error )
                        <br />* {{ $error }}
                    @endforeach
                @endif
                {{ Form::text('nombreproyecto',Input::old('nombreproyecto') , array('class'=>'form-control')); }}
            </div>
            <div class="form-group">
                {{ Form::label('fechafinproyecto','Fecha fin proyecto', array('class'=>'control-label')) }}
                @if( $errors->has('fechafinproyecto') )
                    @foreach($errors->get('fechafinproyecto') as $error )
                        <br />* {{ $error }}
                    @endforeach
                @endif

                <div class='input-group date' id='datetimepicker1'>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    {{ Form::text('fechafinproyecto', Input::old('fechafinproyecto') , array('class'=>'form-control','name'=>'fechafinproyecto')); }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::submit('Crear',array('class'=>'btn-primary btn')); }}
            </div>
        {{ Form::close() }}
    </div>
@stop
