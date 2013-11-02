<html>
    <head>
        <title>Create - PHP CRUD Tutorial Series - http://www.codeofaninja.com</title>

    </head>
    <body>
        <?php
        if ($_POST['action'] == 'create') {
            //include database configuration
            include '../clases/db_connect.php';

            //sql insert statement
            $sql = "insert into users ( firstname, lastname, username, password )
            values ('{$_POST['firstname']}','{$_POST['lastname']}','{$_POST['username']}','{$_POST['password']}')";

            //insert query to the database
            if (mysql_query($sql)) {
                //if successful query
                echo "New record was saved.";
            } else {
                //if query failed
                die($sql . ">>" . mysql_error());
            }
        }
        ?>

        <!--we have our html form here where user information will be entered-->
        <form action='#' method='post' border='0'>
            <table>
                <tr>
                    <td>Firstname</td>
                    <td><input type='text' name='firstname' /></td>
                </tr>
                <tr>
                    <td>Lastname</td>
                    <td><input type='text' name='lastname' /></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type='text' name='username' /></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type='password' name='password' /></td>
                <tr>
                    <td></td>
                    <td>
                        <input type='hidden' name='action' value='create' />
                        <input type='submit' value='Save' />
                    </td>
                </tr>
            </table>
        </form>

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