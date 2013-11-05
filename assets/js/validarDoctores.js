$(document).ready(function() {

// codigo personalizado para mis validaciones
    $('#regDoctor').validate({
        rules: {
            nombre_doc:
                    {
                        required: true,
                        minlength: 3,
                        maxlenght: 15
                    },
            apellido_doc:
                    {
                        required: true,
                        minlength: 3,
                        maxlenght: 15
                    },
            genero_doc:
                    {
                        required: true

                    },
            JVPO:
                    {
                        required: true,
                        minlength: 6,
                        maxlenght: 8

                    },
            password_doc:
                    {
                        minlength: 8,
                        required: true
                    },
            confirm_password:
                    {
                        minlength: 8,
                        required: true,
                        equalTo: '#password_doc'
                    },
            telefono_doc:
                    {
                        required: true,
                        minlength: 8
                    },
            email_doc:
                    {
                        required: true,
                        email: true
                    },
            direccion_doc:
                    {
                        required: true,
                        minlength: 15,
                        maxlenght: 30
                    },
            departamento_doc:
                    {
                        required: true

                    }
        }
    });

}); // end document.ready