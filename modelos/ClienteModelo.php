<?php
$ClienteNombre=$_POST['nomcliente'];
$ClienteNit=$_POST['nitcliente'];
$ClienteDireccion=$_POST['dircliente'];
$ClienteTelefono=$_POST['telcliente'];



require_once ("../config/conexion.php");


//consulta si usuario existe

$insertar="INSERT INTO cliente(idcliente,nombre,nit,direccion,telefono)
            VALUES('','$ClienteNombre','$ClienteNit','$ClienteDireccion','$ClienteTelefono')";
//$conexion=mysqli_connect("localhost","root","","dbsistema");
$resultado=mysqli_query($conexion,$insertar);

if(!$resultado){
    //header('location: ../vistas/menu.php');
    echo "No se ingreso el Usuario";
    //header('location: ../vistas/clientes.php');
 
}

else{

    //header('location: ../vistas/login.php');
    //echo "swal('Archived!', 'Click ok to see!', 'success')";
    header('location: ../vistas/clientes.php');

}

mysqli_close($conexion);

?>