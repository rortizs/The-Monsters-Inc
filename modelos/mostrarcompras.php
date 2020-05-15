<?php

require_once ("../config/conexion.php");

$consulta="SELECT com.idcompra, prv.casa_comercial,us.nombre,com.num_comprobante,
				  com.fecha,pro.nombre as'nombrepro',dc.cantidad,dc.precio,com.total
		   FROM compra	as com
			INNER JOIN proveedor as prv on com.idproveedor=prv.idproveedor
			INNER JOIN usuario as us on com.idusuario=us.idusuario
			INNER JOIN detalle_compra as dc	on com.idcompra=dc.idcompra
			INNER JOIN producto as pro on dc.idproducto=pro.idproducto";

$query=mysqli_query($conexion,$consulta);
$array=mysqli_fetch_array($query);


?>