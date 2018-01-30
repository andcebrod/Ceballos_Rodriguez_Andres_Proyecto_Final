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

      <div class="row" class="header">
        <div class="col-md-12" id="social">
          <div class="col-md-9" id="social1">
            <span>Bienvenido a la web de la Hermandad Sacramental Ntro Padre</span>
          </div>
          <div class="col-md-3">
            <div class="col-md-4">
              <span>aa</span>
            </div>
            <div class="col-md-4">
              <span>aa</span>
            </div>
            <div class="col-md-4">
              <span>aa</span>
            </div>
          </div>
        </div>
        <div class="col-md-12" id="logo">
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
        <div class="col-md-9"  id="contprincipal">
          <h2>Registro de Usuario: </h2>

                  <?php if (!isset($_POST["DNI"])) :?>
                    <form method="post">
                      <div class="form-group">
                        <label for="Correo">Correo Electrónico: </label>
                        <input type="email" class="form-control" name="Correo" placeholder="Introduce Correo">
                      </div>
                      <div class="form-group">
                        <label for="Nombre">Nombre de Usuario: </label>
                        <input type="text" class="form-control" name="Nombre" placeholder="Introduce Nombre de Usuario">
                      </div>
                      <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" placeholder="Enter password" name="Pass">
                      </div>
                      <div class="form-group">
                        <label for="DNI">DNI: </label>
                        <input type="text" class="form-control" name="DNI" placeholder="Introduce DNI">
                      </div>
                      <div class="form-group">
                        <input class="btn btn-default" type="submit" name="enviar" value="Añadir Usuario">
                      </div>
                    </form>

                    <?php else: ?>

                    <?php

                    $Correo = $_POST["Correo"];
                    $Password = $_POST["Pass"];
                    $DNI = $_POST["DNI"];
                    $Nombre = $_POST["Nombre"];

                    $query="Select DNI,CodHermano from Hermanos where DNI='".$DNI."'";

                    echo $query;

                      if ($result=$connection->query($query)) {

                        $obj = $result->fetch_object();

                        $CodHermano = $obj->CodHermano;

                        $query2 = "INSERT INTO Usuarios (Correo, Pass, DNI, Rol, Nombre, CodHermano)
                        VALUES ('$Correo',md5('$Password'),'$DNI','User','$Nombre', $CodHermano )";

                        echo $query2;

                        if ($connection->query($query2)) {

                          echo "Ha sido Registrado en el Sistema";
                        }  else {
                          echo "Error al registrar";
                        }
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
