<?php

include_once '../clases/db_connect.php';
$cod_vo = (int) $_GET['cod_vo'];
mysql_query("DELETE FROM `voluntariado` WHERE `cod_vo` = '$cod_vo' ");
echo (mysql_affected_rows()) ? "Row deleted.<br /> " : "Nothing deleted.<br /> ";
header("Location: http://localhost:8000/private_content/perfilVoluntariado.php"); /* Redirect browser */
?>