$(document).ready(function() {
 
// codigo personalizado para mis validaciones
    $('#frm-login').validate({
        rules: {
            email: 
            {
                required: true,
                email: true
                
            },
            passwordm:
                    {
                minlength: 8,
                required:true    
                    }
        }
    });

}); // end document.ready