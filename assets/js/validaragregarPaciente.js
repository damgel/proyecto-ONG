$(document).ready(function() {

// codigo personalizado para mis validaciones
    $('#agregarPaciente').validate({
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
                        minlength: 4,                 
                        patterner:[0,10]
                    },
			genero_pa:
                    {
                        required: true,
                       

                    },
					
           telefono_pa:
                    {
                        required: true,
                        minlength: 7
                    },
           
		    direccion_pa:
			
                    {
                       required: true,
                        minlength: 6,
                        maxlenght: 30,
                        patterner:[0,10]

                    },
          municipio_pa:
                    {
                       required: true,
                        minlength: 6,
                        maxlenght: 12,
                        patterner:[0,10]
                    },
            
            departamento_pa:
                    {
                         required: true,
                        
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