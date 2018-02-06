<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
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
          <span><a href="registro.php">Registro</a></span>
        </div>
        <div class="col-md-2" id="selmenu">
          <span><a href="usuarios.php">Área de Usuarios</a></span>
        </div>


      </div>

      <div class="row" class="contenido">
        <div class="col-md-9" id="contprincipal">

          <?php if (!isset($_POST["DNI"])) :?>

            <form method="post">
              <div class="form-group">
                <label for="nombre">Nombre: </label>
                <input type="text" class="form-control" name="Nombre" value="<?php echo $_GET['Nombre']; ?>">
              </div>
              <div class="form-group">
                <label for="Apellidos">Apellidos: </label>
                <input type="text" class="form-control" name="Apellidos" value="<?php echo $_GET['Apellidos']; ?>">
              </div>
              <div class="form-group">
                <label for="DNI">DNI: </label>
                <input type="hidden" class="form-control" name="DNI" value="<?php echo $_GET['DNI']; ?>">
              </div>
              <div class="form-group">
                <label for="FechaNacimiento">Fecha de Nacimiento: </label>
                <input type="date" class="form-control" name="FechaNacimiento" value="<?php echo $_GET['FechaNacimiento']; ?>">
              </div>
              <div class="form-group">
                <label for="Direccion">Direccion: </label>
                <input type="text" class="form-control" name="Direccion" value="<?php echo $_GET['Direccion']; ?>">
              </div>
              <div class="form-group">
                <label for="Ciudad">Ciudad: </label>
                <input type="text" class="form-control" name="Ciudad" value="<?php echo $_GET['Ciudad']; ?>">
              </div>
              <div class="form-group">
                <label for="Provincia">Provincia: </label>
                <input type="text" class="form-control" name="Provincia" value="<?php echo $_GET['Provincia']; ?>">
              </div>
              <div class="form-group">
                <label for="Correo">Correo Electrónico: </label>
                <input type="email" class="form-control" name="Correo" value="<?php echo $_GET['Correo']; ?>">
              </div>
              <div class="form-group">
                <input class="btn btn-default" type="submit" name="enviar" value="Editar Usuario">
              </div>
            </form>

            <?php else: ?>

              <?php

              $Nombre = $_POST["Nombre"];
              $Apellidos = $_POST["Apellidos"];
              $DNI = $_POST["DNI"];
              $FechaNacimiento = $_POST["FechaNacimiento"];
              $Direccion =  $_POST["Direccion"];
              $Ciudad =  $_POST["Ciudad"];
              $Provincia = $_POST["Provincia"];
              $Correo = $_POST ["Correo"];

              $query= "UPDATE Hermanos SET Nombre='$Nombre', Apellidos='$Apellidos',
              DNI='$DNI',
              FechaNacimiento = '$FechaNacimiento',
              Direccion='$Direccion',
              Ciudad = '$Ciudad',
              Provincia = '$Provincia',
              Correo='$Correo'
              WHERE DNI = '$DNI'";

              echo $query;
              if ($result = $connection->query($query)) {
                echo "<h1>Datos actualizados</h1>";
              } else {
                echo "<h2>Error al actualizar los datos</h2>";
              }
               ?>


            <?php endif ?>



        </div>
        <div class="col-md-3" id="banners">
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
