$(document).ready(function() {
    $('#validatorForm').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        live: 'enabled',
        fields: {
            login: {
                message: 'El nombre de usuario no es valido',
                validators: {
                    notEmpty: {
                        message: 'El nombre de usuario es necesario'
                    },
                    stringLength: {
                        min: 5,
                        max: 30,
                        message: 'El nombre de usuario debe tener al menos 5 y no mas de 30 caracteres.'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'El nombre de usuario consiste de caracteres alfanumericos y numeros'
                    },
                    different: {
                        field: 'password',
                        message: 'The username and password cannot be the same as each other'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'La contraseña es necesaria'
                    },
                    different: {
                        field: 'login',
                        message: 'El nombre de usuario no puede ser igual que la contraseña'
                    },
                    stringLength: {
                        min: 4,
                        message: 'La contraseña debe tener al menos 4 caracteres'
                    }
                }
            },
            password2: {
                validators: {
                    notEmpty: {
                        message: 'Confirme la contraseña'
                    },
                    identical: {
                        field: 'password',
                        message: 'Las contraseñas no son iguales'
                    }
                }
            },
            nombreconsultor: {
                validators: {
                    notEmpty: {
                        message: 'El nombre es necesario'
                    },
                    stringLength: {
                        max: 40,
                        message: 'El nombre no debe exceder mas de 40 caracteres'
                    },
                    regexp: {
                        regexp: /^[a-zA-Zá-ú\s]+$/,
                        message: 'EL nombre consiste solo de letras.'
                    }
                }   
            },
            apellidopaternoconsultor: {
                validators: {
                    notEmpty: {
                        message: 'El apellido paterno es necesario'
                    },
                    stringLength: {
                        max: 40,
                        message: 'El apellido paterno no debe exceder mas de 40 caracteres'
                    },
                    regexp: {
                        regexp: /^[a-zA-Zá-ú]+$/,
                        message: 'El apellido paterno consiste solo de letras'
                    }
                }
            },
            apellidomaternoconsultor: {
                validators: {
                    notEmpty: {
                        message: 'El apellido materno es necesario'
                    },
                    stringLength: {
                        max: 40,
                        message: 'El apellido materno no debe exceder mas de 40 caracteres'
                    },
                    regexp: {
                        regexp: /^[a-zA-Zá-ú]+$/,
                        message: 'El apellido materno consiste solo de letras'
                    }
                }
            },
            correoconsultor: {
                validators: {
                    notEmpty: {
                        message: 'El correo electronico es necesario'
                    },
                    emailAddress: {
                        message: 'No es un correo electronico valido!'
                    }
                }
            },
            telefonoconsultor: {
                validators: {
                    notEmpty: {
                        message: 'El telefono es necesario'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'El telefono debe contener solo numeros'
                    },
                    stringLength: {
                        min: 7,
                        max: 8,
                        message: 'El telefono debe tener entre 7 y 8 numeros'
                    }
                }
            },
            fotoconsultor: {
                validators: {
                    notEmpty: {
                        message: 'La foto es necesaria'
                    },
                    file: {
                        extension: 'jpeg,png,jpg',
                        type: 'image/jpeg,image/png',
                        maxSize: 2097152,   // 2048 * 1024
                        message: 'La imagen seleccionada no es valida'
                    }
                }
            }

        }
    });
    $("#fotoconsultor").fileinput({
        showUpload: false,
        showPreview: false,
        browseLabel: "",
        browseIcon: '<i class="fa fa-folder-open"></i>',
        removeClass: "btn btn-danger",
        removeLabel: "",
        removeIcon: '<i class="fa fa-trash"></i>',
        allowedFileExtensions: ["jpg", "jpeg", "png"],
        msgInvalidFileExtension: "Extension no valida",
        msgValidationError: "Extension no valida"
    });
});
