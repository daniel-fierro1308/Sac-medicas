<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bienvenido</title>
  <link rel="stylesheet" href="../public/css/logueado/index_log.css">
</head>
<body>
<?php
 include('./controladores/conexion.php');
 include('layout.php');
if(!isset($_SESSION["usuario"])){
  header("location:../login.php");
} else {
$usuario = $_SESSION['usuario']; 
$consulta = "SELECT nombre,apellido FROM usuarios WHERE usuario = '$usuario'";
$resultado = mysqli_query($con, $consulta);
$row= mysqli_fetch_array($resultado);
}
?>
<div class="container">
  <div class="bienvenida"> 
  <strong><p id="user">Bienvenido! <?php echo $row['nombre']; ?>   <?php echo $row['apellido']; ?>  </p></strong>
  </div>
  </div>

     <?php 
  require('footer.php');
?>
</body>
</html> 