<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registro de Voluntarios </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/normalize.css">
        <script src="assets/js/jquery-v1.10.2.js"></script>
        <script src="assets/js/bootstrap.js"></script>

    </head>
    <body>
        <!-- NAVBAR
                ================================================== -->
        <div id="header" class="navbar navbar-default navbar-static-top"></div>

        <div id="error"></div>
        <!-- // Script para cargar recursos html con jQuery en una pagina -->
        <script>$(document).ready(function() {
                $("#header").load("layout/public-header.html", function(status, xhr) {
                    if (status == "error") {
                        var msg = "Lo lamentamos, ha habido un errror cargando el Menu: ";
                        $("#error").html(msg + xhr.status + " " + xhr.statusText);
                    }
                });
            });</script>
        <!--[if lt IE 7]>
                <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

        <!-- TODO EL CODIGO HTML QUE VAYAN A UTILIZA AQUI, NO BORREN NINGUNA LINEA DE CODIGO DE LAS QUE YA ESTAN AQUI -->
        <!-- NO NECESITAN PONER NINGUN SCRIPTS, EXCEPTO LAS PROPIAS CLASES CSS QUE CREEN. -->
        <div class="tab-content">
            <div class="tab-pane active" id="regVoluntariado">

                <div class="panel panel-primary">
                    <div class="panel-heading">Registro</div>
                    <div class="panel-body">
                        <?php
                        //echo "hola mundo";

                        if ($_POST['action'] === 'Entrar') {
                            $usuario_vo = $_POST['email_vo'];
                            $pass_vo = $_POST['password_vo'];

                            if (isset($usuario_vo) && !empty($pass_vo)) {
//                                echo "$usuario_vo" . "<br>";
//                                echo "$pass_vo" . "<br>";
                                // echo "Hay POST y usuario y pass entran en el IF.";
                                include "clases/db_connect.php";

                                $result = mysql_query("SELECT nombre_vo FROM voluntariado where email_vo='$usuario_vo' and password_vo='$pass_vo'");
                                while ($row = mysql_fetch_array($result)) {
                                    $nombre = $row{'nombre_vo'};
                                    session_start();
                                    $_SESSION['nombre'] = $nombre;
                                    echo $_SESSION['nombre'];
                                    header("Location: http://localhost:8000/private_content/index.php"); /* Redirect browser */
                                }
                            } else {
                                echo "Por favor introduzca un usuario y contrasenia correctos";
                            }


//                            }
////                            $result2 = mysql_query("SELECT nombre_us, cod_aso FROM usuario");
////                            while ($row = mysql_fetch_array($result2)) {
////                                echo "Nombre: " . $row{'nombre_us'} . "<br>";
////                                echo "Nombre: " . $row{'cod_aso'} . "<br>";
////                            }
//
//                            if (!empty($row['nombre_vo'])) {
////                                header("Location: http://localhost:8000/private_content/index.php"); /* Redirect browser */
//                            } else {
//                                // if query failed
//                                die($result . ">>" . mysql_error());
//                            }
                        }
                        ?>
                        <form action="#" method="POST" class="form-horizontal">

                            <div class="form-group">
                                <label for="correo" class="col-lg-3 control-label">Correo</label>
                                <div class="col-lg-4">
                                    <input type="email" name="email_vo" placeholder="Ejemplo: ejemplo@dominio.com" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Contrasenia" class="col-lg-3 control-label">Contraseña</label>
                                <div class="col-lg-4">
                                    <input type="password" name="password_vo" class="form-control" placeholder="Contraseña">
                                </div>
                                <br>
                                <br>
                                <br>

                                <center><input type='submit' name='action' class="btn btn-default btn-large" value='Entrar' /></center>
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
    </body>
</html>
