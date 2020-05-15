<?php 
	if(!isset($_POST['codigo'])) return;
	$codigo = $_POST['codigo'];
	require_once ("../config/conexion.php");
	$consulta="SELECT * FROM producto WHERE codigo = '$codigo' LIMIT 1;";
	$query=mysqli_query($conexion,$consulta);
	$array=mysqli_fetch_array($query);
	$producto = $array["codigo"];
	/*$query([$dato]);
	echo $query([$dato]);
	$producto = $array=mysqli_fetch_array($query);*/
	echo $fila;
	if($producto){
	if($array["stock"] < 1){
		header("Location: ../vistas/facturacion.php?status=5");
		exit;
	}
	session_start();
	$indice = false;
	for ($i=0; $i < count($_SESSION["carrito"]); $i++) { 
		if($_SESSION["carrito"][$i]$array["codigo"] === $codigo){
			$indice = $i;
			break;
		}
	}
	if($indice === FALSE){
		$producto->cantidad = 1;
		$producto->total = $producto->precio_venta;
		array_push($_SESSION["carrito"], $producto);
	}else{
		$_SESSION["carrito"][$indice]->cantidad++;
		$_SESSION["carrito"][$indice]->total = $_SESSION["carrito"][$indice]->cantidad * $_SESSION["carrito"][$indice]->precioVenta;
	}
	header("Location: ../vistas/facturacion.php");
}else header("Location: ../vistas/facturacion.php?status=4");


 ?>