$(document).ready(function(){
    $('#projectForm').bootstrapValidator({
        feedbackIcons: { 
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        live: 'enabled',
        fields: {
            nombreproyecto: {
                validators: {
                    notEmpty: {
                        message: 'El nombre del proyecto es necesario'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9\s.\-ñáéíóú\(\)]+$/,
                        message: 'El nombre del proyecto solo contiene '
                    }
                }
            },
            fechafinproyecto: {
                validators: {
                    notEmpty: {
                        message: "La fecha fin es necesaria"
                    },
                    regexp: {
                        regexp: /^[0-9]{4}-[0-9]{2}-[0-9]{2}\s[0-9]{2}:[0-9]{2}:[0-9]{2}$/,
                        message: 'La fecha no soporta ese formato'
                    }
                }
            }
        }
    });
});

$(function () {
    $('#datetimepicker1').datetimepicker({
        format : 'YYYY-MM-DD HH:mm:ss',
        showSeconds: true,
        language: "es",
        autoclose:true
    });
});
