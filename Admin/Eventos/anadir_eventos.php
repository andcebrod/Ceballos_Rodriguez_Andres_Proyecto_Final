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
        <div class="col-md-10" id="social1">
          <span>Bienvenido a la web de Nuestra Hermandad</span>
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
          <?php if (!isset($_POST["DNI"])) :?>
            <form method="post">
              <div class="form-group">
                <label for="Titulo">Título: </label>
                <input type="text" class="form-control" name="Titulo" placeholder="Introduce Titulo">
              </div>
              <div class="form-group">
                <label for="Subtitulo">Subtítulo: </label>
                <input type="text" class="form-control" name="Subtitulo" placeholder="Introduce Subtitulo">
              </div>
              <div class="form-group">
                <label for="Cuerpo">Cuerpo: </label>
                <input type="text" class="form-control" name="Cuerpo" placeholder="Introduce Cuerpo">
              </div>
              <div class="form-group">
                <label for="Imagen">Imagen: </label>
                <input type="text" class="form-control" name="Imagen" placeholder="Introduce Ruta de la Imagen">
              </div>
              <div class="form-group">
                <label for="fecha">Introduce fecha: </label>
                <input type="date" class="form-control" name="Fecha" placeholder="Introduce Fecha">
              </div>
              <div class="form-group">
                <label for="DNI">DNI Usuario: </label>
                <input type="text" class="form-control" name="DNI" placeholder="Introduce tu DNI">
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-default" name="Enviar" value="Publicar">
              </div>

          <?php else: ?>
          <?php

          $Titulo = $_POST["Titulo"];
          $Subtitulo = $_POST["Subtitulo"];
          $Cuerpo = $_POST["Cuerpo"];
          $Imagen = $_POST["Imagen"];
          $Fecha = $_POST["Fecha"];
          $DNI = $_POST["DNI"];

          $query ="Select CodUsuario FROM Usuarios Where DNI ='".$DNI."'";

          if ($result=$connection->query($query)) {

            $obj = $result->fetch_object();

            $CodUsuario = $obj->CodUsuario;

            $query2 = "INSERT INTO Eventos (Titulo, Subtitulo, Cuerpo, Imagen, Fecha, CodUsuario)
            VALUES ('$Titulo','$Subtitulo','$Cuerpo','$Imagen','$Fecha', $CodUsuario )";

            echo $query2;

            if ($connection->query($query2)) {

              echo "Ha sido subido";
            }  else {
              echo "Error al subir";
            }
          }
          ?>
          <?php endif ?>


        </div>
      </div>

      <div class="row col-md-12 text-center bg-light">
        <p class="mx-auto">Copyright © Hermandad Sacramental Gran Poder Montellano 2018 Todos los derechos reservados.</p>

      </div>





    </div>

  </body>
</html>
