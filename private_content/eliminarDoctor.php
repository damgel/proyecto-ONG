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
            mysql_query("DELETE FROM `doctor` WHERE `cod_doc` = '$id' ");
            echo (mysql_affected_rows()) ? "Row deleted.<br /> " : "Nothing deleted.<br /> ";
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
