<?php
  session_start();
?>
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
          <span><a href="Usuario/eventos.php">Eventos</a></span>
        </div>
        <div class="col-md-2" id="selmenu">
          <span><a href="Usuario/articulos.php">Articulos</a></span>
        </div>
        <div class="col-md-2" id="selmenu">
          <span><a href="Usuario/bienes.php">Bienes</a></span>
        </div>
        <div class="col-md-2" id="selmenu">
          <span><a href="Usuario/registro.php">Registro</a></span>
        </div>
        <div class="col-md-2" id="selmenu">
          <span><a href="Usuario/area_usuario.php">Área de Usuarios</a></span>
        </div>



      </div>

      <div class="row" class="contenido">
        <div class="col-md-9" id="contprincipal">
          <?php if (!isset($_POST["Correo"])) :?>
            <form method="post">
          <div class="form-group">
            <label for="Correo">Correo: </label>
            <input type="text" class="form-control" name="Correo" placeholder="Introduce correo">
          </div>
          <div class="form-group">
            <label for="pwd">Contraseña: </label>
            <input type="password" class="form-control" placeholder="Introduce Contraseña" name="Pass">
          </div>
          <div class="form-group">
            <input class="btn btn-default" type="submit" name="enviar" value="Iniciar Sesión">
          </div>
            </form>
          <div class="form-group">
            <label><b>¿Eres hermano? Regístrate gratis <a href="registro.php">Aquí</a>.</b></label>
          </div>
        <?php else: ?>

          <?php
            $Correo = $_POST['Correo'];
            $Pass = $_POST['Pass'];
            $query = "SELECT * FROM Usuarios WHERE Correo ='".$Correo."' and Pass = md5('".$Pass."')";

            if ($result = $connection->query($query)) {
                while ($obj = $result->fetch_object()) {
                  $Rol = $obj->Rol;
                  $Correo = $obj->Correo;
              //No rows returned
              if ($result->num_rows===0) {
                echo "Datos erróneos. Por favor, inténtelo otra vez.";
              } else {
                //VALID LOGIN. SETTING SESSION VARS
                $_SESSION["Correo"]=$Correo;
                $_SESSION["Rol"]=$Rol;
                if ($_SESSION["Rol"] == "User" ) {
                  header("Location: Usuario/index.php");
                } elseif ($_SESSION["Rol"] == "Admin" ) {
                  header("Location: Admin/admin.php");
                      }
                    }
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
