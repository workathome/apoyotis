@extends('plantillas.consultor')

@section('contenido1')

<div id="page-content-wrapper" class="span9 pull-right">
    <div class="page-content">

        @if (Session::has('mensaje'))
            <div class="alert {{ Session::get('mensaje')[0] }}" role="alert">{{ Session::get('mensaje')[1] }}</div>
        @endif
        <div>
            {{ Form::open(array('class'=>'form-inline') ) }}
                {{ Form::label('nombreproyecto','Nombre Proyecto'); }}
                {{ Form::text('nombreproyecto',Input::old('nombreproyecto') , array('class'=>'form-control')); }}
                {{ Form::label('fechafinproyecto','Fecha fin proyecto') }}
                {{ Form::text('fechafinproyecto', Input::old('fechafinproyecto') , array('class'=>'form-control')); }}
                {{ Form::submit('Crear',array('class'=>'btn-primary btn')); }}
            {{ Form::close() }}
        </div>
    </div>
</div>
@stop
