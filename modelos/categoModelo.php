<?php
$CatNombre=$_POST['nomCat'];
$CatDescripcion=$_POST['descCat'];




require_once ("../config/conexion.php");


//consulta si usuario existe

$insertar="INSERT INTO categoria(idcategoria, nombre, descripcion, estado)
            VALUES('','$CatNombre','$CatDescripcion',1)";
//$conexion=mysqli_connect("localhost","root","","dbsistema");
$resultado=mysqli_query($conexion,$insertar);

if(!$resultado){
    //header('location: ../vistas/menu.php');
    echo "No se ingreso la categoria";
    //header('location: ../vistas/clientes.php');
 
}

else{

    //header('location: ../vistas/login.php');
    //echo "swal('Archived!', 'Click ok to see!', 'success')";
    header('location: ../vistas/categorias.php');

}

mysqli_close($conexion);

?>