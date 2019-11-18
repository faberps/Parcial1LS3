<?php
  
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/theme.css" type="text/css" media="all">
    
    <title>Week Plan</title>
  </head>
  <body>
          <div class="container h-100">
          <div class="d-flex justify-content-center h-100">
            <div class="user_card">
              <div class="d-flex justify-content-center">
                <div class="brand_logo_container">
                  <img src="img/logo2.png" class="brand_logo" alt="Logo">
                </div>
              </div>
              <div class="d-flex justify-content-center form_container">
                <form  action="Tarea.php"  method="post">
                  <label for="email">Ingrese su número de identificación</label> <br />
                  <div class="input-group mb-3">
                    <input type="text" name="cedula" id="cedula"
                     class="form-control input_user" placeholder="Identficacion"
                      pattern="[0-9]{3,14}" 
                      oninvalid="setCustomValidity('El campo debe contener solo numeros, con almenos 4 caracteres y maximo 14')"
                      oninput="setCustomValidity('')"
                      >
                  </div>
                    <div class="d-flex justify-content-center mt-3 login_container">
                    <input class="btn btn-primary background-light" id="login" type="submit" value="Ingresar">
                    </div>
                </form>
              </div>
          
              
            </div>
          </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="gestorTareas.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>