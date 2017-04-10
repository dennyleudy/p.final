<?php

  class plant{
    static $instancia;
    static function inicio(){
      self::$instancia = new plant();
    }

  function __construct(){
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bicicletas.com</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('base')?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('base')?>/css/1-col-portfolio.css" rel="stylesheet">

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }

    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>
    <style>
    body {
    background-image: url("humo.jpg");

}
    </style>


</head>

<bag
<body backgroud=("#AFA54F")>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <a class="navbar-brand" href="#">Bicicletas.com</a>
            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url('inicio');?>">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('inicio/login');?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('inicio/lo_datos'); ?>">Los datos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

<?php
}
  function __destruct(){
    ?>
    <hr>
      </div>
      <!-- /.container -->

      <!-- Footer -->
      <footer class="py-5 bg-inverse">
          <div class="container">
              <p class="m-0 text-center text-white">Copyright &copy;@Itla 2017</p>
          </div>
          <!-- /.container -->
      </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url('base')?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('base')?>/vendor/tether/tether.min.js"></script>
  <script src="<?php echo base_url('base')?>/vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
    <?php
    }

  }
