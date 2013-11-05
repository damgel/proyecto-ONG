<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Perfil voluntariado</title>
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
        <script src="../assets/js/perfilVoluntariado.js"></script>

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
                width: 90%;
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
    </head>
    <body>
        <?php
        //include database configuration

        if (isset($_POST['Guardar'])) {

            include_once '../clases/db_connect.php';
            //sql insert statement
            $sql = "insert into voluntariado(nombre_vo, apellido_vo, fecha_na_vo, edad_vo, genero_vo, telefono_vo, direccion_vo,departamento_vo, cod_aso, email_vo, password_vo)
                values('{$_POST['nombre_vo']}', '{$_POST['apellido_vo']}', '{$_POST['fecha_na_vo']}', '{$_POST['edad_vo']}', '{$_POST['genero_vo']}', '{$_POST['telefono_vo']}', '{$_POST['direccion_vo']}', '{$_POST['departamento_vo']}','1','{$_POST['email_vo']}','{$_POST['password_vo']}')";
            //insert query to the database
            if (mysql_query($sql)) {
                session_start();
                //if successful query
                echo "<script>alert('registro guardado correctamente!')</script>";
                $sql = "";

                $_SESSION['nombre'] = $_POST['nombre_vo'];
                header("Location: http://localhost:8000/private_content/index.php"); /* Redirect browser */
                exit();
            } else {
                //if query failed
                die($sql . ">>" . mysql_error());
            }
        }
        ?>

        <div id="header" class="navbar navbar-default navbar-static-top">
            <?php
            include_once 'layout/private-header.php';
            ?>
        </div>
       
        <div id="error"></div>
        <!-- // Script para cargar recursos html con jQuery en una pagina -->
<!--        <script>$(document).ready(function() {
                $("#header").load("layout/private-header.html", function(status, xhr) {
                    if (status == "error")
                    {
                        var msg = "Lo lamentamos, ha habido un errror cargando el Menu: ";
                        $("#error").html(msg + xhr.status + " " + xhr.statusText);
                    }
                });
            });
        </script> -->
          <?php
            include_once 'layout/private-header.php';
            if (isset($_GET['cod_vo'])) {
                include_once '../clases/db_connect.php';
                $cod_vo = $_GET['cod_vo'];
                $getPaciente = mysql_query("SELECT * FROM voluntariado where cod_vo=$cod_vo");
                while ($row = mysql_fetch_array($getPaciente)) {
                    $nombre = $row{'nombre_vo'};
                    $apellido = $row{'apellido_vo'};
                    $fechaNa = $row{'fecha_na_vo'};
                    $edad = $row{'edad_vo'};
                    $genero = $row{'genero_vo'};
                    $telefono = $row{'telefono_vo'};
                    $direccion = $row{'direccion_vo'};
                    $municipio = $row{'municipio_vo'};
                    $departamento = $row{'departamento_vo'};
					$email = $row{'email_vo'};
					$password = $row{'password_vo'};
                }
            }
            ?>
        <div class="container">
        
        <?php
                if (isset($_POST['submitted'])) {
                    foreach ($_POST AS $key => $value) {
                        $_POST[$key] = mysql_real_escape_string($value);
                    }
                    $sql = "UPDATE `voluntariado` SET  `nombre_vo` =  '{$_POST['nombre_vo']}' ,  `apellido_vo` =  '{$_POST['apellido_vo']}' ,  `fecha_na_vo` =  '{$_POST['fecha_na_vo']}' ,  `edad_vo` =  '{$_POST['edad_vo']}' ,  `genero_vo` =  '{$_POST['genero_vo']}' ,  `telefono_vo` =  '{$_POST['telefono_vo']}' ,  `direccion_vo` =  '{$_POST['direccion_vo']}' ,  `municipio_vo` =  '{$_POST['municipio_vo']}' ,  `departamento_vo` =  '{$_POST['departamento_vo']}',  `email_vo` =  '{$_POST['email_vo']}',  `password_vo` =  '{$_POST['password_vo']}'   WHERE `cod_vo` = $cod_vo ";
                    mysql_query($sql) or die(mysql_error());
                    echo (mysql_affected_rows()) ? "Voluntario se actualizado correctamente!.<br />" : "Error al actualizar!. <br />";
                } else {
                    
                }
                ?>
            <div class="tab-content">
                <div class="tab-pane active" id="Perfil_volun">

                    <div class="panel panel-primary">
                        <div class="panel-heading">Perfil voluntariado

                        </div>
                        <div class="panel-body">

                            <form action="#" method="POST" class="form-horizontal" id="perfilVoluntariado">
                                <div class="form-group">
                                    <label for="Nombre_doc" class="col-lg-3 control-label">Nombre</label>
                                    <div class="col-lg-4">
                                        <input type="text" name="nombre_vo" value="<?php echo $nombre ?>" class="form-control" placeholder="Escriba un nombre" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="apellido_doc" class="col-lg-3 control-label">Apellido</label>
                                    <div class="col-lg-4">
                                        <input type="text" name="apellido_vo" value="<?php echo $apellido ?>" class="form-control" placeholder="Escriba un apellido" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Fecha_Nacimiento" class="col-lg-3 control-label">Fecha de nacimiento:</label>
                                    <div class="col-lg-3">
                                        <input type="date" name="fecha_na_vo" value="<?php echo $fechaNa ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Edad" class="col-lg-3 control-label">Edad:</label>
                                    <div class="col-lg-3">
                                        <input type="number" name="edad_vo" value="<?php echo $edad ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="sexo" class="col-lg-3 control-label">Sexo</label>
                                    <div class="col-lg-4">
                                     <select name="genero_vo" class="form-control" required="">
                                            <option value="<?php echo $genero ?>" >- Seleccione -</option>
                                            <option value="M">Masculino</option>
                                            <option value="F">Femenino</option>
                                        </select>
                                    </div>
                                  </div>   
                      
                                  <div class="form-group">
                                    <label for="telefono" class="col-lg-3 control-label">Telefono</label>
                                    <div class="col-lg-4">
                                        <input type="tel" name="telefono_vo" value="<?php echo $telefono ?>" placeholder="Escriba un numero de telefono" class="form-control" required>
                                    </div>
                                </div>
                                  <div class="form-group">    
                                    <label for="direccion" class="col-lg-3 control-label">Direccion</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="direcccion_vo" value="<?php echo $direccion ?>" class="form-control" placeholder="Escriba la direccion" required>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Departamento" class="col-lg-3 control-label">Departamento</label>
                                    <div class="col-lg-4">
                                        <select name="departamento_vo" class="form-control" required>

                                            <option value="<?php echo $departamento ?>">- Seleccione -</option>
                                            <option value="san salvador">San Salvador</option>
                                            <option value="la paz">La Paz</option>
                                            <option value="san miguel">San Miguel</option>
                                            <option value="la union">La Union</option>
                                            <option value="la libertad">La Libertad</option>
                                            <option value="santa ana">Santa Ana</option>
                                            <option value="sonsonate">Sonsonate</option>
                                            <option value="ahuachapan">Aguachapan</option>
                                            <option value="san vicente">San Vicente</option>
                                            <option value="chalatenango">Chalatenango</option>
                                            <option value="cabanias">Cabañas</option>
                                            <option value="cuscatlan">Cuscatlan</option>
                                            <option value="usulutan">Usulutan</option>
                                            <option value="morazan">Morazan</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="correo" class="col-lg-3 control-label">Correo</label>
                                    <div class="col-lg-4">
                                        <input type="email" name="email_vo" value="<?php echo $email ?>" placeholder="Ejemplo: ejemplo@dominio.com" class="form-control" id="focusedInput" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Contrasenia" class="col-lg-3 control-label">Contraseña</label>
                                    <div class="col-lg-4">
                                        <input type="password" name="password_vo" value="<?php echo $password ?>" class="form-control" placeholder="Contraseña" required>
                                    </div> 
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <center>

                                      
                                      
                                   <input type='submit' name='Guardar' value='guardar' class="btn btn-default btn-large" />

                                   <input type='submit' name='Modificar' value='modificar' class="btn btn-default btn-large" />
                                    </center>
                                </div>
    
                        
          
                            </form>
                            
                             <?php
                                include_once '../clases/db_connect.php';
                               
                                $tabla = "table ";
                                echo "<table class=" . $tabla . ">";
                                echo "<tr>";
                                echo "<td><b>Id</b></td>";
                                echo "<td><b>Nombre</b></td>";
                                echo "<td><b>Apellido</b></td>";
                                echo "<td><b>Fecha Nacimiento</b></td>";
								echo "<td><b>Edad</b></td>";
                                echo "<td><b>Genero</b></td>";

                                echo "<td><b>Telefono</b></td>";
                                echo "<td><b>Direccion</b></td>";
                                echo "<td><b>Email</b></td>";
                                echo "<td><b>Password</b></td>";
                              ;
                                echo "</tr>";
                                $result = mysql_query("SELECT * FROM `voluntariado` ") or trigger_error(mysql_error());
                                while ($row = mysql_fetch_array($result)) {
                                    foreach ($row AS $key => $value) {
                                        $row[$key] = stripslashes($value);
                                    }
                                    
                                    echo "<tr>";
                                    echo "<td valign='top'>" . nl2br($row['cod_vo']) . "</td>";
                                    echo "<td valign='top'>" . nl2br($row['nombre_vo']) . "</td>";
                                    echo "<td valign='top'>" . nl2br($row['apellido_vo']) . "</td>";
                                    echo "<td valign='top'>" . nl2br($row['fecha_na_vo']) . "</td>";
									echo "<td valign='top'>" . nl2br($row['edad_vo']) . "</td>";
									echo "<td valign='top'>" . nl2br($row['genero_vo']) . "</td>";
                                    echo "<td valign='top'>" . nl2br($row['telefono_vo']) . "</td>";
                                    echo "<td valign='top'>" . nl2br($row['direccion_vo']) . "</td>";
									echo "<td valign='top'>" . nl2br($row['departamento_vo']) . "</td>";
                                    echo "<td valign='top'>" . nl2br($row['email_vo']) . "</td>";
                                    echo "<td valign='top'>" . nl2br($row['password_vo']) . "</td>";
                                    
                                   
                                    echo "<td valign='top'><a href=perfilVoluntariado.php?cod_vo={$row['cod_vo']}>Editar</a></td><td><a href=eliminarvoluntario.php?cod_vo={$row['cod_vo']}>Eliminar</a></td> ";
                                    echo "</tr>";
                                }
                                echo "</table>";
                                ?>

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