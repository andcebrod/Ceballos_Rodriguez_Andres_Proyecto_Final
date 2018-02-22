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
            <button class="btn btn-outline-danger" type="button" name="button"><a href="">Cerrar Sesión</a></button>
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
              <a class="nav-link" href="#"><b>Articulos</b></a>
            </li>
          </div>
          <div class="col-md-2">
            <li class="nav-item">
              <a class="nav-link" href="#"><b>Eventos</b></a>
            </li>
          </div>
          <div class="col-md-2">
            <li class="nav-item">
              <a class="nav-link" href="#"><b>Bienes</b></a>
            </li>
          </div>
          <div class="col-md-2">
            <li class="nav-item">
              <a class="nav-link" href="#"><b>Área de Usuarios</b></a>
            </li>
          </div>
          <div class="col-md-2">
            <li class="nav-item">
              <a class="nav-link" href="#"><b>Archivos de interés</b></a>
            </li>
          </div>
          <div class="col-md-2">
            <li class="nav-item">
              <a class="nav-link" href="#"><b>Contacto</b></a>
            </li>
          </div>



        </ul>
      </nav>
      </div>

      <div class="row" class="contenido">
        <div class="col-md-12"  id="contprincipal">


          <?php


        $query2 ="SELECT * FROM Articulos order by fecha";

        if ($result = $connection->query($query2)) {

          echo "<table class='table table-striped'>";
          while($obj = $result->fetch_object()) {

            $Titulo = $obj->Titulo;
            $Subtitulo = $obj->Subtitulo;
            $Cuerpo =$obj->Cuerpo;
            $Imagen = $obj->Imagen;
            $Fecha =$obj->Fecha;
            $CodUsuario =$obj->CodUsuario;
            $CodArticulo = $obj->CodArticulo;


            echo "<tr>";
            echo "<td>".$obj->CodArticulo."</td>";
            echo "<td>".$obj->Titulo."</td>";
            echo "<td>".$obj->Fecha."</td>";
            echo "<td><a href='articulo_editado.php?Titulo=".$Titulo.
            "&Fecha=".$Fecha.
            "&Subtitulo=".$Subtitulo.
            "&Cuerpo=".$Cuerpo.
            "&Imagen=".$Imagen.
            "&Fecha=".$Fecha.
            "&CodUsuario=".$CodUsuario.
            "&CodArticulo=".$CodArticulo."'>
            <img src='../Images/lapiz.png' height='22px' width='22px'></a></td>";
            echo "</tr>";
            }
            echo "</table>";
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
