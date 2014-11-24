<!DOCTYPE html>
<html ng-app="generador">
    <head ng-non-bindable>
        {{ HTML::script('components/jquery/dist/jquery.min.js') }}
        {{ HTML::style('components/bootstrap/dist/css/bootstrap.min.css') }}
        {{ HTML::script('components/bootstrap/dist/js/bootstrap.min.js') }}
        {{ HTML::script('components/angular/angular.min.js') }}
        {{ HTML::script('js/angularPdf.js') }}
    </head>
    <body>
        <div ng-controller="pdfController" class="row">
            <div class="col-md-6">
                @if ($pdf)
                        <a target="_blank" href="{{$pdf}}">Descargar Pdf Generado</a>
                @endif
                {{ Form::open(array('files'=>true, 'class'=>'form-inline', 'id'=>'upForm') ) }}
                    <h1>Generar Latex</h1>
                    <div class="form-group">
                        {{Form::textarea("latex", $esqueleto ,array("cols"=>"60","rows"=>"50"))}}
                    </div>
                    <div class="form-group">
                        {{ Form::submit('Subir',array('class'=>'btn-primary btn btn-md btn-block')); }}
                    </div>
                {{ Form::close() }}
            </div>
            <div ng-if="fileExists()" class="col-md-6">
                <iframe id="viewer" width='400' height='300' src = "/components/bower-viewerjs/#{{$pdf}}" allowfullscreen webkitallowfullscreen></iframe> 
            
            </div>
        </div>
    </body>
</html>
