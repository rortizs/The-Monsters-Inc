<?php 

require_once ("../config/conexion.php");

$name=$_POST['nombre'];
$dire=$_POST['direccion'];
$tel=$_POST['telefono'];
$email=$_POST['correo'];
$roll=$_POST['rol'];
$pass=$_POST['pass'];
$expresioncontra = '/^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/';
$expresioncorreo = '/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}/';
/*
echo "<p>";
echo $name; 
echo "<p>";
echo $dire; 
echo "<p>";
echo $email;
echo "<p>"; 
echo $roll; 
echo "<p>";
echo $pass; 
 */
    
	//Funcion que permite verificar si lo que ingresamos es lo que se requiere 

	preg_match($expresioncorreo, $email, $match, PREG_OFFSET_CAPTURE);
 if ($match) 
{
    //echo "Esta dirección de correo ($email) es válida.";
    preg_match($expresioncontra, $pass, $matches, PREG_OFFSET_CAPTURE);

	if($matches)
	{
		 $passHash = password_hash($pass, PASSWORD_BCRYPT);
	     //echo "nivel de contraseña: $pass aceptado";


              $insdecom = "INSERT INTO usuario (idrol,nombre,telefono,direccion,correo,password,estado) 
                                        VALUES ('$roll','$name','$tel','$dire','$email','$passHash',1)";

		if (mysqli_query($conexion, $insdecom))
		{

				 header('location: ../vistas/usuarios.php');
                 //echo "creado exitosamente";
        }else {
        			 echo '<script language="javascript">alert("Error de conexion");</script>';
                     //echo "Error";

               }


    }else{
    		 echo '<script language="javascript">alert("La contraseña debe tener entre 8 y 16 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula. Puede tener otros símbolos.");</script>';	
	        
          }


}else{

	 echo '<script language="javascript">alert("La direccion de correo no es valida");</script>';
     // echo "Esta dirección de correo ($email) no es válida.";

      }


 ?>