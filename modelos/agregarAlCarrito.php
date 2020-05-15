<?php
if(!isset($_POST['codigo'])) return;
$codigo = $_POST['codigo'];
echo "No conecta a la base de datos";
require_once ("../config/conexion.php");
/*$consulta="SELECT * FROM productos WHERE codigo = ? LIMIT 1;";
$query=mysqli_query($conexion,$consulta);
$array=mysqli_fetch_array($query);

$codigo = $_POST["codigo"];
include_once "base_de_datos.php";*/
$sentencia = $conexion->prepare("SELECT * FROM producto WHERE codigo = '$codigo' LIMIT 1;");
$sentencia->execute([$codigo]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);


/*
$sentencia = $../config/conexion->prepare("SELECT * FROM productos WHERE codigo = ? LIMIT 1;");
*//*
$query[$codigo];
$producto = $array=mysqli_fetch_array($query);
*/
if($producto){
	if($producto->existencia < 1){
		header("Location: ../vistas/facturacion.php?status=5");
		exit;
	}
	session_start();
	$indice = false;
	for ($i=0; $i < count($_SESSION["carrito"]); $i++) { 
		if($_SESSION["carrito"][$i]->codigo === $codigo){
			$indice = $i;
			break;
		}
	}
	if($indice === FALSE){
		$producto->cantidad = 1;
		$producto->total = $producto->precioVenta;
		array_push($_SESSION["carrito"], $producto);
	}else{
		$_SESSION["carrito"][$indice]->cantidad++;
		$_SESSION["carrito"][$indice]->total = $_SESSION["carrito"][$indice]->cantidad * $_SESSION["carrito"][$indice]->precioVenta;
	}
	header("Location: ../vistas/facturacion.php");
}else header("Location: ../vistas/facturacion.php?status=4");
?>