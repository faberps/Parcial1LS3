<?php
include 'Tarea.cls.php';
include 'GestorUsuario.php';
include 'getUser.php'
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/theme.css" type="text/css" media="all">
    <title>Week Plan</title>
  </head>
  <body>
    
  <nav class="navbar  fixed-top navbar-expand-md navbar-light bg-light">
    <a class="navbar-brand abs" href="#">
      <img src="../img/logo2.png" width="30" height="30" class="d-inline-block align-top" alt="">
      WeekPlan
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="collapsingNavbar">

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#salir" data-target="#myModal" data-toggle="modal">SALIR</a>
            </li>
        </ul>
    </div>
  </nav>
    <div class="container">
      <div class="centrado">
        <h2>¡Bienvedido!</h2>
          <h5>WeekPlan, tu sistema de tareas favorito</h5>
          <p>Aqui podras llevar un control de tareas pendientes</p>
          <p>Añade una  <b>nueva tarea:</b></p>
          <input type="text" placeholder="Nombre de la tarea" name="codigo" id="codigo">
          <button id="btn_enviar" type="submit">Enviar</button>
          <div class="guia">
                  <h2>TAREAS</h2>
                  <div class="color-green">Sin Completar</div>
                  <div class="color-gray">Completada</div>
                  <p>haz clic en el recuadro <img src="../img/cheque.png"> para terminar la tarea</p>
              </div>
          </div>
          
          <div class="estCodigo">
              <p>Su número de identificación es: <b><?php echo $usuario->getId(); ?></b>
              </p>
          </div>

          <div class="guia">
                  <h2>TAREAS</h2>
                  <div class="color-green">Sin Completar</div>
                  <div class="color-gray">Completada</div>
                  <p>haz clic en el recuadro <img src="../img/cheque.png"> para terminar la tarea</p>
              </div>
          </div>

          <div class="table-responsive">
            <table class="table">
              Hola
            </table>
          </div>
      </div>
    </div>
    
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>