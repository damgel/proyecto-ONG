<?php
include_once '../clases/db_connect.php';
if (isset($_POST['submitted'])) {
    foreach ($_POST AS $key => $value) {
        $_POST[$key] = mysql_real_escape_string($value);
    }
    $sql = "INSERT INTO `doctor` ( `cod_doc` ,  `nombre_doc` ,  `apellido_doc` ,  `JVPO` ,  `genero_doc` ,  `fecha_na_doc` ,  `password_doc` ,  `telefono_doc` ,  `direccion_doc` ,  `departamento_doc` ,  `cod_as`  ) VALUES(  '{$_POST['cod_doc']}' ,  '{$_POST['nombre_doc']}' ,  '{$_POST['apellido_doc']}' ,  '{$_POST['JVPO']}' ,  '{$_POST['genero_doc']}' ,  '{$_POST['fecha_na_doc']}' ,  '{$_POST['password_doc']}' ,  '{$_POST['telefono_doc']}' ,  '{$_POST['direccion_doc']}' ,  '{$_POST['departamento_doc']}' ,  '{$_POST['cod_as']}'  ) ";
    mysql_query($sql) or die(mysql_error());
    echo "Added row.<br />";
    echo "<a href='verDoctores.php'>Back To Listing</a>";
}
?>

<form action='' method='POST'> 
    <p><b>Cod Doc:</b><br /><input type='text' name='cod_doc'/> 
    <p><b>Nombre Doc:</b><br /><input type='text' name='nombre_doc'/> 
    <p><b>Apellido Doc:</b><br /><input type='text' name='apellido_doc'/> 
    <p><b>JVPO:</b><br /><input type='text' name='JVPO'/> 
    <p><b>Genero Doc:</b><br /><input type='text' name='genero_doc'/> 
    <p><b>Fecha Na Doc:</b><br /><input type='text' name='fecha_na_doc'/> 
    <p><b>Password Doc:</b><br /><input type='text' name='password_doc'/> 
    <p><b>Telefono Doc:</b><br /><input type='text' name='telefono_doc'/> 
    <p><b>Direccion Doc:</b><br /><input type='text' name='direccion_doc'/> 
    <p><b>Departamento Doc:</b><br /><input type='text' name='departamento_doc'/> 
    <p><b>Cod As:</b><br /><input type='text' name='cod_as'/> 
    <p><input type='submit' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
