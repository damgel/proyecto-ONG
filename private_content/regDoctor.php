<?php
session_start();
$verifica = 1;
$_SESSION["verifica"] = $verifica;
?> 

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
        <link rel="stylesheet" href="../validacionStyle.css">
        <script src="../assets/js/jquery-v1.10.2.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/jquery-ui.js"></script>
        <script src="../assets/js/jquery.validate.js"></script>   
        <script src="../assets/js/modernizr2.6.2.js"></script>
        <script src="../assets/js/holder.js"></script>
        <script src="../assets/js/validarDoctores.js "></script>

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
            body
            {
                background: whitesmoke;
            }
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
            tr:hover
            {
                background: #ddeeff;
            }


        </style>
    </head>
    <body>


        <div id="header" class="navbar navbar-default navbar-static-top">
            <?php
            include_once 'layout/private-header.php';
            ?>
        </div>

        <?php
        include_once '../clases/db_connect.php';
        // LLENAR EL FORMULARIO DE regDoctor con los datos del dr actual para facililar el UPDATE
        //si los campos estan llenos, el update sera mas sencillo y amigable.
        $codToGet = $_SESSION['cod_doc'];
        $getDoctor = mysql_query("SELECT * FROM doctor 
                    where cod_doc=$codToGet");
        while ($row = mysql_fetch_array($getDoctor)) {
            $nombre = $row{'nombre_doc'};
            $apellido = $row{'apellido_doc'};
            $JVPO = $row{'JVPO'};
            $genero = $row{'genero_doc'};
            $fechaNa = $row{'fecha_na_doc'};
            $password = $row{'password_doc'};
            $telefono = $row{'telefono_doc'};
            $direccion = $row{'direccion_doc'};
            $departamento = $row{'departamento_doc'};
        }
        // END FINALIZA EL LLENADO DE LOS CAMPOS
        // IF o condicion que verifica cual de los botones se preciono para determinar la accion a seguir GUARDA o ACTUALIZAR(update)
        session_start();
        $verifica = $_SESSION["verifica"];
        //Codigo para evitar un doble submit y que se ingresen registros duplicados en la db 
        if ($verifica == 1) {
            unset($_SESSION['verifica']);
            if ($_POST['Guardar']) {
                include_once '../clases/db_connect.php';
                foreach ($_POST AS $key => $value) {
                    $_POST[$key] = mysql_real_escape_string($value);
                }
                $sql = "INSERT INTO `doctor` ( `cod_doc` ,  `nombre_doc` ,  `apellido_doc` ,  `JVPO` ,  `genero_doc` ,  `fecha_na_doc` ,  `password_doc` ,  `telefono_doc` ,  `direccion_doc` ,  `departamento_doc` ,  `cod_as`  ) VALUES(  '{$_POST['cod_doc']}' ,  '{$_POST['nombre_doc']}' ,  '{$_POST['apellido_doc']}' , '{$_POST['JVPO']}' ,  '{$_POST['genero_doc']}' ,  '{$_POST['fecha_na_doc']}' ,  '{$_POST['password_doc']}' ,'{$_POST ['telefono_doc']}' ,  '{$_POST['direccion_doc']}' ,  '{$_POST['departamento_doc']
                        }' , '{$_POST['cod_as']
                        }'  ) ";
                mysql_query($sql) or die(mysql_error());
                echo "<p class='succesUs'>Guardado Correctamente!.</p>";
                header("Location: http://localhost:8000/regDoctor.php"); /* Redirect browser */
                //else if que detecta la accion del boton presionado y actualiza el dr actualmente logueado
            } elseif ($_POST['Modificar']) {
                include_once '../clases/db_connect.php';
                $id = (int) $_SESSION['cod_doc'];
                foreach ($_POST AS $key => $value) {
                    $_POST[$key] = mysql_real_escape_string($value);
                }
                $sql = "UPDATE `doctor` SET `nombre_doc` =  '{$_POST['nombre_doc']}' ,  `apellido_doc` =  '{$_POST['apellido_doc']}' ,  `JVPO` =  '{$_POST['JVPO']}' ,  `genero_doc` =  '{$_POST['genero_doc']}' ,  `fecha_na_doc` =  '{$_POST['fecha_na_doc']}' ,  `password_doc` =  '{$_POST['password_doc']}' ,  `telefono_doc` =  '{$_POST['telefono_doc']}' ,  `direccion_doc` =  '{$_POST['direccion_doc']}' ,  `departamento_doc` =  '{$_POST['departamento_doc']}' ,  `cod_as` =  '{$_POST['cod_as']}'   WHERE `cod_doc` = $id ";
                mysql_query($sql) or die(mysql_error());
                echo (mysql_affected_rows()) ? "<p class='succesUs'>Usuario editado correctamente!</p>.<br />" : "<p class='errorUs'>Usuario no editado</p> <br />";
                header("Location: http://localhost:8000/regDoctor.php"); /* Redirect browser */
            }
        } else {
            echo "Genial! evitamos un doble sumit!!!";
            header("Location: http://localhost:8000/regDoctor.php"); /* Redirect browser */
        }
        ?>

        <div id="contenedor" class="container">
            <style>
                .succesUs
                {
                    font-size: 16px;
                    font-weight: bold;
                    color: green;
                }
                .errorUs
                {
                    font-size: 16px;
                    font-weight: bold;
                    color: red;
                }

            </style>
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#Perfil">Administracion</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="Perfil">

                    <div class="panel panel-primary">
                        <div class="panel-heading"><?php echo 'ID DOCTOR: ' . $_SESSION['cod_doc']; ?></div>
                        <div class="panel-body">

                            <form method="POST" action="" class="form-horizontal" id="regDoctor">

                                <div class="form-group">
                                    <label for="Nombre_doc" class="col-lg-3 control-label">Nombre del Doctor</label>
                                    <div class="col-lg-4">
                                        <input type="text" name="nombre_doc" value="<?php echo $nombre ?>" class="form-control" placeholder="Escriba su nombre" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Apellido_doc"  class="col-lg-3 control-label">Apellido del Doctor</label>
                                    <div class="col-lg-4">
                                        <input type="text" name="apellido_doc" value="<?php echo $apellido ?>" class="form-control" placeholder="Escriba su apellido" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="sexo" class="col-lg-3 control-label">Sexo</label>
                                    <div class="col-lg-4">
                                        <select name="genero_doc" class="form-control" required="">
                                            <option value="<?php echo $genero ?>" >- Seleccione -</option>
                                            <option value="M">Masculino</option>
                                            <option value="F">Femenino</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="JVPO" class="col-lg-3 control-label">J.V.P.O</label>
                                    <div class="col-lg-4">
                                        <input type="text" name="JVPO" value="<?php echo $JVPO ?>"  class="form-control" placeholder="Escriba el numero de J.V.P.O" required>
<!--///*JUNTA DE VIGILANCIA DE LA PROFESION ODONTOLOGICA*/-->
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Fecha_Nacimiento" class="col-lg-3 control-label">Fecha de nacimiento:</label>
                                    <div class="col-lg-3">
                                        <input type="date" name="fecha_na_doc" value="<?php echo $fechaNa ?>"  class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Contrasenia" class="col-lg-3 control-label">Contraseña</label>
                                    <div class="col-lg-4">
                                        <input type="password" name="password_doc" value="<?php echo $password ?>"  class="form-control" placeholder="Contraseña" required>
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
                                        <input type="tel" name="telefono_doc" value="<?php echo $telefono ?>"  placeholder="Escriba un numero de telefono" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="correo" class="col-lg-3 control-label">Correo</label>
                                    <div class="col-lg-4">
                                        <input type="email" name="email_doc" value=""  placeholder="Ejemplo: ejemplo@dominio.com" class="form-control" id="focusedInput" required>
                                    </div>
                                </div>


                                <div class="form-group">    
                                    <label for="direccion" class="col-lg-3 control-label">Direccion</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="direccion_doc" value="<?php echo $direccion ?>"  class="form-control" placeholder="Escriba la direccion" required>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="departamento" class="col-lg-3 control-label">departamento</label>
                                    <div class="col-lg-4">
                                        <select name="departamento_doc" class="form-control" required>

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

                                <br>

                                <center>
                                    <input type='submit' name="Guardar" value='guardar' class="btn btn-info btn-large" />
                                    <input type='submit' name="Modificar" value='modificar' class="btn btn-info btn-large" /> 

                                </center> 
                                <br>
                            </form>
                            <div class="table-responsive">
                                <?php
                                include_once '../clases/db_connect.php';
                                $SetPermiso;
                                $tabla = "table ";
                                echo "<table class=" . $tabla . ">";
                                echo "<tr>";
                                echo "<td><b>Id</b></td>";
                                echo "<td><b>Nombre</b></td>";
                                echo "<td><b>Apellido</b></td>";
                                echo "<td><b>JVPO</b></td>";
                                echo "<td><b>Fecha Nacimiento</b></td>";

                                echo "<td><b>Telefono</b></td>";
                                echo "<td><b>Direccion</b></td>";
                                echo "<td><b>Activo</b></td>";
                                echo "<td><b>Admin</b></td>";
                                echo "<td><b>Eliminar</b></td>";
                                echo "</tr>";
                                $result = mysql_query("SELECT * FROM `doctor` ") or trigger_error(mysql_error());
                                while ($row = mysql_fetch_array($result)) {
                                    foreach ($row AS $key => $value) {
                                        $row[$key] = stripslashes($value);
                                    }
                                    $permiso_doc = $_SESSION['permiso_doc'];
                                    if ($permiso_doc === "S") {
                                        $SetPermiso = "<a href=eliminarDoctor.php?id={$row['cod_doc']
                                                }>Eliminar</a>";
                                    } elseif ($permiso_doc === "N") {
                                        $SetPermiso = "No Permitido";
                                    }
                                    echo "<tr>";
                                    echo "<td valign='top'>" . nl2br($row['cod_doc']) . "</td>";
                                    echo "<td valign='top'>" . nl2br($row['nombre_doc']) . "</td>";
                                    echo "<td valign='top'>" . nl2br($row['apellido_doc']) . "</td>";
                                    echo "<td valign='top'>" . nl2br($row['JVPO']) . "</td>";
                                    echo "<td valign='top'>" . nl2br($row['fecha_na_doc']) . "</td>";
                                    echo "<td valign='top'>" . nl2br($row['telefono_doc']) . "</td>";
                                    echo "<td valign='top'>" . nl2br($row['direccion_doc']) . "</td>";
                                    echo "<td valign='top'>" . nl2br($row['activo']) . "</td>";
                                    echo "<td valign='top'>" . nl2br($row['permiso']) . "</td>";
                                    echo "<td valign='top'>    " . $SetPermiso . "    </td> ";
                                    echo "</tr>";
                                }
                                echo "</table>";
                                ?>
                            </div>
                        </div>
                    </div>



                </div>

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
