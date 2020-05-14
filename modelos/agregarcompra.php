<?php 

require_once ("../config/conexion.php");

$prove=$_POST['proveedor'];
echo $prove;
$idprod=$_POST['producto'];
$cant=$_POST['cantidad'];
$preuni=$_POST['preciouni'];
$compro=$_POST['comprobante'];
$tot=$_POST['total'];

 $date = date('Y-m-d H:i:s');



  $insdecom = "INSERT INTO compra (idproveedor,idusuario,num_comprobante,fecha,total) 
                                        VALUES ('$prove',4,'$compro','$date','$tot')";

		
		if (mysqli_query($conexion, $insdecom))
		{

				
				$consulta="SELECT * FROM compra order by idcompra DESC LIMIT 1";

				$resultado=mysqli_query($conexion,$consulta);

				$fila =mysqli_fetch_array($resultado);

				$id = $fila["idcompra"];

					echo "$id";

				$con= "INSERT INTO detalle_compra(idcompra,idproducto,cantidad,precio) 
                                                 VALUES ('$id','$idprod','$cant','$preuni')";

                    mysqli_query($conexion, $con);
                 //echo "creado exitosamente";
        }else {
        			 echo '<script language="javascript">alert("Error de conexion");</script>';
                     //echo "Error";

               }







 ?>