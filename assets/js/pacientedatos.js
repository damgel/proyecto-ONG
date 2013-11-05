$(document).ready(function() {

// codigo personalizado para mis validaciones
    $('#perfilVoluntariado').validate({
        rules: {
            nombre_pa:
                    {
                        required: true,
                        minlength: 6,
                        maxlenght: 12,
                        patterner:[0,10]
                       
                    },
            apellido_pa:
                    {
                        required: true,
                        minlength: 6,
                        maxlenght: 12,
                        patterner:[0,10]
                        
                    },
					
					
		 fecha_na_pa:
                    {
                        required: true,
						 date: true
                        
                    },
		edad_pa:
                    {
                        required: true,
                        minlength: 1,                 
                        
                    },
          genero_pa:
                    {
                        required: true,
                        

                    },
            
           
            telefono_pa:
                    {
                        required: true,
                        minlength: 8
                        
                    },
					
			direccion_pa:
                    {
                        required: true,
                        minlength: 15,
                        maxlenght: 30,
                        patterner:[0,10]
                    },
		 departamento_pa:
                    {
                        required: true}
                       

            
            
            
           
        }
    });

}); // end document.ready