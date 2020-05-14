<?php


require_once ("../config/conexion.php");
$email=$_POST['email'];
$password=$_POST['password'];





//consulta si existe un usuario con correo ingresado

$consulta="SELECT * FROM usuario WHERE correo='$email'";

$resultado=mysqli_query($conexion,$consulta);


//obtiene los datos del base de datos segun la consulta

$fila =mysqli_fetch_array($resultado, MYSQLI_BOTH);

$pass = $fila["password"];
//compara la conraseña ingresada con la encriptada 
$contra = password_verify($password,$pass);

if ($contra) {
     header('location: ../vistas/menu.php');
} else {
    echo 'La contraseña no es válida.';
}


mysqli_free_result($resultado);
mysqli_close($conexion);

?>