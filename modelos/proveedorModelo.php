<?php
$CasaComercial=$_POST['Ccomercial'];
$Vendedor=$_POST['vendedor'];
$Telefono=$_POST['telefono'];






require_once ("../config/conexion.php");


//consulta si usuario existe

$insertar="INSERT INTO proveedor(idproveedor, casa_comercial, nombreVendedor, telefono, estado)
            VALUES('','$CasaComercial','$Vendedor','$Telefono',1)";
//$conexion=mysqli_connect("localhost","root","","dbsistema");
$resultado=mysqli_query($conexion,$insertar);

if(!$resultado){
    //header('location: ../vistas/menu.php');
    echo "No se ingreso el proveedor";
    //header('location: ../vistas/clientes.php');
 
}

else{

    //header('location: ../vistas/login.php');
    //echo "swal('Archived!', 'Click ok to see!', 'success')";
    header('location: ../vistas/proveedores.php');

}

mysqli_close($conexion);

?>