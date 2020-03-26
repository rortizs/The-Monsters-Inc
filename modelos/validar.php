<?php
$usuario=$_POST['usuario'];
$password=$_POST['password'];

require_once ("../config/conexion.php");



//consulta si usuario existe

$consulta="SELECT * FROM usuario WHERE username='$usuario' AND pass='$password'";
//$conexion=mysqli_connect("localhost","root","","dbsistema");
$resultado=mysqli_query($conexion,$consulta);


$filas=mysqli_num_rows($resultado);

if($filas>0){
    header('location: ../vistas/menu.php');
    //echo "Si existe";
}
else{
    header('location: ../vistas/login.php');
    //echo "no existe";
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>