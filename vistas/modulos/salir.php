<?php

echo $_SESSION['id'];
echo $_SESSION['usuario'];


date_default_timezone_set('America/Guatemala');
			
	$fecha = date('Y-m-d');
	$hora = date('H:i:s');
		
	$fechaActual = $fecha.' '.$hora;
$stmt = Conexion::conectar()->prepare("INSERT INTO tbl_logsalida(idusuario, fin_login) VALUES (:id,:fechaActual)");

		$stmt->bindParam(":id", $_SESSION['id'], PDO::PARAM_STR);
		$stmt->bindParam(":fechaActual", $fechaActual, PDO::PARAM_STR);
		if($stmt->execute()){

			session_destroy();							
			echo '<script>
											
				window.location = "ingreso";
					
			</script>';

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;



?>