<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/styles.css">
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
        <div class="col-md-9" id="social1">
          <span>Bienvenido a la web de la Hermandad Sacramental Ntro Padre</span>
        </div>
        <div class="col-md-1">
            <span>aa</span>
          </div>
        <div class="col-md-1">
            <span>aa</span>
          </div>
        <div class="col-md-1">
            <span>aa</span>
          </div>
      </div>
      <div class="row header">
        <div class="col-md-3">
          <span>aaaaa</span>
        </div>
        <div class="col-md-6">
          <h2>Hermandad Sacramental Nuestro Padre Jesús del Gran Poder<br>
            Maria Santisima de los Dolores <br>
             y Beato Antonio Martinez Gil</h2>
        </div>
        <div class="col-md-3">
            <span>aaaaaaa</span>
        </div>

      </div>
      <div class="row" id="menu">
        <div class="col-md-2" id="selmenu">
          <span><a href="index.php">Inicio</a></span>
        </div>
        <div class="col-md-2" id="selmenu">
          <span><a href="eventos.php">Eventos</a></span>
        </div>
        <div class="col-md-2" id="selmenu">
          <span><a href="articulos.php">Articulos</a></span>
        </div>
        <div class="col-md-2" id="selmenu">
          <span><a href="bienes.php">Bienes</a></span>
        </div>
        <div class="col-md-2" id="selmenu">
          <span><a href="../registro.php">Registro</a></span>
        </div>
        <div class="col-md-2" id="selmenu">
          <span><a href="area_usuario.php">Área de Usuarios</a></span>
        </div>



      </div>

      <div class="row" class="contenido">
        <div class="row col-md-10" id="contprincipal">

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

              echo "<div class='col-md-5' >";
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
      <div class="col-md-2" id="banners">
        <div class="col-md-12">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt u
            t labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamc
            o laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cup
            idatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        </div>
        <div class="col-md-12">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt u
            t labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamc
            o laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cup
            idatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        </div>

      </div>
      </div>

      <div class="row" id="foot">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
           Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
           Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
           Excepteur sint occaecat cupidatat non proident,
           sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

      </div>



    </div>

  </body>
</html>
