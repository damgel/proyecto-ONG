$(document).ready(function() {

// codigo personalizado para mis validaciones
    $('#perfilVoluntariado').validate({
        rules: {
            nombre_vo:
                    {
                        required: true,
                        minlength: 6,
                        maxlenght: 12,
                        patterner:[0,10]
                       
                    },
            apellido_vo:
                    {
                        required: true,
                        minlength: 6,
                        maxlenght: 12,
                        patterner:[0,10]
                        
                    },
					
					
		 fecha_na_doc:
                    {
                        required: true,
						 date: true
                        
                    },
		edad_vo:
                    {
                        required: true,
                        minlength: 1,                 
                        
                    },
          genero_vo:
                    {
                        required: true,
                        patterner:[0,10]

                    },
            
           
            telefono_vo:
                    {
                        required: true,
                        minlength: 8
                        
                    },
					
			direccion_vo:
                    {
                        required: true,
                        minlength: 15,
                        maxlenght: 30,
                        patterner:[0,10]
                    },
		 departamento_vo:
                    {
                        required: true,
                        patterner:[0,10]

                    },
		email_vo:
                    {
                        required: true,
                        email: true,
                        patterner:[0,10]
                    },
            password_vo:
                    {
                        required: true,
                        minlength: 8
                            
                    }
            
            
            
           
        }
    });

}); // end document.ready