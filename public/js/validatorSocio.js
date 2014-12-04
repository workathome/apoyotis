$(document).ready(function(){
    $('#validatorForm').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        live: 'enabled',
        fields: {
            nombresocio: {
                validators: {
                    notEmpty: {
                        message: 'El nombre de socio es necesario'
                    },
                    stringLength: {
                        min: 3,
                        max: 40,
                        message: 'El nombre del socio debe tener al menos 3 y no mas de 40 caracteres'
                    },
                    regexp: {
                        regexp: /^[a-zA-Zá-úñ\s]+$/,
                        message: 'El nombre de socio consiste solo de letras.'
                    }
                }
            },
            apellidossocio: {
                validators: {
                    notEmpty: {
                        message: 'El Apellido de socio es necesario'
                    },
                    stringLength: {
                        min: 3,
                        max: 30,
                        message: 'El Apellido del socio debe tener al menos 3 y no mas de 30 caracteres'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z\sá-úñ]+$/,
                        message: 'El Apellido de socio consiste solo de letras.'
                    }
                }
            },
            estadocivil: {
                validators: {
                    notEmpty: {
                        message: 'Seleccione su estado civil'
                    }
                }
            },
            direccion: {
                validators: {
                    notEmpty: {
                        message: 'La direccion es necesaria'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9\s.\-\/á-ú\#ñ]+$/,
                        message: 'La direccion consiste de caracteres alfanumericos y numeros'
                    }
                }
            },
            cargo: {
                validators: {
                    notEmpty: {
                        message: 'El cargo es necesario'
                    },
                    regexp: {
                        regexp: /^[a-zA-Zá-ú\sñ]+$/,
                        message: 'El cargo consiste solo de letras'
                    }
                }
            },
            correoelectronicosocio: {
                validators: {
                    notEmpty: {
                        message: 'El correo electronico es necesario'
                    },
                    emailAddress: {
                        message: 'No es un correo electronico valido!'
                    } 
                }
            },
            telefonosocio: {
                validators: {
                    notEmpty: {
                        message: 'El telefono es necesario'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'El telefono de socio debe contener solo numeros'
                    },
                    stringLength: {
                        min: 7,
                        max: 8,
                        message: 'El telefono debe contener entre 7 y 8 numeros'
                    }
                }
            },
            tipo_socio_codtipo_socio: {
                validators: {
                    notEmpty: {
                        message: 'Seleccione un tipo de socio'
                    }
                }
            }
        }
    });
});
