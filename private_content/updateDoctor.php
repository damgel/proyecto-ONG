<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <div id="header" class="navbar navbar-default navbar-static-top">
            <?php
            include_once 'layout/private-header.php';
            ?>
        </div>
        <?php
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
        ?>


        <form action='' method='POST'> 

            <p><b>Nombre Doc:</b><br /><input type='text' name='nombre_doc' value='<?php stripslashes($row['nombre_doc']) ?>' /> 
            <p><b>Apellido Doc:</b><br /><input type='text' name='apellido_doc' value='<?php stripslashes($row['apellido_doc']) ?>' /> 
            <p><b>JVPO:</b><br /><input type='text' name='JVPO' value='<?php stripslashes($row['JVPO']) ?>' /> 
            <p><b>Genero Doc:</b><br /><input type='text' name='genero_doc' value='<?php stripslashes($row['genero_doc']) ?>' /> 
            <p><b>Fecha Na Doc:</b><br /><input type='text' name='fecha_na_doc' value='<?php stripslashes($row['fecha_na_doc']) ?>' /> 
            <p><b>Password Doc:</b><br /><input type='text' name='password_doc' value='<?php stripslashes($row['password_doc']) ?>' /> 
            <p><b>Telefono Doc:</b><br /><input type='text' name='telefono_doc' value='<?php stripslashes($row['telefono_doc']) ?>' /> 
            <p><b>Direccion Doc:</b><br /><input type='text' name='direccion_doc' value='<?php stripslashes($row['direccion_doc']) ?>' /> 
            <p><b>Departamento Doc:</b><br /><input type='text' name='departamento_doc' value='<?php stripslashes($row['departamento_doc']) ?>' /> 
            <p><b>Cod As:</b><br /><input type='text' name='cod_as' value='<?php stripslashes($row['cod_as']) ?>' /> 
            <p><input type='submit' value='Edit Row' /><input type='hidden' value='1' name='updateDoctor' /> 
        </form> 

    </body>
</html>
