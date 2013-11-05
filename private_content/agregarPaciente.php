<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Perfil Doctor</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="../assets/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/css/normalize.css">
        <link rel="stylesheet" href="../assets/css/jqueryUI.css">
        <link rel="stylesheet" href="validacionStyle.css">
        <script src="../assets/js/jquery-v1.10.2.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/jquery-ui.js"></script>
        <script src="../assets/js/jquery.validate.js"></script>   
        <script src="../assets/js/modernizr2.6.2.js"></script>
        <script src="../assets/js/holder.js"></script>
        <script src="../assets/js/validarRegEmpleador.js"></script>


        <style>
            .container
            {
                margin-top: 1%;
                max-width: 1034px;
            }
            .panel panel-primary
            {
                margin-top: 1%;
                display: center;
                max-width: 1034px;

            }
            h2
            {
                text-align: center;
            }
            #publicarOferta
            {
                text-align: right;

            }
        </style>

        <script>
            // fallback para el datepicker con jquery
            Modernizr.load({
                test: Modernizr.inputtypes.date,
                nope: ['http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.7/jquery-ui.min.js', 'jquery-ui.css'],
                complete: function() {
                    $('input[type=date]').datepicker({
                        dateFormat: 'yy-mm-dd'
                    });
                }

            });
        </script>

    </head>
    <body>

        <div id="header" class="navbar navbar-default navbar-static-top">
            <?php
            include_once 'layout/private-header.php';
            ?>
        </div>
        <div id="contenedor" class="container">

            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#Datos">Datos</a></li>
                <li class=""><a href="#Expediente">Expediente</a></li>
                <li class=""><a href="#Citas">Citas</a></li>

            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="Datos">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Paciente</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <?
                                include_once '../clases/db_connect.php';
                                if (isset($_POST['submitted'])) {
                                    foreach ($_POST AS $key => $value) {
                                        $_POST[$key] = mysql_real_escape_string($value);
                                    }
                                    $sql = "INSERT INTO `paciente` ( `nombre_pa` ,  `apellido_pa` ,  `fecha_na_pa` ,  `edad_pa` ,  `genero_pa` ,  `telefono_pa` ,  `direccion_pa` ,  `municipio_pa` ,  `departamento_pa`  ) VALUES(  '{$_POST['nombre_pa']}' ,  '{$_POST['apellido_pa']}' ,  '{$_POST['fecha_na_pa']}' ,  '{$_POST['edad_pa']}' ,  '{$_POST['genero_pa']}' ,  '{$_POST['telefono_pa']}' ,  '{$_POST['direccion_pa']}' ,  '{$_POST['municipio_pa']}' ,  '{$_POST['departamento_pa']}'  ) ";
                                    mysql_query($sql) or die(mysql_error());
                                    echo "Added row.<br />";
                                    echo "<a href='paciente.php'>Regresar a Lista</a>";
                                }
                                ?>

                                <form action='' method='POST'> 
                                    <div class="form-group">
                                        <div><p><b>Nombre Pa:</b><br /><input type='text' class="form-control" name='nombre_pa'/>
                                        </div> 

                                    </div>
                                    <div class="form-group">
                                        <div><p><b>Apellido Pa:</b><br /><input type='text' class="form-control" name='apellido_pa'/>
                                        </div> 

                                    </div>
                                    <div class="form-group">
                                        <div><p><b>Fecha Na Pa:</b><br /><input type='text' class="form-control" name='fecha_na_pa'/>
                                        </div> 

                                    </div>
                                    <div class="form-group">
                                        <div><p><b>Edad Pa:</b><br /><input type='text' class="form-control" name='edad_pa'/>
                                        </div> 

                                    </div>
                                    <div class="form-group">
                                        <div><p><b>Genero Pa:</b><br /><input type='text' class="form-control" name='genero_pa'/>
                                        </div> 

                                    </div>
                                    <div class="form-group">
                                        <div><p><b>Telefono Pa:</b><br /><input type='text' class="form-control" name='telefono_pa'/>
                                        </div> 

                                    </div>
                                    <div class="form-group">
                                        <div><p><b>Direccion Pa:</b><br /><input type='text' class="form-control" name='direccion_pa'/>
                                        </div> 

                                    </div>
                                    <div class="form-group">
                                        <div><p><b>Municipio Pa:</b><br /><input type='text' class="form-control" name='municipio_pa'/>
                                        </div> 

                                    </div>
                                    <div class="form-group">
                                        <div><p><b>Departamento Pa:</b><br /><input type='text' class="form-control" name='departamento_pa'/>
                                        </div> 

                                    </div>
                                    <div class="form-group">
                                        <div><p><input type='submit' value='Add Row' /><input type='hidden' value='1' name='submitted' />
                                        </div> 

                                    </div>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="Expediente">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Ficha</div>
                        <div class="panel-body">

                            <h1 align="center">FICHA PARA DIAGNOSTICO ORAL</h1>

                            <form action="#" id="paciente" method="POST" class="form-horizontal">

                                <div class="form-group">
                                    <label for="Nombre" class="col-lg-3 control-label">Paciente</label>
                                    <div class="col-lg-4">
                                        <input type="text" name="nombre_pa" class="form-control" placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Edad Paciente" class="col-lg-3 control-label">Edad</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="edad_pa" class="form-control" required><br>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Expediente N°" class="col-lg-3 control-label">Expediente N°</label>
                                    <div class="col-lg-3">
                                        <input  type="text" name="no_ex" class="form-control"required><br>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Lugar de origen°" class="col-lg-3 control-label">Lugar de origen</label>
                                    <div class="col-lg-3">
                                        <input  type="text" name="direccion_pa"class="form-control"required><br>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Referido de" class="col-lg-3 control-label">Referido de</label>
                                    <div class="col-lg-3">
                                        <input  type="text" name="referido" class="form-control"required><br>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Fecha" class="col-lg-3 control-label">Fecha</label>
                                    <div class="col-lg-3">
                                        <input  type="date" name="fecha_consulta" class="form-control"required><br>
                                    </div>
                                </div>
                                <div class="form-group">    
                                    <label for="Mensaje" class="col-lg-3 control-label">Motivo de consulta</label>
                                    <div class="col-lg-6">
                                        <textarea name="textarea" name="motivo_consulta" class="form-control col-lg-6" rows="4" required> </textarea>

                                    </div>
                                </div>


                                <div class="form-group">    
                                    <label for="Mensaje" class="col-lg-3 control-label">Antecedentes medicos</label>
                                    <div class="col-lg-6">
                                        <textarea name="textarea" class="form-control col-lg-6" rows="4" required> </textarea>

                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>
                                <center>
                                    <a href="#" class="btn btn-primary btn-large"><i class="glyphicon glyphicon-search"></i> Guardar</a>
                                    <a href="#" class="btn btn-primary btn-large"><i class="glyphicon glyphicon-search"></i> Modificar</a>
                                </center>
                            </form>

                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="Citas">
                    <div class="panel panel-primary">

                        <div class="panel-heading">Seleccione fecha para proxima cita</div>
                        <div class="panel-body">
                            <form action="#" id="busquedaCita" class="form-horizontal">
                                <div class="form-group">
                                    <label for="numero_expediente" class="col-lg-3 control-label">Numero de expediente:</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="numero_exp" class="form-control "   placeholder="-----------" required>
                                    </div>

                                </div> 
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="Nombre_doc" class="col-lg-3 control-label">Doctor: </label>
                                        <div class="col-lg-6">
                                            <input type="text" name="nombre_doc" class="form-control" placeholder="Escriba nombre" required>
                                        </div>
                                    </div>
                                </div>
                                <label for="Fecha_Cita" class="col-lg-3 control-label">Proxima Cita:</label>
                                <div class="col-lg-3">
                                    <input type="date"  class="form-control"><br>
                                    <br>
                                    <label for="hora_Cita" class="col-lg-2 control-label">Hora:</label>
                                    <div class="col-lg-10">
                                        <input type="time"  class="form-control">  
                                    </div>
                                    <br>
                                    <br>

                                    <a href="#" class="btn btn-primary btn-large"><i class="glyphicon glyphicon-search"></i> Guardar</a>
                                    <a href="#" class="btn btn-primary btn-large"><i class="glyphicon glyphicon-search"></i> Limpiar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <script>
                    $('#myTab a').click(function(e) {
                        e.preventDefault();
                        $(this).tab('show');
                    });
                </script>

            </div>
        </div>
    </body>
    <div class="footer">
        <style>
            .footer
            {

                padding: 10px;
                margin: 10px;
            }
        </style>
        <?php
        include_once 'layout/private-footer.php';
        ?>
    </div>
</html>
