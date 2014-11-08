$(document).ready(function() {
    $('#loginForm').bootstrapValidator({
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
                        field: 'username',
                        message: 'El nombre de usuario no puede ser igual que la contraseña'
                    },
                    stringLength: {
                        min: 4,
                        message: 'La contraseña debe tener al menos 4 caracteres'
                    }
                }
            }
        }
    })
    //.on('init.form.bv', function(e, data) {
        //console.log(data);
    //})
    ;
});
