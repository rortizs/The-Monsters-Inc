<?php

require_once ("../config/conexion.php");

$consulta="SELECT * FROM categoria";
$Catquery=mysqli_query($conexion,$consulta);
$array=mysqli_fetch_array($Catquery);


?>