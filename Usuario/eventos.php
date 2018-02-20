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
<link rel="stylesheet" href="css/bootstrap.css">
    <title>Gran Poder Montellano</title>
  </head>
  <body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);} (document, 'script', 'facebook-jssdk'));</script>
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
        <div class="row col-md-9" id="contprincipal">

          <?php

          $query = "SELECT * FROM Eventos order by Fecha desc";
          if ($connection->query($query)) {

          if ($result = $connection->query($query)) {




            while ($obj = $result->fetch_object()) {
              $Titulo = $obj->Titulo;
              $Subtitulo = $obj->Subtitulo;
              $Cuerpo = $obj->Cuerpo;
              $Imagen = $obj->Imagen;
              $Fecha = $obj->Fecha;
              $CodEvento = $obj->CodEvento;

              echo "<div class='col-md-6' >";
              echo "  <div class='col-md-12'>";
              echo "  <img class='rounded' src=".$Imagen.">";
              echo "  </div>";
              echo "<div class='col-md-12' id='cont2'>";
              echo "<p><h2><a href='evento_seleccionado.php?CodEvento=".$CodEvento."'>".$Titulo."</a></h2></p>";
              echo "<p>$Subtitulo</p>";
              echo "</div>";
              echo "</div>";
              }

            }
          }
           ?>
        </div>
      <div class=" col-md-3">

        <div class="fb-page col-md-12" data-href="https://www.facebook.com/Hermandad-Sacramental-del-Gran-Poder-Montellano-1850947275184958/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <blockquote cite="https://www.facebook.com/Hermandad-Sacramental-del-Gran-Poder-Montellano-1850947275184958/" class="fb-xfbml-parse-ignore">
              <a href="https://www.facebook.com/Hermandad-Sacramental-del-Gran-Poder-Montellano-1850947275184958/"></a>
          </blockquote>
        </div>

        <div class="col-md-12">
        </div>
      </div>

      </div>

      <div class="row col-md-12 text-center bg-light">
        <p class="mx-auto">Copyright © Hermandad Sacramental Gran Poder Montellano 2018 Todos los derechos reservados.</p>

      </div>



    </div>

  </body>
</html>
