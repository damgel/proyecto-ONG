<?php

/**
 * clase para abrir una conexion a mysql server
 *
 * @author daMgeL
 */
$servidor = "localhost";
$usuario = "root";
$password = "";
$databaseName = "cocides";

//echo "<p>hola mundo desde la clase de conexion..</p>";
if (!($conexion = mysql_connect($servidor, $usuario, $password) or die('Error al conectar con mysql'))) {
    echo "algo fallo en la conexion";
    //exit();
}
else
//    echo "hay conexion";
    mysql_select_db($databaseName) or die('Imposible acceder a base de datos!');
?>

