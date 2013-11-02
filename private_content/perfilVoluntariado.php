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
            $sql = "insert into voluntariado(nombre_vo, apellido_vo, fecha_na_vo, edad_vo, genero_vo, telefono_vo, direccion_vo,departamento_vo, cod_aso, email_vo)
                values('{$_POST['nombre_vo']}', '{$_POST['apellido_vo']}', '{$_POST['fecha_na_vo']}', '{$_POST['edad_vo']}', '{$_POST['genero_vo']}', '{$_POST['telefono_vo']}', '{$_POST['direccion_vo']}', '{$_POST['departamento_vo']}','1','{$_POST['email_vo']}')";
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
        <div class="container">
            <div class="tab-content">
                <div class="tab-pane active" id="Perfil_volun">

                    <div class="panel panel-primary">
                        <div class="panel-heading">Perfil voluntariado

                        </div>
                        <div class="panel-body">

                            <form action="#" method="POST" class="form-horizontal">
                                <div class="form-group">
                                    <label for="Nombre_doc" class="col-lg-3 control-label">Nombre</label>
                                    <div class="col-lg-4">
                                        <input type="text" name="nombre_vo" class="form-control" placeholder="Escriba un nombre" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="apellido_doc" class="col-lg-3 control-label">Apellido</label>
                                    <div class="col-lg-4">
                                        <input type="text" name="apellido_vo" class="form-control" placeholder="Escriba un apellido" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Fecha_Nacimiento" class="col-lg-3 control-label">Fecha de nacimiento:</label>
                                    <div class="col-lg-3">
                                        <input type="date" name="fecha_na_vo" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Edad" class="col-lg-3 control-label">Edad:</label>
                                    <div class="col-lg-3">
                                        <input type="number" name="edad_vo" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Contrasenia" class="col-lg-3 control-label">Contraseña</label>
                                    <div class="col-lg-4">
                                        <input type="password" name="password_emp" class="form-control" placeholder="Contraseña" required>
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
                                        <input type="tel" name="telefono_vo" placeholder="Escriba un numero de telefono" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="correo" class="col-lg-3 control-label">Correo</label>
                                    <div class="col-lg-4">
                                        <input type="email" name="email_vo" placeholder="Ejemplo: ejemplo@dominio.com" class="form-control" id="focusedInput" required>
                                    </div>
                                </div>
                                <div class="form-group">    
                                    <label for="direccion" class="col-lg-3 control-label">Direccion</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="direcccion_vo" class="form-control" placeholder="Escriba la direccion" required>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Departamento" class="col-lg-3 control-label">Departamento</label>
                                    <div class="col-lg-4">
                                        <select name="departamento_vo" class="form-control" required>

                                            <option value="-1">- Seleccione -</option>
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
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <center>

                                        <input type='submit' name='Guardar' class="btn btn-default btn-large" />

                                        <a href="#" class="btn btn-default btn-large"><i class="glyphicon glyphicon-floppy-open"></i> Modificar</a>
                                    </center>
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
</html>