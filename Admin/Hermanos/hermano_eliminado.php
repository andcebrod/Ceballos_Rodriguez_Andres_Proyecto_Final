<?php

  //Open the session
  session_start();

  if (isset($_SESSION["Rol"])) {
    //SESSION ALREADY CREATED
    //SHOW SESSION DATA
  } else {
    session_destroy();
    header("Location: ../inicio_sesion.php");
  }


 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
<link rel="stylesheet" href="../css/bootstrap.css">
    <title>Gran Poder Montellano</title>
  </head>
  <body>
    <?php
    //CREATING THE CONNECTION
      $connection = new mysqli("localhost", "root", "Admin2015", "granPoder",3316);
      $connection->set_charset("uft8");


      //TESTING IF THE CONNECTION WAS RIGHT
      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }
    ?>
    <div class="container">

      <div class="row" id="social">
        <div class="col-md-8" id="social1">
          <span>Bienvenido a la web de Nuestra Hermandad</span>
        </div>
        <div class="col-md-2">
            <button class="btn btn-outline-primary" type="button" name="button"><a href="../admin.php">Panel principal</a></button>
        </div>
        <div class="col-md-2">
            <button class="btn btn-outline-danger" type="button" name="button"><a href="../cerrar_sesion.php">Cerrar Sesión</a></button>
        </div>
      </div>
      <div class="row">
        <nav class="col-md-12 navbar navbar-expand-xl bg-light navbar-light">
        <!-- Brand/logo -->
        <a class="col-md-1 navbar-brand" href="#">
          <img src="escudo.jpg" alt="logo" style="width:40px;">
        </a>

        <!-- Links -->
        <ul class="navbar-nav col-md-10">
          <div class="col-md-2">
            <li class="nav-item">
              <a class="nav-link" href="../../Usuario/articulos.php"><b>Articulos</b></a>
            </li>
          </div>
          <div class="col-md-2">
            <li class="nav-item">
              <a class="nav-link" href="../../Usuario/eventos.php"><b>Eventos</b></a>
            </li>
          </div>
          <div class="col-md-2">
            <li class="nav-item">
              <a class="nav-link" href="../../Usuario/bienes.php"><b>Bienes</b></a>
            </li>
          </div>

          <div class="col-md-2">
            <li class="nav-item">
              <a class="nav-link" href="../../Usuario/archivos.php"><b>Archivos de interés</b></a>
            </li>
          </div>
          <div class="col-md-2">
            <li class="nav-item">
              <a class="nav-link" href="../../Usuario/contacto.php"><b>Contacto</b></a>
            </li>
          </div>
        </ul>
      </nav>
      </div>

      <div class="row" class="contenido">
        <div class="col-md-12"  id="contprincipal">
          <?php

            $query="DELETE FROM Hermanos WHERE DNI ='".$_GET['DNI']."'";

            if ($connection->query($query)) {

              echo "<h2>Hermano Borrado</h2>";

              } else {
                echo "<h2>ha habido un fallo</h2>";
              }

           ?>

        </div>


      </div>


      <div class="row col-md-12 text-center bg-light">
        <p class="mx-auto">Copyright © Hermandad Sacramental Gran Poder Montellano 2018 Todos los derechos reservados.</p>

      </div>



    </div>

  </body>
</html>
