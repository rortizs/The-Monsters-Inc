<?php
$NombreCategoria=$_POST['catProd'];
$Codigo=$_POST['codProd'];
$Nombre=$_POST['nombreProd'];
$Precio=$_POST['preVenta'];
$Stock=$_POST['stockProd'];
$Descripcion=$_POST['descProd'];



require_once ("../config/conexion.php");


//consulta si usuario existe

$insertar="INSERT INTO producto(idproducto,idcategoria,codigo,nombre,precio_venta,stock,descripcion,estado)
            VALUES('','$NombreCategoria','$Codigo','$Nombre','$Precio','$Stock','$Descripcion',1)";
//$conexion=mysqli_connect("localhost","root","","dbsistema");
$resultado=mysqli_query($conexion,$insertar);

if(!$resultado){
    //header('location: ../vistas/menu.php');
    echo "No se ingreso el Producto";
    //header('location: ../vistas/clientes.php');
 
}

else{

    //header('location: ../vistas/login.php');
    //echo "swal('Archived!', 'Click ok to see!', 'success')";
    header('location: ../vistas/productos.php');

}

mysqli_close($conexion);

?>