<?php 
      include('conexion.php');  
    sleep(2);
    $nombre = mysqli_real_escape_string($con, $_POST["nombre"]); 
    $apellido = mysqli_real_escape_string($con, $_POST["apellido"]);
    $usuario = mysqli_real_escape_string($con, $_POST["usuario"]);
    $telefono = mysqli_real_escape_string($con, $_POST["telefono"]);
    $correo = mysqli_real_escape_string($con, $_POST["correo"]);
    $contrasena = mysqli_real_escape_string($con, $_POST["contrasena"]);
    $alerta = "";

    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario'";
    $res = mysqli_query($con, $sql);
    $data = mysqli_fetch_array($res);
    if ($data > 0) {
      $alerta .= " El nombre de usuario ya esta registrado";
    }
      
           $sql = "SELECT * FROM usuarios WHERE correo ='$correo'";
      $res = mysqli_query($con, $sql);
      $data = mysqli_fetch_array($res);
      if ($data > 0) {
        $alerta .= " El correo ingresado ya está registrado";
      }
      
  if ($alerta != "") {
    echo "<div class='alert alert-dismissible alert-danger'><strong>Error </strong>$alerta </div>";
  } else {
    $sql = "INSERT INTO usuarios(nombre, apellido, usuario, telefono, correo, contrasena) VALUES( '$nombre', '$apellido', '$usuario', '$telefono','$correo', '$contrasena')";
    mysqli_query($con, $sql);
    echo "<div class='alert alert-dismissible alert-success'><strong>¡Correcto!</strong><br>Se ha registrado correctamente.</div>";
  } 
?>