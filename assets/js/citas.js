$(document).ready(function() {

// codigo personalizado para mis validaciones
    $('#regDoctor').validate({
        rules: {
          numero_exp:
                    {
                        required: true,
                        minlength: 6,
                        maxlenght: 12,
                        patterner:[0,10]
                       
                    },
           nombre_doc:
                    {
                        required: true,
                        minlength: 6,
                        maxlenght: 12,
                        patterner:[0,10]
                        
                    },
           
           fecha:
                    {
                        required: true,
						 date: true
                        
                    },
            
            hora:
                    {
                        required: true,
                       

                    }
        }
    });

}); // end document.ready