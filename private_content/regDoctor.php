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
            .CSSTableGenerator {
                margin:0px;padding:0px;
                width:100%;
                box-shadow: 10px 10px 5px #888888;
                border:1px solid #e00000;

                -moz-border-radius-bottomleft:0px;
                -webkit-border-bottom-left-radius:0px;
                border-bottom-left-radius:0px;

                -moz-border-radius-bottomright:0px;
                -webkit-border-bottom-right-radius:0px;
                border-bottom-right-radius:0px;

                -moz-border-radius-topright:0px;
                -webkit-border-top-right-radius:0px;
                border-top-right-radius:0px;

                -moz-border-radius-topleft:0px;
                -webkit-border-top-left-radius:0px;
                border-top-left-radius:0px;
            }.CSSTableGenerator table{
                width:100%;
                height:100%;
                margin:0px;padding:0px;
            }.CSSTableGenerator tr:last-child td:last-child {
                -moz-border-radius-bottomright:0px;
                -webkit-border-bottom-right-radius:0px;
                border-bottom-right-radius:0px;
            }
            .CSSTableGenerator table tr:first-child td:first-child {
                -moz-border-radius-topleft:0px;
                -webkit-border-top-left-radius:0px;
                border-top-left-radius:0px;
            }
            .CSSTableGenerator table tr:first-child td:last-child {
                -moz-border-radius-topright:0px;
                -webkit-border-top-right-radius:0px;
                border-top-right-radius:0px;
            }.CSSTableGenerator tr:last-child td:first-child{
                -moz-border-radius-bottomleft:0px;
                -webkit-border-bottom-left-radius:0px;
                border-bottom-left-radius:0px;
            }.CSSTableGenerator tr:hover td{
                background-color:#ffffff;


            }
            .CSSTableGenerator td{
                vertical-align:middle;
                background:-o-linear-gradient(bottom, #e5e5e5 5%, #ffffff 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #e5e5e5), color-stop(1, #ffffff) ); 
                background:-moz-linear-gradient( center top, #e5e5e5 5%, #ffffff 100% );
                filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#e5e5e5", endColorstr="#ffffff");	background: -o-linear-gradient(top,#e5e5e5,ffffff);

                background-color:#e5e5e5;

                border:1px solid #e00000;
                border-width:0px 1px 1px 0px;
                text-align:left;
                padding:10px;
                font-size:14px;
                font-family:Arial;
                font-weight:normal;
                color:#000000;
            }.CSSTableGenerator tr:last-child td{
                border-width:0px 1px 0px 0px;
            }.CSSTableGenerator tr td:last-child{
                border-width:0px 0px 1px 0px;
            }.CSSTableGenerator tr:last-child td:last-child{
                border-width:0px 0px 0px 0px;
            }
            .CSSTableGenerator tr:first-child td{
                background:-o-linear-gradient(bottom, #56aaff 5%, #56aaff 100%);	
                background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #56aaff), color-stop(1, #56aaff) );
                background:-moz-linear-gradient( center top, #56aaff 5%, #56aaff 100% );
                filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#56aaff", endColorstr="#56aaff");	
                background: -o-linear-gradient(top,#56aaff,56aaff);
                background-color:#56aaff;
                border:0px solid #e00000;
                text-align:center;
                border-width:0px 0px 1px 1px;
                font-size:14px;
                font-family:Arial;
                font-weight:bold;
                color:#ffffff;
            }
            .CSSTableGenerator tr:first-child:hover td{
                background:-o-linear-gradient(bottom, #56aaff 5%, #56aaff 100%);	
                background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #56aaff), color-stop(1, #56aaff) );
                background:-moz-linear-gradient( center top, #56aaff 5%, #56aaff 100% );
                filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#56aaff", endColorstr="#56aaff");	
                background: -o-linear-gradient(top,#56aaff,56aaff);
                background-color:#56aaff;
            }
            .CSSTableGenerator tr:first-child td:first-child{
                border-width:0px 0px 1px 0px;
            }
            .CSSTableGenerator tr:first-child td:last-child{
                border-width:0px 0px 1px 1px;
            }
        </style>
    </head>
    <body>


        <div id="header" class="navbar navbar-default navbar-static-top">
            <?php
            include 'layout/private-header.php';
            ?>
        </div>
        <?php
        if (isset($_POST['addDoctor'])) {
            include_once '../clases/db_connect.php';
            foreach ($_POST AS $key => $value) {
                $_POST[$key] = mysql_real_escape_string($value);
            }
            $sql = "INSERT INTO `doctor` ( `cod_doc` ,  `nombre_doc` ,  `apellido_doc` ,  `JVPO` ,  `genero_doc` ,  `fecha_na_doc` ,  `password_doc` ,  `telefono_doc` ,  `direccion_doc` ,  `departamento_doc` ,  `cod_as`  ) VALUES(  '{$_POST['cod_doc']}' ,  '{$_POST['nombre_doc']}' ,  '{$_POST['apellido_doc']}' , '{$_POST['JVPO']}' ,  '{$_POST['genero_doc']}' ,  '{$_POST['fecha_na_doc']}' ,  '{$_POST['password_doc']}' ,'{$_POST['telefono_doc']}' ,  '{$_POST['direccion_doc']}' ,  '{$_POST['departamento_doc']}' , '{$_POST['cod_as']}'  ) ";
            mysql_query($sql) or die(mysql_error());
            echo "Added row.<br />";
            //echo "<a href='verDoctores.php'>Back To Listing</a>";
        } elseif (isset($_POST['editDoctor'])) {
            include_once '../clases/db_connect.php';
            if (isset($_SESSION['cod_doc'])) {
                $id = (int) $_SESSION['id_doc'];
                if (isset($_POST['updateDoctor'])) {
                    foreach ($_POST AS $key => $value) {
                        $_POST[$key] = mysql_real_escape_string($value);
                    }
                    $sql = "UPDATE `doctor` SET `nombre_doc` =  '{$_POST['nombre_doc']}' ,  `apellido_doc` =  '{$_POST['apellido_doc']}' ,  `JVPO` =  '{$_POST['JVPO']}' ,  `genero_doc` =  '{$_POST['genero_doc']}' ,  `fecha_na_doc` =  '{$_POST['fecha_na_doc']}' ,  `password_doc` =  '{$_POST['password_doc']}' ,  `telefono_doc` =  '{$_POST['telefono_doc']}' ,  `direccion_doc` =  '{$_POST['direccion_doc']}' ,  `departamento_doc` =  '{$_POST['departamento_doc']}' ,  `cod_as` =  '{$_POST['cod_as']}'   WHERE `cod_doc` = {$_SESSION['cod_doc']} ";
                    mysql_query($sql) or die(mysql_error());
                    echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />";
                    echo "<a href='verDoctores.php'>Back To Listing</a>";
                }
            }
            $row = mysql_fetch_array(mysql_query("SELECT * FROM `doctor` WHERE `id` = '$id' "));
            echo 'ID DOCTOR ACTIVO;' . $_SESSION['cod_doc'];
        }
        ?>

        <div id="contenedor" class="container">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#Perfil">Perfil</a></li>
                <li class=""><a href="#Agenda">Agenda de Trabajo</a></li>

            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="Perfil">

                    <div class="panel panel-primary">
                        <div class="panel-heading"><?php echo 'ID DOCTOR: ' . $_SESSION['id_doc']; ?></div>
                        <div class="panel-body">

                            <form action="#" id="perfilDoctor" method="POST" class="form-horizontal">

                                <div class="form-group">
                                    <label for="Nombre_doc" class="col-lg-3 control-label">Nombre del Doctor</label>
                                    <div class="col-lg-4">
                                        <input type="text" name="nombre_doc" class="form-control" placeholder="Escriba su nombre" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Apellido_doc" class="col-lg-3 control-label">Apellido del Doctor</label>
                                    <div class="col-lg-4">
                                        <input type="text" name="apellido_doc" class="form-control" placeholder="Escriba su apellido" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="sexo" class="col-lg-3 control-label">Sexo</label>
                                    <div class="col-lg-4">
                                        <select name="genero_doc" class="form-control" required="">
                                            <option value="NONE">- Seleccione -</option>
                                            <option value="M">Masculino</option>
                                            <option value="F">Femenino</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="JVPO" class="col-lg-3 control-label">J.V.P.O</label>
                                    <div class="col-lg-4">
                                        <input type="text" name="JVPO" class="form-control" placeholder="Escriba el numero de J.V.P.O" required>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Fecha_Nacimiento" class="col-lg-3 control-label">Fecha de nacimiento:</label>
                                    <div class="col-lg-3">
                                        <input type="date" name="fecha_na_doc" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Contrasenia" class="col-lg-3 control-label">Contraseña</label>
                                    <div class="col-lg-4">
                                        <input type="password" name="password_doc" class="form-control" placeholder="Contraseña" required>
                                    </div>  
                                </div>

                                <div class="form-group">
                                    <label for="ConfirmContrasenia" class="col-lg-3 control-label">Confirme contraseña</label>
                                    <div class="col-lg-4">
                                        <input type="password" name="confirm_password" class="form-control" placeholder="Confirme su contraseña" required>
                                    </div>  
                                </div>    
                                <div class="form-group">
                                    <label for="telefono" class="col-lg-3 control-label">Telefono</label>
                                    <div class="col-lg-4">
                                        <input type="tel" name="telefono_doc" placeholder="Escriba un numero de telefono" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="correo" class="col-lg-3 control-label">Correo</label>
                                    <div class="col-lg-4">
                                        <input type="email" name="email_emp" placeholder="Ejemplo: ejemplo@dominio.com" class="form-control" id="focusedInput" required>
                                    </div>
                                </div>


                                <div class="form-group">    
                                    <label for="direccion" class="col-lg-3 control-label">Direccion</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="direccion_doc" class="form-control" placeholder="Escriba la direccion" required>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="departamento" class="col-lg-3 control-label">departamento</label>
                                    <div class="col-lg-4">
                                        <select name="departamento_doc" class="form-control" required="">

                                            <option value="NONE">- Seleccione -</option>
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

                                <br>

                                <center>
                                    <input type='submit' value='Guardar' class="btn btn-info btn-large" /><input type='hidden' value='1' name='addDoctor' /> 
                                    <input type='submit' value='Modificar' class="btn btn-info btn-large" /><input type='hidden' value='1' name='editDoctor' /> 

                                </center> 
                                <br>
                            </form>
                            <div class="CSSTableGenerator">

                                <?php
                                include_once '../clases/db_connect.php';
                                echo "<table border=1 >";
                                echo "<tr>";
                                echo "<td><b>Codigo</b></td>";
                                echo "<td><b>Nombre</b></td>";
                                echo "<td><b>Apellido</b></td>";
                                echo "<td><b>JVPO</b></td>";
                                echo "<td><b>Fecha Nacimiento</b></td>";
                                echo "<td><b>Password</b></td>";
                                echo "<td><b>Telefono</b></td>";
                                echo "<td><b>Direccion</b></td>";
                                echo "<td><b>Asociacion</b></td>";
                                echo "<td><b>Eliminar</b></td>";
                                echo "</tr>";
                                $result = mysql_query("SELECT * FROM `doctor`") or trigger_error(mysql_error());
                                while ($row = mysql_fetch_array($result)) {
                                    foreach ($row AS $key => $value) {
                                        $row[$key] = stripslashes($value);
                                    }
                                    echo "<tr>";
                                    echo "<td valign='top'>" . nl2br($row['cod_doc']) . "</td>";
                                    echo "<td valign='top'>" . nl2br($row['nombre_doc']) . "</td>";
                                    echo "<td valign='top'>" . nl2br($row['apellido_doc']) . "</td>";
                                    echo "<td valign='top'>" . nl2br($row['JVPO']) . "</td>";
                                    echo "<td valign='top'>" . nl2br($row['fecha_na_doc']) . "</td>";
                                    echo "<td valign='top'>" . nl2br($row['password_doc']) . "</td>";
                                    echo "<td valign='top'>" . nl2br($row['telefono_doc']) . "</td>";
                                    echo "<td valign='top'>" . nl2br($row['direccion_doc']) . "</td>";
                                    echo "<td valign='top'>" . nl2br($row['cod_as']) . "</td>";
                                    echo "<td valign='top'><a href=eliminarDoctor.php?id={$row['cod_doc']}>Eliminar</a></td> ";
                                    echo "</tr>";
                                }
                                echo "</table>";
                                ?>

                            </div>
                        </div>
                    </div>



                </div>
                <div class="tab-pane" id="Agenda">

                    <div class="panel panel-primary">

                        <div class="panel-heading">Agenda</div>


                        <div class="panel-body">

                            <form action="#" method="POST" class="form-horizontal" role="form">

                                <div class="form-group">       

                                    <br>      
                                    <fieldset>
                                        <center><legend> Detalles de la Agenda</legend></center>
                                        <label for="Fecha_Cita" class="col-lg-3 control-label">Fecha:</label>
                                        <div class="col-lg-3">
                                            <input type="date"  class="form-control"><br>
                                            <br>
                                            <label for="hora_Cita" class="col-lg-2 control-label">Hora:</label>
                                            <div class="col-lg-10">
                                                <input type="time"  class="form-control">  
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <center><button type="submit" class="btn btn-primary btn-lg">Buscar</button></center>  





                            </form>
                        </div>

                    </div>


                    <script>
                        $('#myTab a').click(function(e) {
                            e.preventDefault();
                            $(this).tab('show');
                        });
                    </script>


                </div>


                <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
            </div>
        </div>
    </body>
</html>
