$(document).ready(function() {

// codigo personalizado para mis validaciones
    $('#frm-login').validate({
        rules: {
            JVPO:
                    {
                        required: true,
                        minlenght: 6
                    },
            password_doc:
                    {
                        required: true,
                        minlenght: 6
                    }
        }
    });

}); // end document.ready