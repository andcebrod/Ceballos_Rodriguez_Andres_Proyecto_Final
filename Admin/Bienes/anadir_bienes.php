<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/styles.css">
    <title>Gran Poder Montellano</title>
  </head>
  <body>

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
        <div class="col-md-3" id="selmenu">
          <span>Inicio</span>
        </div>
        <div class="col-md-3" id="selmenu">
          <span>Eventos</span>
        </div>
        <div class="col-md-3" id="selmenu">
          <span>Articulos</span>
        </div>
        <div class="col-md-3" id="selmenu">
          <span>Bienes</span>
        </div>



      </div>

      <div class="row" class="contenido">
        <div class="col-md-9"  id="contprincipal">
          <?php if (!isset($_POST["matricula"])) ?>
          <form method="post">
            <div class="form-group">
              <label for="Nombre">Nombre: </label>
              <input type="text" class="form-control" name="Nombre" placeholder="Introduce Nombre">
            </div>
            <div class="form-group">
              <label for="Descripcion">Descripción: </label>
              <input type="text" class="form-control" name="Descripcion" placeholder="Introduce Descripción">
            </div>
            <div class="form-group">
              <label for="Fecha">Fecha: </label>
              <input type="date" class="form-control" name="Fecha" placeholder="Introduce Fecha">
            </div>
            <div class="form-group">
              <label for="Material">Material: </label>
              <input type="text" class="form-control" name="Material" placeholder="Introduce Material">
            </div>
            <div class="form-group">
              <label for="nombre">Autor: </label>
              <input type="text" class="form-control" name="Autor" placeholder="Introduce Autor">
            </div>
            <div class="form-group">
              <label for="Imagen">Imagen: </label>
              <input type="text" class="form-control" name="Imagen" placeholder="Introduce Ruta de Imagen">
            </div>
            <div class="form-group">
              <input class="btn btn-default" type="submit" name="enviar" value="Añadir Usuario">
            </div>
          </form>




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
