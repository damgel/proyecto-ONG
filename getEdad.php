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
        <form action="" method="POST">

            <div>
                La edad es:<input type="text" value='{$_POST['apellido_doc']}'>
                                  <input type="date" name="fecha" required>
            </div>

            <input type="submit" value="GetEdad">
        </form>

        <?php
        // echo date("Y-m-d") . '<br>';


        if ($_POST['fecha'] > date("Y-m-d")) {
            echo "FECHA SELECIONA ES INCORRECTA";
        } elseif ($_POST['fecha'] < date("Y-m-d")) {
            require_once 'clases/utils.php';
            echo "hay else" . '<br>';
            echo utils::getEdad($_POST['fecha']); // Imprimirá la fecha correcta
        }
        else
            
            ?>

    </body>
</html>
