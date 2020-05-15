<?php

require_once ("../config/conexion.php");

$consulta="SELECT p.idproducto,p.nombre as NomProd,p.descripcion,c.nombre as NomCat,p.stock,p.precio_venta,p.estado
             FROM producto as p
             INNER JOIN categoria as c on c.idcategoria=p.idcategoria";
$queryProducto=mysqli_query($conexion,$consulta);
$array=mysqli_fetch_array($queryProducto);


?>