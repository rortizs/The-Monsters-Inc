<?php

require_once ("../config/conexion.php");

$consulta="SELECT us.idusuario,us.nombre,us.telefono,us.direccion,us.correo,us.estado,ro.nombrer 
		   from usuario as us INNER JOIN rol as ro on us.idrol=ro.idrol ";
$query=mysqli_query($conexion,$consulta);
$array=mysqli_fetch_array($query);


?>