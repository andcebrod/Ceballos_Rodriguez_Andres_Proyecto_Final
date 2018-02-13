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
        <div class="col-md-9" id="contprincipal">

          <?php if (!isset($_POST["DNI"])) :?>

            <form method="post">
              <div class="form-group">
                <label for="Titulo">Titulo: </label>
                <input type="text" class="form-control" name="Titulo" value="<?php echo $_GET['Titulo']; ?>">
              </div>
              <div class="form-group">
                <label for="Subtitulo">Subtitulo: </label>
                <input type="text" class="form-control" name="Subtitulo" value="<?php echo $_GET['Subtitulo']; ?>">
              </div>
              <div class="form-group">
                <input type="hidden" class="form-control" name="CodArticulo" value="<?php echo $_GET['CodArticulo']; ?>">
              </div>
              <div class="form-group">
                <input type="hidden" class="form-control" name="CodArticulo" value="<?php echo $_GET['CodUsuario']; ?>">
              </div>
              <div class="form-group">
                <label for="Fecha">Fecha: </label>
                <input type="date" class="form-control" name="Fecha" value="<?php echo $_GET['Fecha']; ?>">
              </div>
              <div class="form-group">
                <label for="Cuerpo">Cuerpo: </label>
                <input type="text" class="form-control" name="Cuerpo" value="<?php echo $_GET['Cuerpo']; ?>">
              </div>
              <div class="form-group">
                <label for="Imagen">Imagen: </label>
                <input type="text" class="form-control" name="Imagen" value="<?php echo $_GET['Imagen']; ?>">
              </div>

              <div class="form-group">
                <input class="btn btn-default" type="submit" name="enviar" value="Editar Articulo">
              </div>
            </form>

            <?php else: ?>

              <?php

              $Titulo = $_POST["Titulo"];
              $Subtitulo = $_POST["Subtitulo"];
              $Cuerpo = $_POST["Cuerpo"];
              $Imagen = $_POST["Imagen"];
              $Fecha = $_POST["Fecha"];
              $CodArticulo = $_POST["CodArticulo"];
              $CodUsuario = $_POST["CodUsuario"];

              $query= "UPDATE Articulos SET Titulo='$Titulo', Subtitulo='$Subtitulo',
              CodArticulo='$CodArticulo',
              Fecha = '$Fecha',
              Cuerpo='$Cuerpo',
              CodUsuario='$CodUsuario',
              Imagen = '$Imagen'
              WHERE CodArticulo = '$CodArticulo'";

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
