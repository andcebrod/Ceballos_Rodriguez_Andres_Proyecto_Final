<?php

  //Open the session
  session_start();

  if (isset($_SESSION["Rol"])) {
    //SESSION ALREADY CREATED
    //SHOW SESSION DATA
    var_dump($_SESSION);
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
          <span><a href="../Usuario/index.php">Inicio</a></span>
        </div>
        <div class="col-md-2" id="selmenu">
          <span><a href="../Usuario/eventos.php">Eventos</a></span>
        </div>
        <div class="col-md-2" id="selmenu">
          <span><a href="../Usuario/articulos.php">Articulos</a></span>
        </div>
        <div class="col-md-2" id="selmenu">
          <span><a href="../Usuario/bienes.php">Bienes</a></span>
        </div>
        <div class="col-md-2" id="selmenu">
          <span><a href="../registro.php">Registro</a></span>
        </div>
        <div class="col-md-2" id="selmenu">
          <span><a href="../Usuario/usuarios.php">Área de Usuarios</a></span>
        </div>



      </div>

      <div class="row" class="contenido">
        <div class="col-md-9"  id="contprincipal">

        <?php if (!isset($_POST["DNI"])) :?>

          <form method="post">
            <div class="form-group">
              <label for="nombre">Nombre: </label>
              <input type="text" class="form-control" name="Nombre" placeholder="Introduce Nombre">
            </div>
            <div class="form-group">
              <label for="Apellidos">Apellidos: </label>
              <input type="text" class="form-control" name="Apellidos" placeholder="Introduce Apellidos">
            </div>
            <div class="form-group">
              <label for="DNI">DNI: </label>
              <input type="text" class="form-control" name="DNI" placeholder="Introduce DNI">
            </div>
            <div class="form-group">
              <label for="FechaNacimiento">Fecha de Nacimiento: </label>
              <input type="date" class="form-control" name="FechaNacimiento">
            </div>
            <div class="form-group">
              <label for="Direccion">Direccion: </label>
              <input type="text" class="form-control" name="Direccion" placeholder="Introduce Direccion">
            </div>
            <div class="form-group">
              <label for="Ciudad">Ciudad: </label>
              <input type="text" class="form-control" name="Ciudad" placeholder="Introduce Ciudad">
            </div>
            <div class="form-group">
              <label for="Provincia">Provincia: </label>
              <input type="text" class="form-control" name="Provincia" placeholder="Introduce Provincia">
            </div>
            <div class="form-group">
              <label for="Correo">Correo Electrónico: </label>
              <input type="email" class="form-control" name="Correo" placeholder="Introduce Correo">
            </div>
            <div class="form-group">
              <input class="btn btn-default" type="submit" name="enviar" value="Añadir Usuario">
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


            $query = "INSERT INTO Hermanos (Nombre, Apellidos, DNI, FechaNacimiento, Direccion, Ciudad, Provincia, Correo)
            VALUES ('$Nombre', '$Apellidos', '$DNI', '$FechaNacimiento', '$Direccion', '$Ciudad', '$Provincia', '$Correo')";

            if ($connection->query($query)) {

              echo "HERMANO INSERTADO";

              $query2 ="SELECT * FROM Hermanos";

              if ($result = $connection->query($query2)) {
                echo "<table class='table table-striped'>";

                //FETCHING OBJECTS FROM THE RESULT SET
                //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
                while($obj = $result->fetch_object()) {
                    //PRINTING EACH ROW
                    echo "<tr>";
                      echo "<td>".$obj->Nombre."</td>";
                      echo "<td>".$obj->Apellidos."</td>";
                      echo "<td>".$obj->DNI."</td>";
                      echo "<td>".$obj->FechaNacimiento."</td>";
                      echo "<td>".$obj->Direccion."</td>";
                      echo "<td>".$obj->Ciudad."</td>";
                      echo "<td>".$obj->Provincia."</td>";
                      echo "<td>".$obj->Correo."</td>";
                    echo "</tr>";
                }
                echo "</table>";
              }

             else {
              echo "ERROR AL INSERTAR HERMANO";
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
