<?php

include_once '../clases/db_connect.php';
$cod_pa = (int) $_GET['cod_pa'];
mysql_query("DELETE FROM `paciente` WHERE `cod_pa` = '$cod_pa' ");
echo (mysql_affected_rows()) ? "Row deleted.<br /> " : "Nothing deleted.<br /> ";
header("Location: http://localhost:8000/private_content/paciente.php"); /* Redirect browser */
?>
