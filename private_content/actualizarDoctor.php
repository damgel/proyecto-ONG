<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <div>

            <?php
            include 'layout/private-header.php';
            include_once '../clases/db_connect.php';
            $id = (int) $_GET['id'];

            foreach ($_POST AS $key => $value) {
                $_POST[$key] = mysql_real_escape_string($value);
            }
            $sql = "UPDATE `doctor` SET `nombre_doc` =  '{$_POST['nombre_doc']}' ,  `apellido_doc` =  '{$_POST['apellido_doc']}' ,  `JVPO` =  '{$_POST['JVPO']}' ,  `genero_doc` =  '{$_POST['genero_doc']}' ,  `fecha_na_doc` =  '{$_POST['fecha_na_doc']}' ,  `password_doc` =  '{$_POST['password_doc']}' ,  `telefono_doc` =  '{$_POST['telefono_doc']}' ,  `direccion_doc` =  '{$_POST['direccion_doc']}' ,  `departamento_doc` =  '{$_POST['departamento_doc']}' ,  `cod_as` =  '{$_POST['cod_as']}'   WHERE `cod_doc` = $id ";
            mysql_query($sql) or die(mysql_error());
            echo (mysql_affected_rows()) ? "Row actualizada.<br /> " : "Nada se actualizo.<br /> ";
            header("Location: http://localhost:8000/private_content/regDoctor.php"); /* Redirect browser */
            ?> 
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