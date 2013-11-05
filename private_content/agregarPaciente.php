<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Agregar Paciente</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="../assets/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/css/normalize.css">
        <link rel="stylesheet" href="../assets/css/jqueryUI.css">
        <link rel="stylesheet" href="../validacionStyle.css">
        <script src="../assets/js/jquery-v1.10.2.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/jquery-ui.js"></script>
        <script src="../assets/js/jquery.validate.js"></script>   
        <script src="../assets/js/modernizr2.6.2.js"></script>
        <script src="../assets/js/holder.js"></script>
        <script src="../assets/js/validaragregarPaciente.js"></script>


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
                <li class="active"><a href="#Datos">Agregar Paciente</a></li>
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
                                    echo "Paciente guardado correctamente!.<br />";
                                }
                                ?>

                                <form action='' method='POST'  id="agregarPaciente"> 
                                    <a href='paciente.php'>Regresar</a><br><br>
                                    <div class="form-group">
                                        <div class="col-lg-4"><b>Nombre Paciente:</b><br /><input type='text' class="form-control" name='nombre_pa' required/>
                                        </div> 

                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-4"><b>Apellido Paciente:</b><br /><input type='text' class="form-control" name='apellido_pa' required/>
                                        </div> 

                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-4"><b>Fecha Na Paciente:</b><br /><input type='date' class="form-control" name='fecha_na_pa' required/>
                                        </div> 

                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-4"><b>Edad Paciente:</b><br /><input type='text' class="form-control" name='edad_pa' required/>
                                        </div> 

                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-4"><b>Genero Paciente:</b><br />
                                            <select name="genero_pa" class="form-control" required="">
                                                <option value="<?php echo $genero ?>" >- Seleccione -</option>
                                                <option value="Masculino">Masculino</option>
                                                <option value="Femenino">Femenino</option>
                                            </select>
                                        </div> 

                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-4"><b>Telefono Paciente:</b><br /><input type='text' class="form-control" name='telefono_pa' required/>
                                        </div> 

                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-4"><b>Direccion Paciente:</b><br /><input type='text' class="form-control" name='direccion_pa' required/>
                                        </div> 

                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-4"><b>Municipio Paciente:</b><br /><input type='text' class="form-control" name='municipio_pa' required/>
                                        </div> 

                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-4"><b>Departamento Paciente:</b><br />
                                            <select name="departamento_pa" class="form-control" required>

                                                <option value="<?php echo $departamento ?>">- Seleccione -</option>
                                                <option value="San Salvador">San Salvador</option>
                                                <option value="La Paz">La Paz</option>
                                                <option value="San Miguel">San Miguel</option>
                                                <option value="La union">La Union</option>
                                                <option value="La Libertad">La Libertad</option>
                                                <option value="Santa Ana">Santa Ana</option>
                                                <option value="Sonsonate">Sonsonate</option>
                                                <option value="Ahuachapan">Ahuachapan</option>
                                                <option value="San Vicente">San Vicente</option>
                                                <option value="Chalatenango">Chalatenango</option>
                                                <option value="Cabanias">Cabañas</option>
                                                <option value="Cuscatlan">Cuscatlan</option>
                                                <option value="Usulutan">Usulutan</option>
                                                <option value="Morazan">Morazan</option>

                                            </select>
                                        </div> 

                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-4">
                                            <br><input type='submit' class="btn btn-info btn-large" value='Guardar Paciente' /><input type='hidden' value='1' name='submitted' />
                                        </div> 

                                    </div>
                                </form> 
                            </div>
                        </div>
                    </div>
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
