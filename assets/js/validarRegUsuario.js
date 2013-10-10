$(document).ready(function() {

// codigo personalizado para mis validaciones
    $('#registroUsuario').validate({
        rules: {
            nombre:
                    {
                        required: true,
                        minlength: 4
                    },
            apellido:
                    {
                        required: true,
                        minlength: 4
                    },
            edad:
                    {
                        required: true,
                        minlength: 2
                    },
            fecha_nac:
                    {
                        required: true,
                        date: true
                    },
            direccion:
                    {
                        required: true,
                        minlength: 25

                    },
            dui:
                    {
                        required: true,
                        minlength: 8
                    },
            telefono_contacto:
                    {
                        required: true,
                        minlength: 7
                    },
            telefono_movil:
                    {
                        required: true,
                        minlength: 8
                    },
            email:
                    {
                        required: true,
                        email: true
                    },
            password:
                    {
                        minlength: 8,
                        required: true
                    },
            sexolst:
                    {
                        required: true

                    }
        }
    });
    // fallback que detecta el uso del tag DATE en html5 y si no 
    //es compatible con el navegador, implemente el datepicker de jqueryUI.css
    Modernizr.load({
        test: Modernizr.inputtypes.date,
        nope: ['http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.7/jquery-ui.min.js', 'jquery-ui.css'],
        complete: function() {
            $('input[type=date]').datepicker({
                dateFormat: 'yy-mm-dd'
            });
        }
    });

}); // end document.ready