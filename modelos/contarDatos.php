<?php

require_once ("../config/conexion.php");

$contar = "SELECT COUNT(idcliente)totalCli FROM cliente";
$result = mysqli_query($conexion,$contar);
$fila = mysqli_fetch_assoc($result);

$contar1 = "SELECT COUNT(idproveedor)totalProv FROM proveedor";
$result1 = mysqli_query($conexion,$contar1);
$fila1 = mysqli_fetch_assoc($result1);

$contar2 = "SELECT COUNT(idproducto)totalProd FROM producto";
$result2 = mysqli_query($conexion,$contar2);
$fila2 = mysqli_fetch_assoc($result2);

$contar3 = "SELECT COUNT(idcategoria)totalCat FROM categoria";
$result3 = mysqli_query($conexion,$contar3);
$fila3 = mysqli_fetch_assoc($result3);
/*
echo 'Número de total de registros: ' . $fila['totalCli'];
*/
?>