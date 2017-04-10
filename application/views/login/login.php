<?php
plant::inicio();
 ?>
<?php
  session_start();
  if ($_POST) {
    // Creando la conexion con la base de datos
    // host_base_dedatos, usuario, contraseña, nombre_base_datos
    $connection = mysqli_connect('localhost', 'root', '', 'datos');

    // Limpiando la entrada del usuario
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    // Haciendo consulta del usuario y la contraseña
    $query = mysqli_query($connection,
      "SELECT * FROM usuarios
      WHERE usuario = '$username'
      AND contrasena = '$password'
      LIMIT 1
    ");

    // Verificar si existe el usuario
    if ($query && $row = mysqli_fetch_array($query)) {
      // Redirecciona a la página de inicio
      header('Location: http://localhost/inicio');

      // Guarda el usuario en la sesion
      $_SESSION['user'] = $row;

      // Salimos de la ejecucion del codigo
      exit;
    } else {
      // Coloca como true el valor de loginError
      $loginError = true;
    }
  }
?>
<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> <!--Iconos-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">
  </head>


  <body>
    <div class="my-content" >
        <div class="container" >

            <div class="row">
              <div class="col-sm-12" >
                  <h1><strong>Entrar En</strong> ITLA BIKE</h1>
                  <div class="mydescription">
                        </div>
              </div>
            </div>

            <div class="row">
                  <div class="col-sm-6 col-sm-offset-3 myform-cont" >
                      <div class="myform-top">
                          <div class="myform-top-left">
                            <h3>Ingresa a nuestro sitio.</h3>
                              <p>Digita tu usuario y contraseña:</p>
                          </div>
                          <div class="myform-top-right">
                            <i class="fa fa-key"></i>
                          </div>
                      </div>
                      <div class="myform-bottom">
                        <form role="form" action="" method="post" class="">
                          <?php if (isset($loginError) && $loginError): ?>
                          <div class="alert alert-danger">
                            Usuario y/o contraseña incorrecta
                          </div>
                          <?php endif; ?>
                          <div class="form-group">
                              <input type="text" name="username" placeholder="Usuario..." class="form-control" id="form-username">
                          </div>
                          <div class="form-group">
                              <input type="password" name="password" placeholder="Contraseña..." class="form-control" id="form-password">
                          </div>
                          <button type="submit" class="mybtn">Entrar</button>
                          <br><br/>
                          <!-- <button type="submit" class="mybtn" style="background: red" onclick="window.open('register.html', 'width=800,height=600');"/>Registrate</button> -->


                        </form>
                      </div>
                  </div>
            </div>

            <div class="row">
                 <div class="col-sm-12 mysocial-login">
                    <h3>...ingresa también por:</h3>
                    <div class="mysocial-login-buttons" >
                      <a class="mybtn-social" href="#">
                      <i class="fa fa-facebook"></i> Facebook
                      </a>
                      <a class="mybtn-social" href="#">
                      <i class="fa fa-twitter"></i> Twitter
                      </a>
                      <a class="mybtn-social" href="#">
                      <i class="fa fa-google-plus"></i> Google Plus
                      </a>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script src="js/bootstrap.min.js"></script>
  </body>

</html>
