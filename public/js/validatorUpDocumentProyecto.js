$(document).ready(function() {
    $('#upForm').bootstrapValidator({
        feedbackIcons: { 
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        live: 'enabled',
            fields: {
                titulo_documento: {
                    validators: {
                        notEmpty: {
                            message: "El titulo del documento es necesario"
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9\sñá-ú\-]+$/,
                            message: "El titulo del documento solo contiene caracteres alfanumericos"
                        }
                    }
                },
                archivodocumento: {
                    validators: {
                        notEmpty: {
                            message: 'Tiene que tener algun documento a subir'
                        },
                        file: {
                            extension: 'pdf',
                            message: 'El documento debe tener una extension pdf y no ser mayor a 20M'
                        }
                    }
                }
            }
    }); 
    $('#archivodocumento').fileinput({
        showUpload: false,
        showPreview: false,
        browseLabel: "",
        browseIcon: '<i class="fa fa-folder-open"></i>',
        removeClass: "btn btn-danger",
        removeLabel: "",
        removeIcon: '<i class="fa fa-trash"></i>',
        allowedFileExtensions: ["pdf"],
        msgInvalidFileExtension: "Extension no valida",
        msgValidatioddError: "Extension no valida"
    });
});
