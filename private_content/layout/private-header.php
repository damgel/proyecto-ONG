<!-- NAVBAR MENU -->

<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <h2 class="muted">COCIDES</h2>
    <style>
        .muted
        {
            margin-top:10px;
            margin-bottom: 0px;
            padding-bottom: 0px;
            color: #05a8ff;

        }
    </style>
</div>
<div class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="#">Administracion</a><li>
        <li><a href="regDoctor.php">Doctores</a></li>
        <li><a href="paciente.php">Pacientes</a><li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Paciente <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#">Sub Item</a></li>
                <li><a href="#">Sub Item</a></li>
            </ul> 
        </li> 
        <li><a href="perfilVoluntariado.php">Voluntariados</a></li>
    </ul>
    <form class="navbar-form navbar-left">
        <!--  <a class="btn btn-success btn-large" href="login.html" role="button">Entrar</a> -->
    </form>  

    <form class="navbar-form navbar-right" role="search">

        <?php
        session_start();
        if (!empty($_SESSION['nombre'])) {
            echo 'Bienvenido: ' . $_SESSION['nombre'] . " ";
            echo '<a href="../private_content/logout.php" class="logout"><span class="glyphicon glyphicon-log-out"></span> Salir</a>';
        } else {
            //session_start();
            //echo '<h1>HOLA MUNDOOOOOOOOOOO</h1>';
            header("Location: http://localhost:8000/index.html"); /* Redirect browser */
        }
        ?>

    </form>
</div>
