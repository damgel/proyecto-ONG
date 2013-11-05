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
        <?php
        include_once '../clases/db_connect.php';
        $cod_pa = (int) $_GET['cod_pa'];
        mysql_query("DELETE FROM `expediente` WHERE `cod_pa` = '$cod_pa' ");
        echo (mysql_affected_rows()) ? "Row deleted.<br /> " : "Nothing deleted.<br /> ";
        header("Location: http://localhost:8000/private_content/paciente.php");
        ?>
    </body>
</html>
