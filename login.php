<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="es-ES" class="no-js"> 
    <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Loguearse</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="validacionStyle.css">

        <script src="assets/js/jquery-v1.10.2.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.validate.js"></script>   
        <script src="assets/js/validarLogin.js"></script>   
        <script src="assets/js/modernizr2.6.2.js"></script>



        <style>
            .container
            {
                margin-top: 1%;

            }
            .panel panel-primary
            {

                display: center;

            }
            h2
            {
                text-align: center;
            }
            #frm-login
            {
                float:left;    /*tambien puede poner float:right, para que se alineé a la derecha */
                padding:10px;
                width:500px;
                margin:40px; 

            }
            #registrarse-container
            {
                float:left;       /*tambien puede poner float:right, para que se alineé a la derecha */
                padding:10px;
                width:400px;
                margin:40px;


            }


        </style>


    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- NAVBAR
        ================================================== -->

        <div id="header1" class="navbar navbar-default navbar-static-top"></div>

        <div id="error"></div>
        <!-- // Script para cargar recursos html con jQuery en una pagina -->
        <script>$(document).ready(function() {
                $("#header1").load("layout/public-header.html", function(status, xhr) {
                    if (status == "error")
                    {
                        var msg = "Lo lamentamos, ha habido un errror cargando el Menu: ";
                        $("#error").html(msg + xhr.status + " " + xhr.statusText);
                    }
                });
            });</script> 
        <?php
        if ($_POST['action'] === 'Entrar') {
            echo 'hola desde IF EN POST';
            $usuario_doc = $_POST['JVPO'];
            $pass_doc = $_POST['password_doc'];

            if (isset($usuario_doc) && !empty($pass_doc)) {
                include "clases/db_connect.php";
                $result = mysql_query("SELECT cod_doc, nombre_doc, apellido_doc FROM doctor 
                    where JVPO='$usuario_doc' and password_doc='$pass_doc'");
                while ($row = mysql_fetch_array($result)) {
                    $nombre = $row{'nombre_doc'};
                    $apellido = $row{'apellido_doc'};
                    $cod_doc = $row{'cod_doc'};
                    session_start();
                    $_SESSION['nombre'] = $nombre . " " . $apellido;
                    $_SESSION['cod_doc'] = $cod_doc;
                    echo $_SESSION['nombre'];
                    header("Location: http://localhost:8000/private_content/updateDoctor.php"); /* Redirect browser */
                }
            } else {
                echo "Por favor introduzca un usuario y contrasenia correctos";
            }
        }
        ?>
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">Login</div>
                <div class="panel-body">

                    <form id="frm-login" action="#" method="POST" class="form-horizontal">

                        <fieldset>
                            <div class="form-group">

                                <legend><center><h3>Acceso Doctor/a</h3></center></legend>
                                <br>
                                <div class="form-group">
                                    <label  class="col-lg-3 control-label" for="email">JVPO</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="JVPO" class="form-control"  placeholder="Escriba su codigo JVPO" required>

                                    </div>
                                </div>  

                                <div class="form-group">
                                    <label  class="col-lg-3 control-label" for="password_doc">Password</label>
                                    <div class="col-lg-8">
                                        <input type="password" name="password_doc" class="form-control"  placeholder="Escriba su contrasenia" required  pattern=".{8,25}">

                                    </div>
                                </div>

                                <center>
                                    <input type='submit' name='action' value="Entrar" class="btn btn-info btn-large" />

                                </center>
                                <br>
                                <br>
                                <br>


                            </div> 
                        </fieldset>

                    </form>

                    <div id="registrarse-container">
                        <h4><p class="text-center">Ingresar como voluntario</p></h4>

                        <p class="text-center">
                            <a href="LoginVoluntario.php">
                                <button type="submit" class="btn btn-info">Acces como voluntario</button> 
                            </a>
                        </p>
                        <br>
                    </div>

                </div>       
            </div>
        </div>
    </body>
</html>
