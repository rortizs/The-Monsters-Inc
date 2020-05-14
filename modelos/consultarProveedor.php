<?php

require_once ("../config/conexion.php");

$consulta="SELECT * FROM proveedor";
$Provquery=mysqli_query($conexion,$consulta);
$array=mysqli_fetch_array($Provquery);


?>