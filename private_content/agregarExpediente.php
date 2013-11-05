<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Perfil Paciente</title>
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
            if (isset($_GET['cod_pa'])) {
                include_once '../clases/db_connect.php';
                $vcod_pa = $_GET['cod_pa'];

                $getExped = mysql_query("SELECT no_ex FROM expediente where $vcod_pa in (SELECT cod_pa from paciente)");
                while ($row = mysql_fetch_array($getExped)) {
                    echo $cod_expediente = $row{'cod_pa'};
                }
            }
            ?>
        </div>
        <div id="contenedor" class="container">
            <ul class="nav nav-tabs" id="myTab">

                <li class=""><a href="#Expediente">Guardar Consulta</a></li>


            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="Expediente">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Ficha</div>
                        <div class="panel-body">
                            <a href=agregarExpediente.php>Guardar Consulta</a>
                            <?
                            include_once '../clases/db_connect.php';
                            if (isset($_POST['submitted'])) {
                                foreach ($_POST AS $key => $value) {
                                    $_POST[$key] = mysql_real_escape_string($value);
                                }
                                $sql = "INSERT INTO `expediente` ( `cod_ex` ,  `no_ex` ,  `referido` ,  `at_medicos` ,  `cod_cita`  ) VALUES(  '{$_POST['cod_ex']}' ,  '{$_POST['no_ex']}' ,  '{$_POST['referido']}' ,  '{$_POST['at_medicos']}' ,  '{$_POST['cod_cita']}'  ) ";
                                mysql_query($sql) or die(mysql_error());
                                echo "Added row.<br />";
                                echo "<a href='verExpediente.php'>Back To Listing</a>";
                            }
                            ?>

                            <form action='' method='POST'> 
                                <p><b>Cod Ex:</b><br /><input type='text' name='cod_ex'/> 
                                <p><b>No Ex:</b><br /><input type='text' name='no_ex'/> 
                                <p><b>Referido:</b><br /><input type='text' name='referido'/> 
                                <p><b>At Medicos:</b><br /><input type='text' name='at_medicos'/> 
                                <p><b>Cod Cita:</b><br /><input type='text' name='cod_cita'/> 
                                <p><input type='submit' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
                            </form> 

                            <br>
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
