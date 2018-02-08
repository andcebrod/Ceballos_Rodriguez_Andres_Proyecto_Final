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
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/styles.css">
    <title>Gran Poder Montellano</title>
  </head>
  <body>

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
        <div class="col-md-9" id="contprincipal">
          <div class="col-md-6" >
            <div class="col-md-12">
              <img src="ola.png" >
            </div>
            <div class="col-md-12" id="cont2">
              <p><h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h2></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam.</p>
            </div>
          </div>
          <div class="col-md-6" >
            <div class="col-md-12">
              <img src="ola.png" >
            </div>
            <div class="col-md-12" id="cont2" >
                <p><h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h2></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam.</p>
            </div>
          </div>
          <div class="col-md-6" >
            <div class="col-md-12">
              <img src="ola.png" >
            </div>
            <div class="col-md-12" id="cont2">
                <p><h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h2></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="col-md-12">
              <img src="ola.png" >
            </div>
            <div class="col-md-12" id="cont2">
                <p><h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h2></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam.</p>
            </div>
          </div>
          <div class="col-md-6" >
            <div class="col-md-12">
              <img src="ola.png" >
            </div>
            <div class="col-md-12" id="cont2">
                <p><h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h2></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam.</p>
            </div>
          </div>
          <div class="col-md-6" >
            <div class="col-md-12">
              <img src="ola.png" >
            </div>
            <div class="col-md-12">
                <p><h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h2></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam.</p>
            </div>
          </div>
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
