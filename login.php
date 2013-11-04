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
            .frm-login
            {
                float:left;    /*tambien puede poner float:right, para que se alineé a la derecha */
                padding:10px;
                width:500px;
                margin:40px; 

            }
            #registrarse-container
            {
                float:right;       /*tambien puede poner float:right, para que se alineé a la derecha */
                padding:10px;
                margin:auto;


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
        <style>
            .loginError
            {
                text-align: center;
                font-weight: bold;
                font-size: 20px;
                color:red;
            }
        </style>
        <?php
        if ($_POST['action'] === 'Entrar') {
            echo '<p class="loginError">Usuario o Contrasenia erroneo!.</p>';
            $usuario_doc = $_POST['JVPO'];
            $pass_doc = $_POST['password_doc'];

            if (isset($usuario_doc) && !empty($pass_doc)) {
                include "clases/db_connect.php";
                $result = mysql_query("SELECT cod_doc, nombre_doc, apellido_doc, permiso FROM doctor 
                    where JVPO='$usuario_doc' and password_doc='$pass_doc'");
                while ($row = mysql_fetch_array($result)) {
                    $nombre = $row{'nombre_doc'};
                    $apellido = $row{'apellido_doc'};
                    $cod_doc = $row{'cod_doc'};
                    $permiso_doc = $row{'permiso'};
                    session_start();
                    $_SESSION['nombre'] = $nombre . " " . $apellido;
                    $_SESSION['cod_doc'] = $cod_doc;
                    $_SESSION['permiso_doc'] = $permiso_doc;
                    echo $_SESSION['nombre'];
                    header("Location: http://localhost:8000/private_content/regDoctor.php"); /* Redirect browser */
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

                    <div class="col-md-6 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Acceder como Doctor/a</h3>
                            </div>
                            <div class="panel-body">
                                <form id="frm-login" action="#" method="POST">
                                    <div class="row-fluid">
                                        <fieldset>
                                            <div class="span6"> 
                                                <div class="form-group">
                                                    <input type="text" name="JVPO" class="form-control" placeholder="JVPO" required="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="password_doc" class="form-control" placeholder="Password"  required pattern=".{6,25}">
                                                </div>

                                                <input type='submit' name='action' value="Entrar" class="btn btn-lg btn-info btn-block">
                                            </div>
                                        </fieldset>  
                                    </div>
                                </form> <!-- END THE FORM -->
                            </div>

                        </div>
                    </div>


                    <div id="registrarse-container">
                        <div class="col-md-2 col-md-offset-0">
                            <form action="">
                                <fieldset>

                                    <h4 class="text-center">Ingresar como voluntario</h4>
                                    <a href="LoginVoluntario.php" class="btn btn-info">Acceder como volunario </a>


                                </fieldset>
                            </form>
                        </div>
                    </div> 
                </div>
            </div>

        </div>




    </div>       
</div>
</div>
</body>
</html>
