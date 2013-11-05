$(document).ready(function() {

// codigo personalizado para mis validaciones
    $('#regDoctor').validate({
        rules: {
            nombre_doc:
                    {
                        required: true,
                        minlength: 6,
                        maxlenght: 12,
                        patterner:[0,10]
                       
                    },
            apellido_doc:
                    {
                        required: true,
                        minlength: 6,
                        maxlenght: 12,
                        patterner:[0,10]
                        
                    },
            genero_doc:
                    {
                        required: true,
                        patterner:[0,10]

                    },
            JVPO:
                    {
                        required: true,
                        minlength: 6,
                        maxlenght: 8,
                        patterner:[0,10]

                    },
           fecha_na_doc:
                    {
                        required: true,
						 date: true
                        
                    },
            password_doc:
                    {
                        required: true,
                        minlength: 8
                        
                        
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
                        email: true,
                        patterner:[0,10]
                    },
            direccion_doc:
                    {
                        required: true,
                        minlength: 15,
                        maxlenght: 30,
                        patterner:[0,10]
                    },
            departamento_doc:
                    {
                        required: true,
                        patterner:[0,10]

                    }
        }
    });

}); // end document.ready