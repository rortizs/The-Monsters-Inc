<?php

require_once ("../config/conexion.php");

$consulta="SELECT * FROM producto";
$query=mysqli_query($conexion,$consulta);
$array=mysqli_fetch_array($query);


?>