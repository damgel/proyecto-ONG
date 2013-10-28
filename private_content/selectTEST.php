
<!DOCTYPE html>
<html>
    <head>
        <title>db test conexion</title>
    </head>
    <body>
        <div>
            <?php
            //echo "hola mundo";
            include "../clases/db_connect.php";
//execute the SQL query and return records
            $result = mysql_query("SELECT nombre_us FROM usuario");
//fetch tha data from the database
            // pequenio ejemplo de un select


            while ($row = mysql_fetch_array($result)) {
                echo "Nombre: " . $row{'nombre_us'} . "<br>";
            }
            ?>
        </div>

    </body>
</html>
