<!DOCTYPE html>
<html ng-app="generador">
    <head ng-non-bindable>
        {{ HTML::style('components/bootstrap/dist/css/bootstrap.min.css') }}
        {{ HTML::script('components/bootstrap/dist/js/bootstrap.min.js') }}
        {{ HTML::script('components/jquery/dist/jquery.min.js') }}
        {{ HTML::script('components/angular/angular.min.js') }}
        {{ HTML::script('js/angularPdf.js') }}
    </head>
    <body>
        <div ng-controller="pdfController">
            @if ($pdf)
                    <a target="_blank" href="{{$pdf}}">Descargar Pdf Generado</a>
            @endif
            <h1 ng-if="fileExists()">@{{mensaje}}</h1>
            {{ Form::open(array('files'=>true, 'class'=>'form-inline', 'id'=>'upForm') ) }}
                <h1>Generar Latex</h1>
                {{Form::textarea("latex", $esqueleto ,array("cols"=>"130","rows"=>"50"))}}
                {{ Form::submit('Subir',array('class'=>'btn-primary btn btn-md btn-block')); }}
            {{ Form::close() }}
        </div>
    </body>
</html>
