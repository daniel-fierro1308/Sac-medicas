
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/animate.css">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/img/login/style.css">
    <title>Document</title>
    <style>
        nav {
            margin-bottom: 3%;
        }
    </style>
</head>
<body>
   <nav class="navbar navbar-toggleable-md navbar-inverse bg-primary">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <?php
    session_start();
    if(isset($_SESSION['usuario'])){
      echo '<a class="navbar-brand" href="index_log.php">Work</a>';
    } else {
      echo '<a class="navbar-brand" href="index.php">Work</a>';
    }
   ?>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav navbar-right pull-lg-right">
    <?php
      if (isset($_SESSION["usuario"])) {
        echo '<li class="nav-item">
        <a class="nav-link active" href="index_log.php">INICIO<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="imagenes.php">MIS IMAGENES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="info.php">MI INFORMACION</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="contact_developer.php">CONTACTARSE CON EL DESARROLLADOR</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="./controladores/logout.php">CERRAR SESION</a>
      </li>';
    } else {
        echo '<li class="nav-item">
        <a class="nav-link active" href="index.php">INICIO<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="servicios.php">SERVICIOS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="login.php">INICIAR SESION</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="registro.php">REGISTRARSE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="contacto.php">CONTACTO</a>
      </li>';
    }
    ?>
    </ul>
  </div>
</nav>
<script src="../public/js/recursos/jquery.min.js"></script>
<script src="../public/js/recursos/bootstrap.min.js"></script>
<script src="../public/js/recursos/handlebars.js"></script>
<script src="../public/js/recursos/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
</body>
</html>